<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Application extends Model
{
    use HasFactory;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *	
     * @var array

     */
    protected $fillable = [
        'names', 'nid', 'email', 'phone', 'gender', 'Province', 'District', 'Sector', 'event_name', 'place', 'approved', 'rejected',
    ];
}
