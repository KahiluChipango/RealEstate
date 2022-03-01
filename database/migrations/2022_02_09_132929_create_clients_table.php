<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id()->from(4000);
            $table->enum('branch', ['LSK', 'NDL', 'KT', 'HAR']);
     /*       $table->integer('job_no')->from(4000);*/
            $table->string('client_name');
            $table->string('contact_number');
            $table->string('contact_person');
            $table->string('client_email');
            $table->string('property_address');
            $table->integer('fee');
            $table->boolean('fee_status')->default(0);
            $table->enum('report_status', ['Work In Progress', 'Inspected/report Drafting', 'Delivered']);
            $table->enum('feedback_status', ['Customer Happy', 'Customer Unhappy']);
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
//            $table->foreignId('users_email')->constrained()->onDelete('cascade');
            $table->enum('type_of_property', ['residential', 'Commercial', 'Agriculture', 'Industrial', 'Bare Land']);
            $table->double('market_value', 8, 2);
            $table->longText('property_description');
            $table->date('report_due_date');
            $table->date('inspection_due');
            $table->integer('days_taken_to_complete');
            $table->date('fee_due_date');
            $table->date('date_of_delivery');
            $table->date('date_of_receipt_of_instruction');
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
        Schema::dropIfExists('clients');
    }
}
