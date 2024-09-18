<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $primaryKey = 'pro_id';

    // public function language(): HasMany
    // {
    //     return $this->hasMany(CustomersContactList::class,'cus_id','cus_id');
    // }

    // public function step(): BelongsTo
    // {
    //     return $this->belongsTo(LeadsStep::class, 'step_id', 'step_id');
    // }

    protected $fillable = [
        'pro_name',
        'pro_detail',
        'pro_price',
        'is_active',        
        'cby',
        'uby',
    ];
}
