<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $primaryKey = 'setting_id';

    // public function language(): HasMany
    // {
    //     return $this->hasMany(CustomersContactList::class,'cus_id','cus_id');
    // }

    // public function step(): BelongsTo
    // {
    //     return $this->belongsTo(LeadsStep::class, 'step_id', 'step_id');
    // }

    protected $fillable = [
        'taxid',
        'companyname',
        'com_tel',
        'com_mobile',
        'address',
        'leadsowner',        
        'timereturn',        
        'cby',
        'uby',
    ];

}
