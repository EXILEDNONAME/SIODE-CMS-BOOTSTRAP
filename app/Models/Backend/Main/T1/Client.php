<?php

namespace App\Models\Backend\Main\T1;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Client extends Model {

  use LogsActivity;

  protected $table = 'themes_1_clients';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
