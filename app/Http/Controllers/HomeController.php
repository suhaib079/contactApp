<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $employees=Employee::all(); 
         
        return view('home',[
            'employees' =>$employees
        ]);
    }

    public function update($id)
    {
        
        $employees=Employee::find($id); 
         
        return view('contacts/update',['employees'=>$employees]);
    }

    function showupdate(Request  $req ){
        // return $req ->input();
        $employees=Employee::find($req->id);
        $employees->full_name=$req->full_name;
        $employees->company=$req->company;
        $employees->phone_number=$req->phone_number;
        $employees->addres=$req->addres;
        $employees->salary=$req->salary;
        $employees->job_title=$req->job_title;
        $employees->join_date=$req->join_date;
        $employees->save();
        return redirect('home');
    }
}
