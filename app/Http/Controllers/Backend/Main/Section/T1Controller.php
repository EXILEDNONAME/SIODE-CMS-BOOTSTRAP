<?php

namespace App\Http\Controllers\Backend\Main\Section;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\Main\Theme\StoreRequest;
use App\Http\Requests\Backend\Main\Theme\UpdateRequest;

class T1Controller extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/sections/about';
    $this->path = 'pages.backend.main.section.theme-1';
    $this->model = 'App\Models\Backend\Main\Section\Theme_1\About';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return SECTION-ABOUT
  **************************************************
  **/

  public function about() {
    if ( Auth::User()->id_theme == 1 ) {
      $data = $this->model::first();
      $path = $this->path;
      return view($this->path . '.about', compact('data', 'path'));
    }
    else { return redirect('dashboard/sections'); }
  }

  public function about_update(Request $request) {
    if ( Auth::User()->id_theme == 1 ) {
      $data = $this->model::first();
      $update = $request->all();
      $data->update($update);
      return redirect($this->url)->with('success', trans('default.notification.success.updated'));
    }
    else { return redirect('dashboard/sections'); }
  }

}
