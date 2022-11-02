<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::all();
        $data['products'] = Product::paginate(30);
        return view("user.home",$data);
    }

    public function login(Request $req)
    {
        if ($req->isMethod("post")) {
            $data = $req->only("email", "password");
            if (Auth::guard('web')->attempt($data)) {
                return redirect()->route("homepage");
            } else {
                return redirect()->back()->with("msg", "Invalid username and password");
            }
        }
        return view("user.login");
    }

    public function register(Request $req)
    {
        if ($req->isMethod("post")) {
            $data = $req->validate([
                'email' => 'required',
                'name' => 'required',
                'contact' => 'required',
                'password' => 'required',
            ]);
            $data['password'] = Hash::make($req->password);
            
            User::create($data);
            return redirect()->route("login")->with('msg1', 'User created successfully.');
        }
        return view("user.register");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }

    public function adminLogin(Request $req)
    {
        if ($req->isMethod("post")) {
            $data = $req->only("email", "password");
            if (Auth::guard('admin')->attempt($data)) {
                return redirect()->route("admin.dashboard");
            } else {
                return redirect()->back()->with("msg", "Try again");
            }
        }
        return view("admin.adminLogin");
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route("admin.login");
    }

    public function category($cat_id){
        $data['products'] = Product::where('category_id',$cat_id)->paginate(6);
        return redirect()->route('homepage',$data);
    }
}
