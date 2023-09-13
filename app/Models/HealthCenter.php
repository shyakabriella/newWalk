<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenter extends Model
{
    use HasFactory;

      /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

     protected $fillable = [

        'health_center_name',
        'province',
        'district',
        'sector',
        'category',
        'Leader',
    ];

}
