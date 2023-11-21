<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static $blog;
    public function index()
    {
        return view('front-end.home.home');
    }
    public  function about()
    {
        return view('front-end.about.about');
    }
    public function service()
    {
        return view('front-end.service.service');
    }
    public function department()
    {
        return view('front-end.department.department');
    }
    public function departmentSingle()
    {
        return view('front-end.department.department-single');
    }
    public function appoinment()
    {
        return view('front-end.department.appoinment');
    }
    public function confirmation()
    {
        return view('front-end.department.confirmation');
    }
    public function doctor()
    {
        return view('front-end.doctor.doctor');
    }
    public function doctorSingle()
    {
        return view('front-end.doctor.doctor-single');
    }
    public function blogSidebar()
    {
        return view('front-end.blog.blog-sidebar',[
            'blogs'=>Blog::where('status',1)->get()
        ]);
    }
    public function blogDetails($slug)
    {
        self::$blog = Blog::where('slug',$slug)->first();
        return view('front-end.blog.blog-details',[
            'blog'=>self::$blog
        ]);
    }
    public function contact()
    {
        return view('front-end.contact.contact');
    }
}
