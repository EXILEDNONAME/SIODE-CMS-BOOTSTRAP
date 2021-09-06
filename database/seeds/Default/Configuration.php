<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Theme;
use App\Models\Backend\Main\Section;
use App\Models\Backend\Main\T1\Count;

class Configuration extends Seeder {

  public function run() {

    $theme = [
      [
        'name'          => 'Other',
        'created_at'    => Carbon::now(),
      ],
      [
        'name'          => 'Bizland',
        'created_at'    => Carbon::now(),
      ],
    ];

    Theme::insert($theme);

    $section = [
      [ 'id_theme' => '2', 'name' => 'About', 'url' => 'about', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2','name' => 'Count', 'url' => 'count', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Team', 'url' => 'team', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Client', 'url' => 'client', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Testimonial', 'url' => 'testimonial', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Service', 'url' => 'service', 'created_at' => Carbon::now(), ],
    ];

    Section::insert($section);

    $count = [
      [
        'context_1'          => '100',
        'context_2'          => '200',
        'context_3'          => '300',
        'context_4'          => '400',
        'created_at'    => Carbon::now(),
      ],
    ];

    Count::insert($count);

  }
}
