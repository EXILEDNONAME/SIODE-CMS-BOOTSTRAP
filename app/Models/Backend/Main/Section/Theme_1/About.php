<?php

namespace App\Models\Backend\Main\Section\Theme_1;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Theme;

class About extends Model {

  use LogsActivity;

  protected $table = 'themes_1_abouts';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function themes(){
    return $this->belongsTo(Theme::class, 'id_theme');
  }

}
