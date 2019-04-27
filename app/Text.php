<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title', 'description', 'user_id', 'publication_date'
  ];

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
