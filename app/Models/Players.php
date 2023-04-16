<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    public function scores() {
        return $this->hasMany(Score::class, 'player_id','id');
    }

    protected $table = 'players';

    protected $primary_key = 'id';

    protected $fillable = [
        'name'
    ];
}
