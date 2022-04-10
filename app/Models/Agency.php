<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable =[
        'job_number',
        'rent_sale',
        'web',
        'agent_in_charge',
        'service_line',
        'date_of_instruction',
        'client_name',
        'client_contact_number',
        'email',
        'property_address',
        'google_cordinates',
        'type_of_property',
        'type_of_building',
        'type_of_building_2',
        'building_height',
        'number_of_bedrooms',
        'size_of_rooms',
        'number_of_bathrooms',
        'master_self_contained',
        'furnished',
        'quality_of_finishes',
        'land_size',
        'guest_house',
        'pool_house_club',
        'gym',
        'workers_quarters',
        'garage',
        'guard_house',
        'swimming_pool',
        'layout_of_office_space',
        'parking',
        'pets',
        'electricity',
        'water',
        'surroundings',
        'recreational_facilities',
        'shopping',
        'schools',
        'nearby_offices',
        'transport',
        'rent_price_k',
        'rent_price_usd',
        'sale_price_market_value_k',
        'sale_price_market_value_usd'
    ];


}
