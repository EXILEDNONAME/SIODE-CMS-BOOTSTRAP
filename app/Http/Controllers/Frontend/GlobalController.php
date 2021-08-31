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
    $this->modelSectionFeature = 'App\Models\Backend\System\ConfigurationSectionFeature';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $general = $this->modelGeneral::first();
    $section_feature = $this->modelSectionFeature::first();
    return view($this->path . '.index', compact('general', 'section_feature'));
  }

}
