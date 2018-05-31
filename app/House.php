<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'description', 'singular', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function profiles() {
      return $this->hasMany('Profile');
    }

    public static function sortHouse() {
        // fetch house id with least members;
        $house = app('db')->select('select studentnr, count(*) as amount, house_id FROM profiles WHERE house_id IS NOT NULL GROUP BY house_id ORDER BY amount limit 1');
        return $house[0]->house_id;
    }
}