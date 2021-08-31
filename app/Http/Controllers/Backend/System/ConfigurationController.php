<?php

namespace App\Http\Controllers\Backend\System;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\User;

class ConfigurationController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware(['auth']);
    $this->url = '/dashboard/configuration';
    $this->path = 'pages.backend.system.configuration';
    $this->modelGeneral = 'App\Models\Backend\System\ConfigurationGeneral';
    $this->modelSectionFeature = 'App\Models\Backend\System\ConfigurationSectionFeature';
  }

  /**
  **************************************************
  * @return CONFIGURATION-GENERAL
  **************************************************
  **/

  public function general() {
    $data = $this->modelGeneral::first();
    $path = $this->path;
    return view($this->path . '.general', compact('data', 'path'));
  }

  public function general_update(Request $request) {
    $data = $this->modelGeneral::first();
    $update = $request->all();
    $data->update($update);
    return redirect($this->url . '/generals')->with('success', trans('default.notification.success.profile-updated'));
  }

  /**
  **************************************************
  * @return CONFIGURATION-SECTION-FEATURES
  **************************************************
  **/

  public function feature() {
    $data = $this->modelSectionFeature::first();
    $path = $this->path;
    return view($this->path . '.section-feature', compact('data', 'path'));
  }

  public function feature_update(Request $request) {
    $data = $this->modelSectionFeature::first();
    $update = $request->all();
    $data->update($update);
    return redirect($this->url . '/section/features')->with('success', trans('default.notification.success.profile-updated'));
  }

}
