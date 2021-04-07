<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Occasion;
use RealRashid\SweetAlert\Facades\Alert;
class OccasionsController extends Controller
{
    public function addOccasion (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $occasion = new Occasion; 
            $occasion->name = $data['occasion_name'];
            $occasion->description = $data['occasion_description'];
            $occasion->slug = str_slug($data['occasion_name']);
            $occasion->save();
            return redirect('/admin/view-occasions')->with('flash_message_success','Category Added Successfully!!');
        }
        return view('admin.occasion.add_occasion');
    }
    public function viewOccasions(){
        $occasions = Occasion::get();
        return view('admin.occasion.view_occasion')->with(compact('occasions'));
    }
    public function editOccasion(Request $request,$slug=null){
        if($request->isMethod('post')){
            $data = $request->all();
            Occasion::where(['slug'=>$slug])->update(['name'=>$data['occasion_name'],'description'=>$data['occasion_description']
            ,'slug'=>str_slug($data['occasion_name'])]);
            return redirect('/admin/view-occasions')->with('flash_message_success','Category Updated Successfully!!!');
        }
        $occasionDetails = Occasion::where(['slug'=>$slug])->first();
        return view('admin.occasion.edit_occasion')->with(compact('occasionDetails'));
    }
    public function deleteOccasion($id=null){
        Occasion::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        dd($data);
        Occasion::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
}
