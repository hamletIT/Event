<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_category extends Model
{
    use HasFactory;

    public $table = 'event_categoryes';
    
    protected $fillable = [
        'name',
       
    ];
    public function event_prod()
    {
        return $this->belongsTo(event_prod::class);
    }

}
