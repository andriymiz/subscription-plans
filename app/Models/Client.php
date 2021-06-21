<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'user_id',
    ];

    /**
    * Get all of the deployments for the project.
    */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
