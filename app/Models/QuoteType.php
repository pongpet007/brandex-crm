<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteType extends Model
{
    use HasFactory;

    protected $table = 'quote_type';
    protected $primaryKey = 'quote_type_id';

    public $timestamps = false;

    protected $fillable = [
        'type_name',       
    ];
}
