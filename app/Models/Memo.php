<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    protected $table = 'memo';
    protected $primaryKey = 'memo';
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
        'memo_message',
        'filename',
        'originalfilename',
        'leads_id',        
        'memo_timestamp',       
        'cby',       
    ];


}
