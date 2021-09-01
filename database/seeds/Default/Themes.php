<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Theme;

class Themes extends Seeder {
  public function run() {
    $data = [
      [
        'name'          => 'Bizland',
        'created_at'    => Carbon::now(),
      ],
    ];

    Theme::insert($data);
  }
}
