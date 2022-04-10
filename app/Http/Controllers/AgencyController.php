<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
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
            $agencies = Agency::where('job_number', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_sale', 'LIKE', '%'.$search.'%')
                ->orWhere('web', 'LIKE', '%'.$search.'%')
                ->orWhere('agent_in_charge', 'LIKE', '%'.$search.'%')
                ->orWhere('service_line', 'LIKE', '%'.$search.'%')
                ->orWhere('date_of_instruction', 'LIKE', '%'.$search.'%')
                ->orWhere('client_name', 'LIKE', '%'.$search.'%')
                ->orWhere('client_contact_number', 'LIKE', '%'.$search.'%')
                ->orWhere('email', 'LIKE', '%'.$search.'%')
                ->orWhere('property_address', 'LIKE', '%'.$search.'%')
                ->orWhere('google_cordinates', 'LIKE', '%'.$search.'%')
                ->orWhere('type_of_property', 'LIKE', '%'.$search.'%')
                ->orWhere('type_of_building', 'LIKE', '%'.$search.'%')
                ->orWhere('type_of_building_2', 'LIKE', '%'.$search.'%')
                ->orWhere('building_height', 'LIKE', '%'.$search.'%')
                ->orWhere('number_of_bedrooms', 'LIKE', '%'.$search.'%')
                ->orWhere('size_of_rooms', 'LIKE', '%'.$search.'%')
                ->orWhere('number_of_bathrooms', 'LIKE', '%'.$search.'%')
                ->orWhere('master_self_contained', 'LIKE', '%'.$search.'%')
                ->orWhere('furnished', 'LIKE', '%'.$search.'%')
                ->orWhere('quality_of_finishes', 'LIKE', '%'.$search.'%')
                ->orWhere('land_size', 'LIKE', '%'.$search.'%')
                ->orWhere('guest_house', 'LIKE', '%'.$search.'%')
                ->orWhere('pool_house_club', 'LIKE', '%'.$search.'%')
                ->orWhere('gym', 'LIKE', '%'.$search.'%')
                ->orWhere('guard_house', 'LIKE', '%'.$search.'%')
                ->orWhere('workers_quarters', 'LIKE', '%'.$search.'%')
                ->orWhere('garage', 'LIKE', '%'.$search.'%')
                ->orWhere('swimming_pool', 'LIKE', '%'.$search.'%')
                ->orWhere('layout_of_office_space', 'LIKE', '%'.$search.'%')
                ->orWhere('parking', 'LIKE', '%'.$search.'%')
                ->orWhere('pets', 'LIKE', '%'.$search.'%')
                ->orWhere('electricity', 'LIKE', '%'.$search.'%')
                ->orWhere('water', 'LIKE', '%'.$search.'%')
                ->orWhere('surroundings', 'LIKE', '%'.$search.'%')
                ->orWhere('recreational_facilities', 'LIKE', '%'.$search.'%')
                ->orWhere('shopping', 'LIKE', '%'.$search.'%')
                ->orWhere('schools', 'LIKE', '%'.$search.'%')
                ->orWhere('nearby_offices', 'LIKE', '%'.$search.'%')
                ->orWhere('transport', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_price_k', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_price_usd', 'LIKE', '%'.$search.'%')
                ->orWhere('rent_price_usd', 'LIKE', '%'.$search.'%')
                ->orWhere('sale_price_market_value_usd', 'LIKE', '%'.$search.'%')
                ->paginate(20);

        } else {
            $agencies = Agency::paginate(10);

        }
        return view("valmaster.agency.index")
            ->with('agencies', $agencies);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('valmaster.agency.create-record');
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
           'job_number' => ['required', 'string'],
           'rent_sale' => ['required'],
           'web' => ['required'],
           'agent_in_charge' => ['required'],
           'service_line' => ['required'],
           'date_of_instruction' => ['required'],
           'client_name' => ['required'],
           'client_contact_number' => ['required'],
           'email' => ['required'],
           'property_address' => ['required'],
           'google_cordinates' => ['required'],
           'type_of_property' => ['required'],
           'type_of_building' => ['required'],
           'type_of_building_2' => ['required'],
           'building_height' => ['required'],
           'number_of_bedrooms' => ['required'],
           'size_of_rooms' => ['required'],
           'number_of_bathrooms' => ['required'],
           'master_self_contained' => ['required'],
           'furnished' => ['required'],
           'quality_of_finishes' => ['required'],
           'land_size' => ['required'],
           'pool_house_club'=> ['required'],
           'gym'=> ['required'],
           'guard_house'=> ['required'],
           'workers_quarters'=> ['required'],
           'garage'=> ['required'],
           'guest_house' => ['required'],
           'swimming_pool' => ['required'],
           'layout_of_office_space' => ['required'],
           'parking' => ['required'],
           'pets' => ['required'],
           'electricity' => ['required'],
           'water' => ['required'],
           'surroundings' => ['required'],
           'recreational_facilities' => ['required'],
           'shopping' => ['required'],
           'schools' => ['required'],
           'nearby_offices' => ['required'],
           'transport' => ['required'],
           'rent_price_k' => ['required'],
           'rent_price_usd' => ['required'],
           'sale_price_market_value_k' => ['required'],
           'sale_price_market_value_usd' => ['required']
       ]);

       /*dd($request->all());*/
       $agency = new Agency();
       $agency->fill($request->all());
       $agency->save();

       return redirect(route('valmaster.agency.index'))->with('Add', 'Record has been saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('valmaster.agency.edit',
            [
                'agency' => Agency::find($id)
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
        $agency = Agency::findOrFail($id);

        $agency->update($request->all());
        return redirect(route('valmaster.agency.index'))->with('Update', 'You Have Successfully Updated '.$agency->client_name.' Job #: '.$agency->job_number);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agency::destroy($id);
        return redirect(route("valmaster.agency.index"))->with('delete', 'Record has Been Deleted ');
    }
}
