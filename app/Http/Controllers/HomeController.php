<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->modelClassName = NULL;
        $this->model = NULL;
        $this->limit = NULL;

        $this->folderNameForView = 'home';
        $this->rootRouteName = 'home';
        $this->messageAfterInsertSuccessly = NULL;
        $this->messageAfterInsertFail = NULL;
        $this->messageAfterUpdateFail = NULL;
        $this->messageAfterUpdateSuccessly = NULL;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
