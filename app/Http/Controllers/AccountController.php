<?php

namespace App\Http\Controllers;
use Notification;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;


class AccountController extends Controller
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

        return view("valmaster.accounts.index", )
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
        return view('valmaster.accounts.invoice.invoice-templete',
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
        return view('valmaster.accounts.edit',
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


        return redirect( route('valmaster.accounts.index'))->with('Update', 'You Have Successfully Updated '.$client->client_name.' Job #: '.$client->branch.$id);
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
     *  Save Invoice to pdf Function.
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


    /**
     * Send Email
     * with
     * invoice pdf
     * attachment
     * Function.
     *
     */

    public function sendInvoice(Request $request, $id){

        $description= $request['email-description'];
        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.accounts.invoice.mail-invoice',  [
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

        $basic  = new \Vonage\Client\Credentials\Basic("343ceee7", "1093200091Hilo");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS('+26'.$data->contact_person_number, 'ChipaWebs', 'Thank You for doing business with ChipaWebs')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            return redirect()->back()->with('SuccessSms', 'Sms Has Been sent To: '.$data->contact_person.' ('.$data->contact_person_number.')');
        } else {
            return redirect()->back()->with('FailSms', 'Sms Has Not Been Sent '.$message->getStatus() . "\n");
        }

    }




    /**
     * Receipt Section
     *
     */

    public function showReceipt($id)
    {


        return view('valmaster.accounts.receipt.receipt-templete',
            [
                'client' => Client::find($id),
                'user' => auth()->user()->name
            ]);
    }


    public function saveReceipt($id){


        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.accounts.receipt.mail-receipt',  [
            'client' => Client::find($id),
            'user' => auth()->user()->name,
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
        $pdf = PDF::loadView('valmaster.accounts.receipt.mail-receipt',  [
            'client' => Client::find($id),
            'user' => auth()->user()->name
        ]);


        $data["title"] = "Sherwood Greene Properties Limited";

        Mail::send('valmaster.accounts.send.emails.receipt',  $data, function($message)use($client, $pdf) {
            $message->to($client->client_email)
                ->subject('Receipt')
                ->attachData($pdf->output(), 'Receipt - '.$client->branch.$client->id.'.pdf');
        });

        return redirect()->back()->with('EmailReceipt', 'Receipt Email Has Been sent To: '.$client->client_email);

    }

}
