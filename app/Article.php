<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
  protected $fillable = ['title', 'body', 'published_at'];
  protected $dates = ['published_at'];
}