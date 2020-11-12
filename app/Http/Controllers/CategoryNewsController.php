<?php

namespace App\Http\Controllers;

use App\CategoryNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CategoryNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $obj = CategoryNews::all();
            return view('admin.category_news.list')
                ->with('obj', $obj);
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('admin.category_news.create_form');
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $obj = new CategoryNews();
            $obj->name = Input::get('name');
            $obj->save();
            echo "<script>alert('Saved Successfull'); window.location.href = '/admin/categoryNews'</script>";
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }


    public function quickEdit($id)
    {
        if (Auth::check()) {
            $obj = CategoryNews::find($id);
            if ($obj == null) {
                return view('404');
            }
            return response()->json(['obj' => $obj], 200);
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }


    public function quickUpdate(Request $request)
    {
        if (Auth::check()) {
            $id = $request->input('quick-update-id');
            $obj = CategoryNews::find($id);
            if ($obj == null) {
                return view('404');
            }
            $obj->name = Input::get('name');
            $obj->save();
            return redirect()->back()->with('message', 'Saved Success');
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }


    public function destroy($id)
    {
        if (Auth::check()) {
            $obj = CategoryNews::find($id);
            if ($obj == null) {
                return view('404');
            }
            $obj->delete();
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }
}
