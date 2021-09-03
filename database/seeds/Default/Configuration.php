<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Theme;
use App\Models\Backend\Main\Section;

class Configuration extends Seeder {

  public function run() {

    $theme = [
      [
        'name'          => 'Bizland',
        'created_at'    => Carbon::now(),
      ],
    ];

    Theme::insert($theme);

    $section = [
      [
        'id_theme'      => '1',
        'name'          => 'About',
        'url'          => 'about',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_theme'      => '1',
        'name'          => 'Count',
        'url'          => 'count',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_theme'      => '1',
        'name'          => 'Team',
        'url'          => 'team',
        'created_at'    => Carbon::now(),
      ],
    ];

    Section::insert($section);

  }
}
