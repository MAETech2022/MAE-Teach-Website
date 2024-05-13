<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membership extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'document_required',
        'membership_fee',
        'payment_procedure',
        'register_online_link',
        'website_link',
        'query_email',
        'whatsapp_no',
    ];
}
