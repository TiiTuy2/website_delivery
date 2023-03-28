<?php
namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Company;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\About;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::with('services')->get();
        $companys = Company::with('companies')->get();
        $slides=Slide::with('slides')->get();
        $products=Product::with('products')->get();
        $blogs=Blog::with('blogs')->get();
        $gallerys=Gallery::with('gallerys')->get();
        $abouts=About::with('abouts')->get();
        return view('frontend.index',compact('companys','services','slides','products','blogs','gallerys','abouts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function road_freight() {
        $companys = Company::with('companies')->get();
        $slides=Slide::with('slides')->get();
        $gallerys=Gallery::with('gallerys')->get();
        return view('frontend.road_freight',compact('slides','companys','gallerys'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
