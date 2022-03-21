<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Client extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'branch',
        'job_no',
        'client_name',
        'client_number',
        'client_email',
        'contact_person',
        'contact_person_number',
        'property_address',
        'fee',
        'fee_status',
        'report_status',
        'feedback_status',
        'users_id',
        'type_of_property',
        'market_value',
        'purpose',
        'property_description',
        'report_due_date',
        'inspection_due',
        'days_taken_to_complete',
        'valuation_time',
        'fee_due_date',
        'date_of_delivery',
        'date_of_receipt_of_instruction',
    ];

    public function users() {
        return $this->belongsTo('App\Models\User');
    }

    public function routeNotificationForNexmo($notification)
    {
        return $this->client_number;
    }


}
