<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;

class GlobalController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->url = '/dashboard/configuration';
    $this->path = 'pages.frontend';
    $this->modelGeneral = 'App\Models\Backend\System\ConfigurationGeneral';
    $this->modelSectionAbout = 'App\Models\Backend\Main\T1\About';
    $this->modelSectionClient = 'App\Models\Backend\Main\T1\Client';
    $this->modelSectionCount = 'App\Models\Backend\Main\T1\Count';
    $this->modelSectionPricing = 'App\Models\Backend\Main\T1\Pricing';
    $this->modelSectionService = 'App\Models\Backend\Main\T1\Service';
    $this->modelSectionTeam = 'App\Models\Backend\Main\T1\Team';
    $this->modelSectionTestimonial = 'App\Models\Backend\Main\T1\Testimonial';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $general = $this->modelGeneral::first();
    $about = $this->modelSectionAbout::first();
    $client = $this->modelSectionClient::get();
    $count = $this->modelSectionCount::first();
    $pricing = $this->modelSectionPricing::get();
    $service = $this->modelSectionService::get();
    $team = $this->modelSectionTeam::get();
    $testimonial = $this->modelSectionTestimonial::get();
    return view($this->path . '.index', compact('general', 'about', 'client', 'count', 'pricing', 'service', 'team', 'testimonial'))->render();
  }

}
