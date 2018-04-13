<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{	
	
    public function index(){
    		$todo = Todo::all();
        	return view('todos')->with('todos',$todo);
    }

    public function store (Request $request){
        $Todo = new Todo ;
        $Todo->todos = $request->addEntry;
        $Todo->save() ;
        return redirect()->back() ;
    }

    public function delete($id) {
        $Todo = Todo::find($id) ;
        $Todo->delete();
        return redirect()->back();
    }

    public function update($id) {
        $Todo = Todo::find($id) ;

        return view('update')->with('todos',$Todo);
    }
    public function save (Request $request , $id){
        $Todo = Todo::find($id) ;
        $Todo->todos = $request->updateEntry;
        $Todo->save() ;
        return $this->index() ;
    }


}
