<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;

     /**

     * The attributes that are mass assignable.

     *	

     * @var array

     */

     protected $fillable = [

        'title', 'description','category','publication_date','source_organization'

    ];
}
