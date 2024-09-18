<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Leads extends Model
{
    use HasFactory;

    protected $table = 'leads';
    protected $primaryKey = 'leads_id';

    // public function language(): HasMany
    // {
    //     return $this->hasMany(CustomersContactList::class,'cus_id','cus_id');
    // }

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
    
    protected $fillable = [
        'leads_name', 
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
