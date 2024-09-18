<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomersContactList extends Model
{
    use HasFactory;

    protected $table = 'customer_contact_list';
    protected $primaryKey = 'contact_id';

    // public function language(): HasMany
    // {
    //     return $this->hasMany(CustomersContactList::class,'cus_id','cus_id');
    // }

    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customers::class,'cus_id','cus_id');
    }
    
    protected $fillable = [
        'cus_id',
        'contact_name', 
        'contact_nickname', 
        'contact_birthday',             
        'contact_position',             
        'contact_email',             
        'contact_mobile',             
        'contact_telephone',             
        'contact_line',             
        'contact_ig',             
        'contact_facebook',                       
        'cby',
        'uby',
    ];

}
