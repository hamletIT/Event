<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event_prod;
use App\Models\event_category;



class BackendeventController extends Controller
{
    public function Createevent(Request $request)
    {
          
        $valid=$this->validate($request, [
            'name'=> 'required',
            'discription'=> 'required',
            'date_start'=> 'required',
            'date_end'=> 'required',
            'file' => 'required',
        ]);
        // dd($valid);
        $input = $request->all();

        $path = '';
        if($request->hasFile('file')) {

           
                 $imagefile = $request['file'];
                $name = md5(microtime()) . $imagefile->getClientOriginalName();
                $path = $imagefile->move(public_path('/assets/img'), $name); 

        }
      

        $data = event_prod::create([
            'categories_id'=>$request->categories_id,
            'name'=>$request->name,
            'discription'=>$request->discription,
            'date_start'=>$request->date_start,
            'date_end'=>$request->date_end,
            'event_path' => $name

        ]);
       
      
        return redirect()->back();
    }
    public function CreateCategory(Request $request)
    {
        $valid=$this->validate($request, [
            'name'=> 'required',
        ]);
        $input = $request->all();
        $data = event_category::create([
            'name'=>$request->name,
            

        ]);
      
        return redirect()->back();
    }
    public function indexsec()
    {
        $categorys =event_category::all();
        // dd($categorys);
        return view('backend.dashboard',compact('categorys'));
    }
   
}
