<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'activity_log';
    protected $primaryKey = 'log_id';
    
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
        'log_timestamp',
        'log_message',
        'leads_id',       
        'cby',       
    ];


}
