<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    protected $task;
    public function __construct()
    {
        $this->task = new Company();
    }
    public function index(){
        $res['tasks']=$this->task->all();
        // dd($res);

        return view('companies.index')->with($res);
    }
    public function cpage()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $this->task->create($request->all());
        // return redirect()->back();
        return redirect()->route('index');
        

    }
    public function delete($id)
    {
        $task=$this->task->find($id);
        $task->delete();
        return redirect()->back();
    }
    public function update($id)
    {
        $task=$this->task->find($id);
        return view('companies.edit',['task'=>$task]);
    }

    public function edit(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'age' => 'required',
        // ]);
        $task = Company::find($id);
  
        $task->update($request->all());
        return redirect()->route('index')->with('success','Post updated successfully');
    }
 

 
}
