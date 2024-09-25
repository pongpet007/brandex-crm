<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $table = 'calendar';
    protected $primaryKey = 'calendar_id';
    public $timestamps = false;
    // public function language(): HasMany
    // {
    //     return $this->hasMany(CustomersContactList::class,'cus_id','cus_id');
    // }

    // public function step(): BelongsTo
    // {
    //     return $this->belongsTo(LeadsStep::class, 'step_id', 'step_id');
    // }

    protected $fillable = [
        'calendar_date',
        'calendar_detail',
        'leads_id',       
        'cby',       
    ];


}
