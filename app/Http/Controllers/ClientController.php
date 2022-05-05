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


    public function index(Request $request)
    {

        $search = $request['search'] ?? "";
        if ($search != "") {
            $clients = Client::where('id', 'LIKE', '%'.$search.'%')
                ->orWhere('branch', 'LIKE', '%'.$search.'%')
                ->orWhere('client_name', 'LIKE', '%'.$search.'%')
                ->orWhere('client_number', 'LIKE', '%'.$search.'%')
                ->orWhere('client_email', 'LIKE', '%'.$search.'%')
                ->orWhere('contact_person', 'LIKE', '%'.$search.'%')
                ->orWhere('contact_person_number', 'LIKE', '%'.$search.'%')
                ->orWhere('property_address', 'LIKE', '%'.$search.'%')
                ->orWhere('fee', 'LIKE', '%'.$search.'%')
                ->orWhere('fee_status', 'LIKE', '%'.$search.'%')
                ->orWhere('report_status', 'LIKE', '%'.$search.'%')
                ->orWhere('feedback_status', 'LIKE', '%'.$search.'%')
                ->orWhere('type_of_property', 'LIKE', '%'.$search.'%')
                ->orWhere('market_value', 'LIKE', '%'.$search.'%')
                ->orWhere('purpose', 'LIKE', '%'.$search.'%')
                ->orWhere('property_description', 'LIKE', '%'.$search.'%')
                ->orWhere('report_due_date', 'LIKE', '%'.$search.'%')
                ->orWhere('inspection_due', 'LIKE', '%'.$search.'%')
                ->orWhere('valuation_time', 'LIKE', '%'.$search.'%')
                ->orWhere('days_taken_to_complete', 'LIKE', '%'.$search.'%')
                ->orWhere('fee_due_date', 'LIKE', '%'.$search.'%')
                ->orWhere('date_of_delivery', 'LIKE', '%'.$search.'%')
                ->orWhere('date_of_receipt_of_instruction', 'LIKE', '%'.$search.'%')
                ->paginate(20);

        } else {
            $clients = Client::paginate(10);

        }

        return view("valmaster.front-desk.table-content")
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
        $request->validate([
            'branch' => ['required'],
            'client_name' => ['required', 'string'],
            'client_number' => ['required'],
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

        return redirect(route('valmaster.front-desk.create'))->with('Add', 'Record has been saved to database');
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
    public function edit($id)
    {
        return view("valmaster.front-desk.edit",
            [
                'client' => Client::find($id),
                'users' => User::all()
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        return redirect(route('valmaster.front-desk.index'))->with('Update', 'You Have Successfully Updated '.$client->client_name.' Job #: '.$client->branch.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return redirect(route('valmaster.front-desk.index'))->with('delete', 'Record has Been Deleted ');
    }



}
