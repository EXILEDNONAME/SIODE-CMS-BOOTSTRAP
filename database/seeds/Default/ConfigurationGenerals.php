<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\System\ConfigurationGeneral;

class ConfigurationGenerals extends Seeder {
  public function run() {
    $data = [
      [
        'name'          => 'EXILEDNONAME',
        'slogan'        => 'We are team of talented designers making websites',
        'email'         => 'naufalhaidirridha@rocketmail.com',
        'phone'         => '08112448111',
        'created_at'    => Carbon::now(),
      ],
    ];

    ConfigurationGeneral::insert($data);
  }
}
