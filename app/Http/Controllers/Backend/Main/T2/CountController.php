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

class CountController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/sections/count';
    $this->path = 'pages.backend.main.theme-1.section';
    $this->model = 'App\Models\Backend\Main\T1\Count';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return SECTION-COUNT
  **************************************************
  **/

  public function index() {
    if ( Auth::User()->id_theme == 1 ) {
      $data = $this->model::first();
      $path = $this->path . '.count';
      return view($this->path . '.count.index', compact('data', 'path'));
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
