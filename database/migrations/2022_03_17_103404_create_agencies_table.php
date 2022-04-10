<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->string('job_number');
            $table->enum('rent_sale', ['N/A', 'SALE', 'RENT']);
            $table->string('web');
            $table->string('agent_in_charge');
            $table->enum('service_line', ['N/A', 'ESTATE AGENCY', 'VALUATION', 'PROPERTY MGT', 'CONSULTANCY']);
            $table->date('date_of_instruction');
            $table->string('client_name');
            $table->string('client_contact_number');
            $table->string('email');
            $table->string('property_address');
            $table->string('google_cordinates');
            $table->enum('type_of_property', ['N/A', 'Residential', 'Commercial', 'Agriculture', 'Industrial', 'Bare Land']);
            $table->enum('type_of_building', ['N/A', 'HOUSE', 'APARTMENT', 'APARTMENTS', 'FLAT', 'FLATS', 'OFFICES', 'RETAIL', 'SHOWROOM', 'WAREHOUSE', 'FACTORY']);
            $table->enum('type_of_building_2', ['N/A', 'STAND ALONE', 'COMPLEX', 'FLATS', 'SEMI DETACHED',  'BLOCK OF FLATS', 'BLOCK OF APARTMENTS', 'COMPLEX OF HOUSES']);
            $table->enum('building_height', ['N/A', 'SINGLE STORY', 'DOUBLE STORY', 'GROUND FLOOR', 'UPPER FLOOR', 'HIGHRISE']);
            $table->integer('number_of_bedrooms');
            $table->enum('size_of_rooms', ['N/A','BIG', 'MEDIUM', 'SMALL']);
            $table->integer('number_of_bathrooms');
            $table->enum('master_self_contained', ['N/A', 'YES', 'NO']);
            $table->enum('furnished', ['N/A', 'FURNISHED', 'UNFURNISHED']);
            $table->enum('quality_of_finishes', ['N/A', 'ULTRA MODERN', 'MODERN', 'MODERATE', 'OLD']);
            $table->string('land_size');
            $table->enum('guest_house', ['N/A', 'YES', 'NO']);
            $table->enum('pool_house_club', ['N/A', 'YES', 'NO']);
            $table->enum('swimming_pool', ['N/A', 'YES', 'NO']);
            $table->enum('gym', ['N/A', 'YES', 'NO']);
            $table->enum('guard_house', ['N/A', 'YES', 'NO']);
            $table->enum('workers_quarters', ['N/A', 'YES', 'NO']);
            $table->enum('garage', ['N/A', 'YES', 'NO']);
            $table->enum('layout_of_office_space', ['N/A', 'PARTIONED', 'OPEN SPACE']);
            $table->enum('parking', ['N/A', 'PLENTY', 'MODERATE', 'LITTLE', 'NO PARKING']);
            $table->enum('pets', ['N/A', 'PET FRIENDLY', 'NO PETS']);
            $table->enum('electricity', ['N/A', 'BACKUP POWER', 'NO BACKUP POWER']);
            $table->enum('water', ['N/A', 'BOREHOLE', 'COUNCIL WATER', 'WELL', 'COMMUNAL WATER', 'NO WATER' ]);
            $table->enum('surroundings', ['N/A', 'GARDENS', 'PRIVATE BACKYARD', 'NO BACKYARD']);
            $table->enum('recreational_facilities', ['N/A', 'NEARBY SOCIAL AMENITIES', 'NO NEARBY SOCIAL AMENITIES' ]);
            $table->enum('shopping', ['N/A', 'SHOPPING MALL', 'SHOPPING CENTRE', 'STAND ALONE SHOP']);
            $table->enum('schools', ['N/A', 'SCHOOL', 'NO SCHOOL']);
            $table->enum('nearby_offices', ['N/A', 'OFFICE BUILDINGS', 'NO OFFICE BUILDINGS']);
            $table->enum('transport', ['N/A', 'BUS STATION', 'NO BUS STATION', 'TAXI RANK', 'NO TAXI RANK']);
            $table->string('rent_price_k');
            $table->string('rent_price_usd');
            $table->string('sale_price_market_value_k');
            $table->string('sale_price_market_value_usd');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
