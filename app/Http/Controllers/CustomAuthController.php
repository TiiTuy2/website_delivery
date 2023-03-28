<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Company;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use App\Models\About;
class CustomAuthController extends Controller
{
    public function home()
    {
        return view('homepage');
    }

    public function index()
    {
        return view('login');
    }
    public function delivery()
    {
        $services = Service::with('services')->latest()->get();
        $companys = Company::with('companies')->latest()->get();
        $slides = Slide::with('slides')->latest()->get();
        $products = Product::with('products')->latest()->get();
        $blogs = Blog::with('blogs')->latest()->get();
        $gallerys = Gallery::with('blogs')->latest()->get();
        $abouts = About::with('abouts')->latest()->get();
        return view('dashboard',compact('companys','services','slides','products','blogs','gallerys','abouts'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('message', 'Signed in!');
        }

        return redirect('dashboard')->with('message', 'Login details are not valid!');
    }

    public function signup()
    {
        return view('registration');
    }

    public function signupsave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard");
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('/login');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
