<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quotation extends Model
{
    use HasFactory;

    protected $table = 'quotation';
    protected $primaryKey = 'quote_id';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function quote_type_table(): BelongsTo
    {
        return $this->belongsTo(QuoteType::class, 'quote_type', 'quote_type_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(QuotationItem::class, 'quote_id', 'quote_id');
    }

    protected $fillable = [
        'is_active',
        'com_name',
        'com_address',
        'com_tel',
        'com_mobile',
        'logo',
        'taxid',
        'cus_id',
        'leads_id',
        'cus_name',
        'cus_company',
        'cus_address',
        'cus_tel',
        'cus_mobile',
        'code',
        'y',
        'm',
        'd',
        'runno',
        'user_id',
        'quote_type',
        'discount',
        'quotation_status',
        'cby',
        'uby',
    ];
}
