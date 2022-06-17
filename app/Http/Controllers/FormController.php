<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function store(Request $request)
{
    $this->validate($request,[
        'title' => 'required',
        'desc' => 'required',
    ]);


        $form=new Form();
        $form->title=$request->title;
        $form->desc=$request->desc;
        $form->save();
        return redirect()->route('table')->with ('message','Added Successfully!');


    }
    public function index(){
    $form=Form::all();
    return view('table',compact('form'));
}

public function edit($id){
    $form=Form::find($id);
    return view('edit',compact('form'));

}
 public function update(Request $request,$id){
    $this->validate($request,[
        'title' => 'required',
        'desc' => 'required',
    ]);
     $form=Form::find($id);
     $form->title=$request->title;
    $form->desc=$request->desc;
    $form->update();
    return redirect()->route('table')->with ('message','Updated Successfully!');


 }
 public function delete($id){
     $form=form::find($id);
     $form->delete();
     return redirect()->route('table')->with ('message','Delete Successfully!');
 }


}



