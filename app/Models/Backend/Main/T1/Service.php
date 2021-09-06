<?php

namespace App\Models\Backend\Main\T1;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Service extends Model {

  use LogsActivity;

  protected $table = 'themes_1_services';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
