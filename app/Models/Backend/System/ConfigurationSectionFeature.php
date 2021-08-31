<?php

namespace App\Models\Backend\System;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ConfigurationSectionFeature extends Model {

  use LogsActivity;

  protected $table = 'configuration_section_features';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
