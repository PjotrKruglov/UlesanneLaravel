<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{
   
	
	public function addActor(Request $request) { //lisada actori
        //return $request->all();
        $this->validate($request,[
            'lastname'=>'required | min:2',
            'firstname'=>'required'
        ]);
        $actor=new Actor;
        $actor->lastname=$request->lastname;
        $actor->firstname=$request->firstname;
        $actor->save();
		return back();
	}

   public function editActor(Actor $actor) { //muuta actori
		return view('pages.actoredit', compact('actor'));
	}

    public function updateActor(Request $request, Actor $actor) { //uuendada actori
        $actor->lastname=$request->lastname;
        $actor->firstname=$request->firstname;
        $actor->update();
		return redirect('actors');
	} 

     public function deleteActor(Actor $actor) { // kustutada actori
        $actor->delete();
		return redirect('actors');
	} 

}
