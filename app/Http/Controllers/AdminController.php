<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("valmaster.admin.index", ['clients' => Client::paginate(10)]);
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
        return view('valmaster.admin.send.invoice',
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

        return redirect( route('valmaster.admin.index'));
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


    public function invoice($id){

        /* return view("valmaster.accounts.send.invoice");*/
        return view('valmaster.admin.send.invoice',
            [
                'client' => Client::find($id),
                'user' => User::all()
            ]);


        /*  Mail::to('kahiluchipango@gmail.com')->send(new InvoiceMail());
          return new InvoiceMail();*/

        /*      $pdf = PDF::loadView('valmaster.accounts.send.invoice');
              return $pdf->download('invoice.pdf');*/

    }

    public function receipt(){


        return view('valmaster.admin.send.receipt');

    }

    public function sendEmail(){

        Mail::to('kahiluchipango@gmail.com')->send(new InvoiceMail());
        return new InvoiceMail();

    }


    public function sendSms(){

        $basic  = new \Vonage\Client\Credentials\Basic("343ceee7", "3scJRrOn6xWqwJKQ");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS(
                "260978278797",
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
