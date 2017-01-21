<?php

namespace Xstore\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Xstore\Http\Controllers\Controller;

class ProductController extends Controller
{

    /**
     * Class Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->c_theme = new ThemeController();
        // dd($this->product);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('themes.'.$this->c_theme->getTheme()->name.'.pages.collection')
        ->with('theme',$this->c_theme->getTheme())
            ->with('products',app('product')->paginate())
            ->with('categories',app('category')->where('active',true)->get())
            ->with('trademarks',app('trademark')->where('active',true)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    public function show($key)
    {
        try {
            if ($key != null) {

                return view('themes.'.$this->c_theme->getTheme()->name.'.pages.detail')
                        ->with('product',app('product')->where('id',$key)->orWhere('url',$key)->firstOrFail())
                        ->with('categories',app('category')->where('active',true)->get())
                        ->with('trademarks',app('trademark')->where('active',true)->get());

            } else {
                return view('themes.'.$this->c_theme->getTheme()->name.'.pages.404');
            }
        } catch (\Exception $e) {
            dd($e);
            return view('themes.'.$this->c_theme->getTheme()->name.'.pages.404');
        }
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
}
