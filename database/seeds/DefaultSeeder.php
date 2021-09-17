<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder {
  public function run() {

    // MAIN
    $this->call(T1::class);
    $this->call(T2::class);

    // Default
    $this->call(Roles::class);
    $this->call(Users::class);

    // T2 - DUMMY
    $this->call(T2Generals::class);
    $this->call(T2Abouts::class);
    $this->call(T2Features::class);
    $this->call(T2Teams::class);

  }
}
