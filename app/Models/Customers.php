<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'cus_id';

    // public function contactList(): HasMany
    // {
    //     return $this->hasMany(CustomersContactList::class,'cus_id','cus_id');
    // }

    // public function contactList() : BelongsTo
    // {
    //     return $this->belongsTo(CustomersContactList::class,'cus_id','cus_id');
    // }
    
    protected $fillable = [
        'taxid',
        'cus_name',
        'cus_name_register_th',              
        'cus_name_register_en',              
        'cus_address_th',              
        'cus_address_en',              
        'cus_telephone',              
        'cus_website',              
        'cus_fax',              
        'contact_name', 
        'contact_nickname', 
        'contact_birthday',             
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
