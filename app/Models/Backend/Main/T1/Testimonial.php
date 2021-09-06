<?php

namespace App\Models\Backend\Main\T1;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Testimonial extends Model {

  use LogsActivity;

  protected $table = 'themes_1_testimonials';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
