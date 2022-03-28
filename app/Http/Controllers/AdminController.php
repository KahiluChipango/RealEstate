<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Client;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $clients = Client::where('id', 'LIKE', '%'.$search.'%')
                ->orWhere('branch', 'LIKE', '%'.$search.'%')
                ->orWhere('client_name', 'LIKE', '%'.$search.'%')
                ->orWhere('fee', 'LIKE', '%'.$search.'%')
                ->orWhere('fee_status', 'LIKE', '%'.$search.'%')
                ->orWhere('fee_due_date', 'LIKE', '%'.$search.'%')
                ->paginate(20);

        } else {
            $clients = Client::paginate(20);

        }

        return view("valmaster.admin.index", )
            ->with('users', User::find('name'))
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('valmaster.admin.invoice.invoice-templete',
            [
                'client' => Client::find($id),
                'user' => User::all()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('valmaster.admin.edit',
            [
                'clients' => Client::find($id),
                'user' => User::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $client->update($request->except(['user_id']));

        return redirect( route('valmaster.admin.index'))->with('Update', 'You Have Successfully Updated '.$client->client_name.' Job #: '.$client->branch.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    /**
     * Invoice Section.
     *
     */
    public function saveInvoice(Request $request, $id){


        $description= $request['description'];
        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.accounts.invoice.mail-invoice',  [
            'client' => Client::find($id),
            'user' => User::all(),
            'description' => $description
        ]);
        return $pdf->download('Invoice - '.$client->branch.$client->id.'.pdf');
    }

    public function sendInvoice(Request $request, $id){

        $description= $request['email-description'];
        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.admin.invoice.mail-invoice',  [
            'client' => Client::find($id),
            'user' => User::all(),
            'description' => $description
        ]);


        $data["title"] = "Sherwood Greene Properties";

        Mail::send('valmaster.accounts.send.emails.invoice',  $data, function($message)use($client, $pdf) {
            $message->to($client->client_email)
                ->subject('Invoice')
                ->attachData($pdf->output(), 'Invoice - '.$client->branch.$client->id.'.pdf');
        });

        return redirect()->back()->with('EmailInvoice', 'Invoice Email Has Been sent To: '.$client->client_email);

    }



    /**
     *  Save Invoice sms
     * Function.
     *
     */
    public function invoiceSms($id){

        $data = Client::find($id);

        $basic  = new \Vonage\Client\Credentials\Basic("343ceee7", "3scJRrOn6xWqwJKQ");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("260974476363", 'Hello', 'A text message sent using the Nexmo SMS API')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }

    }




    /*
     * Receipt Section
     * */

    public function showReceipt($id)
    {
        return view('valmaster.admin.receipt.receipt-templete',
            [
                'client' => Client::find($id),
                'user' => auth()->user()->name
            ]);
    }


    public function saveReceipt($id){


        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.admin.receipt.mail-receipt',  [
            'client' => Client::find($id),
            'user' => auth()->user()->name
        ]);
        return $pdf->download('Receipt - '.$client->branch.$client->id.'.pdf');
    }

    /**
     * Send Email
     * with
     * Receipt pdf
     * attachment
     * Function.
     *
     */

    public function sendReceipt($id){

        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.admin.receipt.mail-receipt',  [
            'client' => Client::find($id),
            'user' => auth()->user()->name
        ]);



        $data["title"] = "Sherwood Greene Properties Limited";
        Mail::send('valmaster.admin.send.emails.receipt',  $data, function($message)use($client, $pdf) {
            $message->to($client->client_email)
                ->subject('Receipt')
                ->attachData($pdf->output(), 'Receipt - '.$client->branch.$client->id.'.pdf');
        });

       return redirect()->back()->with('EmailReceipt', 'Receipt Email Has Been sent To: '.$client->client_email);

    }
}
