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
            $table->enum('rent/sale', ['SALE', 'RENT']);
            $table->string('web');
            $table->string('agent_in_charge');
            $table->enum('service_line', ['ESTATE AGENCY', 'VALUATION', 'PROPERTY MGT', 'CONSULTANCY']);
            $table->date('date_of_instruction');
            $table->string('client_name');
            $table->string('client_contact_number');
            $table->email('email');
            $table->string('property_address');
            $table->string('google_cordinates');
            $table->enum('type_of_property', ['Residential', 'Commercial', 'Agriculture', 'Industrial', 'Bare Land']);
            $table->enum('type_of_building', ['HOUSE', 'APARTMENT', 'FLATS', 'OFFICES', 'RETAIL', 'SHOWROOM', 'WAREHOUSE', 'FACTORY']);
            $table->enum('type_of_building_2', ['STAND ALONE', 'COMPLEX', 'FLATS']);
            $table->enum('building_height', ['SINGLE STORY', 'DOUBLE STORY', 'GROUND FLOOR', 'UPPER FLOOR']);
            $table->integer('number_of_bedrooms');
            $table->enum('size_of_rooms', ['BIG', 'MEDIUM', 'SMALL']);
            $table->integer('number_of_bathrooms');
            $table->string('master_self_contained');
            $table->enum('furnished', ['FURNISHED', 'UNFURNISHED']);
            $table->enum('quality_of_finishes', ['ULTRA MODERN', 'MODERN', 'MODERATE', 'OLD']);
            $table->string('land_size');
            $table->enum('additional_buildings', ['GUEST HOUSE', 'WORKERS', 'QUARTERS', 'GARAGE']);
            $table->ENUM('swimming_pool', ['POOL', 'NO POOL']);
            $table->enum('layout_of_office_space', ['PARTIONED', 'OPEN SPACE']);
            $table->enum('parking', ['PLENTY', 'MODERATE', 'LITTLE', 'NO PARKING']);
            $table->enum('pets', ['PET FRIENDLY', 'NO PET']);
            $table->enum('electricity', ['BACKUP POWER', 'NO BACKUP POWER']);
            $table->enum('water', ['BOREHOLE', 'COUNCIL WATER', 'WELL', 'COMMUNAL WATER', 'NO WATER' ]);
            $table->enum('surroundings', ['GARDENS', 'PRIVATE BACKYARD', 'NO BACKYARD']);
            $table->enum('surroundings_facilities_1', ['NEARBY SOCIAL AMENITIES', 'NO NEARBY SOCIAL AMENITIES' ]);
            $table->enum('surroundings_facilities_2', ['SHOPPING MALL', 'SHOPPING CENTRE', 'STAND ALONE SHOP']);
            $table->enum('surroundings_facilities_3', ['SCHOOL', 'NO SCHOOL']);
            $table->enum('surroundings_facilities_4', ['OFFICE BUILDINGS', 'NO OFFICE BUILDINGS']);
            $table->enum('surroundings_facilities_5', ['BUS STATION', 'NO BUS STATION', 'TAXI RANK', 'NO TAXI RANK']);
            $table->string('rent_price_k');
            $table->string('rent_price_usd');
            $table->string('sale_price/market_value_k');
            $table->string('sale_price/market_value_usd');

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
