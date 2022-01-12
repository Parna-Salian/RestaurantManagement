<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;


class AdminController extends Controller
{
    public function users()
    {
        $usertype = User::all();
        return view("admin.user", ['usertype' =>$usertype]);
    }
    public function deleteuser($userid)
    {
        $data = User::find($userid);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $usertype = User::all();
        return view("admin.foodmenu");
    }
    public function uploadfood(Request $request)
    {
        $data = new Food();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();

    }   
}
