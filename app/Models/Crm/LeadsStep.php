<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeadsStep extends Model
{
    use HasFactory;

    protected $table = 'leads_step';
    protected $primaryKey = 'step_id';

    public function leads(): HasMany
    {
        return $this->hasMany(Leads::class,'step_id','step_id');
    }
 
    protected $fillable = [
        'step_name', 
    ];

}
