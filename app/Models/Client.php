<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch',
        'job_no',
        'client_name',
        'contact_number',
        'contact_person',
        'client_email',
        'property_address',
        'fee',
        'fee_status',
        'report_status',
        'feedback_status',
        'users_id',
        'type_of_property',
        'market_value',
        'property_description',
        'report_due_date',
        'inspection_due',
        'days_taken_to_complete',
        'fee_due_date',
        'date_of_delivery',
        'date_of_receipt_of_instruction',
    ];

    public function users() {
        return $this->belongsTo('App\Models\User');
    }



}
