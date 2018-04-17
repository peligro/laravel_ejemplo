<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as User;
class Mensaje extends Model
{
    //protected $table = 'mensajes';
    protected $guarded =[];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
