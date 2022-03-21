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
    public function index()
    {
        return view("valmaster.agency.index",
            [
                'agencies' => Agency::paginate(10),
                //'users' => User::find('name')
            ]);
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
           'additional_buildings' => ['required'],
           'swimming_pool' => ['required'],
           'layout_of_office_space' => ['required'],
           'parking' => ['required'],
           'pets' => ['required'],
           'electricity' => ['required'],
           'water' => ['required'],
           'surroundings' => ['required'],
           'surroundings_facilities_1' => ['required'],
           'surroundings_facilities_2' => ['required'],
           'surroundings_facilities_3' => ['required'],
           'surroundings_facilities_4' => ['required'],
           'surroundings_facilities_5' => ['required'],
           'rent_price_k' => ['required'],
           'rent_price_usd' => ['required'],
           'sale_price_market_value_k' => ['required'],
           'sale_price_market_value_usd' => ['required']
       ]);

       /*dd($request->all());*/
       $agency = new Agency();
       $agency->fill($request->all());
       $agency->save();

       return redirect(route('valmaster.agency.index'));
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
        return redirect(route('valmaster.agency.index'));
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
        return redirect(route("valmaster.agency.index"));
    }
}
