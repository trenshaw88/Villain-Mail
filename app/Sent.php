<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sent extends Model
{

	  public function messages() {
    return $this->hasMany('App\Message')->orderBy('recipient_id', 'desc');
  }

      public static function sent_messages() {

      // $condition = \App\Condition::find(2);
      $sent_messages = DB::table('messages')
                      ->orderBy('created_at', 'desc')
                      ->get();

      return $sent_messages;

    }
	  public function recipient() {
    return $this->belongsTo('App\Message', 'recipient_id');
  }
}
  