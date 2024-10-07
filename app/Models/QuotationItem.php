<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class QuotationItem extends Model
{
    use HasFactory;

    protected $table = 'quotation_item';
    protected $primaryKey = 'quote_item_id';

    public function quote() : BelongsTo
    {
        return $this->belongsTo(Quotation::class,'quote_id','quote_id');
    }

    public function product() : BelongsTo
    {
        return $this->belongsTo(Products::class,'pro_id','pro_id');
    }

    protected $fillable = [
        'quote_id', 
        'pro_id', 
        'price',                        
        'cby',
        'uby',
    ];
}
