<?php

namespace App\Http\Controllers\Backend\Main\T1;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\Main\Theme\StoreRequest;
use App\Http\Requests\Backend\Main\Theme\UpdateRequest;

class AboutController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/sections/about';
    $this->path = 'pages.backend.main.theme-1.section';
    $this->model = 'App\Models\Backend\Main\T1\About';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return SECTION-ABOUT
  **************************************************
  **/

  public function index() {
    if ( Auth::User()->id_theme == 1 ) {
      $data = $this->model::first();
      $path = $this->path . '.about';
      return view($this->path . '.about.index', compact('data', 'path'));
    }
    else { return redirect('dashboard/sections'); }
  }

  public function store(Request $request) {
    if ( Auth::User()->id_theme == 1 ) {
      $store = $request->all();
      $this->model::create($store);
      return redirect($this->url)->with('success', trans('default.notification.success.item-created'));
    }
    else { return redirect('dashboard/sections'); }
  }

  public function update(Request $request) {
    if ( Auth::User()->id_theme == 1 ) {
      $data = $this->model::first();
      $update = $request->all();
      $data->update($update);
      return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
    }
    else { return redirect('dashboard/sections'); }
  }

}
