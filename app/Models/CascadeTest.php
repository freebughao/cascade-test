<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CascadeTest extends Model
{

    protected $table = 'cascade_test';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'pid',
        'name',
    ];

    public function child ()
    {
        return $this->hasMany(CascadeTest::class, 'pid', 'id');
    }
}
