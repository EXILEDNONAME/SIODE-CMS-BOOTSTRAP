<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\System\ConfigurationSectionFeature;

class ConfigurationSectionFeatures extends Seeder {
  public function run() {
    $data = [
      [
        'content_1_title'           => 'Content 1',
        'content_2_title'           => 'Content 2',
        'content_3_title'           => 'Content 3',
        'content_4_title'           => 'Content 4',
        'content_1_description'     => 'Description 1',
        'content_2_description'     => 'Description 2',
        'content_3_description'     => 'Description 3',
        'content_4_description'     => 'Description 4',
        'created_at'                => Carbon::now(),
      ],
    ];

    ConfigurationSectionFeature::insert($data);
  }
}
