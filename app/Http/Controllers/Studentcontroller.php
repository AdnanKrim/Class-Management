<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class Studentcontroller extends Controller
{
    function addstd(){
        return view('addstudent');
    }

    function create(Request $req){
        $req->validate( [
            'name'=> 'required',
            'rollnumber'=>'required',
            'mobilenumber'=>'required',
            'email' => 'required'
        ]);

        $user = new Student;
        $user->name = $req->name;
        $user->rollnumber = $req->rollnumber;
        $user->mobilenumber = $req->mobilenumber;
        $user->email = $req->email;
        $result = $user->save();
        if($result){
            return back()->with('success','you added a student succesfully');
        }
        else{
            return back()->with('Fail','somthing went wrong');
        }

    }
    function stdlst(){
        $data = Student::all();
        return view('studentlist',['stdnts'=> $data]);
    }
    // function payment(){

    //     return view('Payment');
    // }


    function pay(Request $req){

        $req->validate([
             'email'=> 'required',
             'rollnumber'=> 'required',
             

        ]);


        $paymentEx = Payment::where(['rollnumber' =>$req->rollnumber, 'month'=>$req->month])->first();
        if(empty($paymentEx)){

            $user = new Payment;
            $user->email = $req->email;
            $user->rollnumber = $req->rollnumber;
            $user->month = $req->month;
            $user->amount = $req->amount;
            $result= $user->save();

            if($result){
                return back()->with('success','payment cleared');
            }
            else{
                return back()->with('Fail','something went wrong');
            }

        } else{
            return back()->with('Fail','old');
        }


        
        


    }
    function got(){
        $user = DB::table('students')
        ->join('payments','students.rollnumber','=','payments.rollnumber')
        ->get();
        return view('Payment',['joins'=> $user]);
    }
    function search(Request $req){
        $data = Student::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['searchs'=>$data]);
    }


    function detail($rollnumber){
        $user = Student::where('rollnumber', $rollnumber)->first();
        
       
         return view('detail', ['stdnt'=> $user]);
    }
}
