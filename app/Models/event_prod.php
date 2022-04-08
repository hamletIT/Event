<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_prod extends Model
{
    use HasFactory;

    public $table = 'event_prods';
    
    protected $fillable = [
        'name',
        'discription',
        'event_path',
        'date_start',
        'date_end',
    ];
    public function event_category()
    {
        return $this->hasMany(event_category::class ,'categories_id');
    }
}
