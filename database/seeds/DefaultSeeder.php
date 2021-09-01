<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder {
  public function run() {

    // Default
    $this->call(Roles::class);
    $this->call(Users::class);

    $this->call(ConfigurationGenerals::class);
    $this->call(ConfigurationSectionFeatures::class);
    $this->call(ConfigurationSectionTeams::class);

  }
}
