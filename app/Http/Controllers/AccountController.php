<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Notifications\Messages\NexmoMessage;
use Nexmo\Laravel\Facade\Nexmo;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("valmaster.accounts.index", ['clients' => Client::paginate(10)]);
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

        return redirect( route('valmaster.accounts.index'));
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
    public function saveInvoice($id){


        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.accounts.invoice.mail-invoice',  [
            'client' => Client::find($id),
            'user' => User::all()
        ]);
        return $pdf->download('Invoice - '.$client->branch.$client->id.'.pdf');
    }

    public function sendInvoice($id){

        $client = Client::find($id);
        $pdf = PDF::loadView('valmaster.accounts.invoice.mail-invoice',  [
            'client' => Client::find($id),
            'user' => User::all()
        ]);


        $data["email"] = "aatmaninfotech@gmail.com";
        $data["title"] = "From Sherwood Greene";
        $data["body"] = "This is Demo";

        Mail::send('valmaster.accounts.send.emails.invoice',  $data, function($message)use($client, $pdf) {
            $message->to($client->client_email)
                ->from('Kahilu@mail.com')
                ->subject('Invoice')
                ->attachData($pdf->output(), 'Invoice - '.$client->branch.$client->id.'.pdf');
        });

        dd('Mail sent successfully');

    }





    public function receipt(){

       /* return view("valmaster.accounts.send.invoice");*/
        return view('valmaster.accounts.send.receipt');

    }

    public function sendEmail(){


        Mail::to('kahiluchipango@gmail.com')->send(new InvoiceMail());
       return new InvoiceMail();

    }


    public function sendSms($id){

        $data = Client::find('contact_person_number');


        $basic  = new \Vonage\Client\Credentials\Basic("343ceee7", "3scJRrOn6xWqwJKQ");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS(
                Client::find('contact_person_number'),
                'Sherwood',
                'this is From Sherwood greene Properties Limited')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }

}
