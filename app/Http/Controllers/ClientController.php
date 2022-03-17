<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Facade\FlareClient\Time;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        return view("valmaster.front-desk.table-content",
            [
                'clients' => Client::paginate(10),
                'users' => User::find('name')
                ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('valmaster.front-desk.create-record', ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /* $client = Client::create($request->all());
        $client->users()->attachUser($request->user_id);*/



       /* $request->session()->flash('Success', "you Have Added a New Client");*/

     //   dd($request->all());

        $request->validate([
            'branch' => ['required'],
            'client_name' => ['required', 'string'],
            'client_number' => ['required',],
            'client_email' => ['required', 'string'],
            'contact_person' => ['required',],
            'contact_person_number' => ['required'],
            'property_address' => ['required', 'string'],
            'fee' => ['required', 'integer'],
            'fee_status' => ['required'],
            'report_status' => ['required',],
            'feedback_status' => ['required',],
            'date_of_receipt_of_instruction' => ['required',],
            'inspection_due' => ['required',],
            'days_taken_to_complete' => ['required', 'integer'],
            'report_due_date' => ['required', 'date'],
            'fee_due_date' => ['required', 'date'],
            'date_of_delivery' => ['required', 'date'],
            'type_of_property' => ['required', ],

            'market_value' => ['required', ],
            'property_description' => ['required',],
        ]);

        $client = new Client();
        $client->fill($request->all());
        $client->save();





        return redirect(route('valmaster.front-desk.create'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
