<?php

namespace Xstore\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Xstore\Http\Controllers\Controller;
use View;
class ThemeController extends Controller
{

    /**
     * Class Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->theme = app('theme')->where('active',true)->firstOrFail();
        View::share('theme', $this->theme);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Gets the value of theme.
     *
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets the value of theme.
     *
     * @param mixed $theme the theme
     *
     * @return self
     */
    private function _setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }
}
