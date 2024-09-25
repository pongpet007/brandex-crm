<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Leads extends Model
{
    use HasFactory;

    protected $table = 'leads';
    protected $primaryKey = 'leads_id';
  

    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customers::class,'cus_id','cus_id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function step() : BelongsTo
    {
        return $this->belongsTo(LeadsStep::class,'step_id','step_id');
    }

    public function activityLogs(): HasMany
    {
        return $this->hasMany(ActivityLog::class,'leads_id','leads_id');
    }

    public function calendars(): HasMany
    {
        return $this->hasMany(Calendar::class,'leads_id','leads_id');
    }   

    public function memos(): HasMany
    {
        return $this->hasMany(Memo::class,'leads_id','leads_id');
    }
    
    protected $fillable = [
        'leads_name', 
        'leads_detail', 
        'code', 
        'y',             
        'm',             
        'd',             
        'runno',             
        'cus_id',
        'user_id',             
        'step_id',             
        'leads_start',                       
        'leads_expire',                       
        'cby',
        'uby',
    ];

}
