<?php

namespace Xstore\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Xstore\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Class Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->c_theme = new ThemeController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function show($key = null)
    {
         try {
            if($key != null){
                $groupProduct = app('category')->where('active',true)->where('url',$key)->orWhere('id',$key)->get();

                $categories = app('category')->where('active',true)->get();
                $trademarks = app('trademark')->where('active',true)->get();

                if(sizeof($groupProduct) <= 0){
                    return view('themes.'.$this->c_theme->getTheme()->name.'.pages.404');
                }
                return view('themes.'.$this->c_theme->getTheme()->name.'.pages.collection-group')
                    ->with('theme',$this->c_theme->getTheme())
                        ->with('groupProduct',$groupProduct)
                        ->with('categories',$categories)
                        ->with('trademarks',$trademarks);
            }else {
                return view('themes.'.$this->c_theme->getTheme()->name.'.pages.404');
            }
        } catch (\Exception $e) {
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
