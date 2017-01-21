<?php

namespace Xstore\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Xstore\Http\Controllers\Controller;
use Xstore\Http\Controllers\Frontend\ThemeController as ThemeController;
class HomeController extends Controller
{
	/**
	 * Class Constructor
	 */
	public function __construct()
	{
        parent::__construct();
        $this->c_theme = new ThemeController();
        $this->product = new \Xstore\Repositories\ProductRepositories();
        $this->brand = new \Xstore\Repositories\BrandRepositories();
        $this->category = new \Xstore\Repositories\CategoryRepositories();
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('themes.'.$this->c_theme->getTheme()->name.'.pages.home')
        	->with('theme',$this->c_theme->getTheme())
            ->with('products',$this->product->paginate(9))
            ->with('categories',$this->category->where('active',true)->get())
            ->with('trademarks',$this->brand->where('active',true)->get());
    }

}
