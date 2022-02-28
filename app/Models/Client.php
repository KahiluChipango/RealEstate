<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_no',
        'client_name',
        'property_address',
        'contact_person',
        'contact_number',
        'client_email',
        'date_of_receipt_of_instruction',
        'inspection_due',
        'days_taken_to_complete',
        'report_due_date',
        'users_id',
        'fee',
        'fee_due_date',
        'date_of_delivery',
        'type_of_property',
        'status_for_accounts',
        'market_value',
        'property_description',

         ];

    public function users() {
        return $this->belongsTo('App\Model\User');
    }



}
