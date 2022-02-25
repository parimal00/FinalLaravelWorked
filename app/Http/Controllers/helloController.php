<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\student;
use App\scholarship;
use App\bus_account;
use App\student_info;
use App\students_with_due_balance;
use Illuminate\Http\Request;

  class Hellocontroller extends Controller{


    function accountant_login(Request $request){
      $username= $request->username;
      $password =$request->password;

    $row=  DB::table('accountant_registration')
      ->where('username',$username)
      ->where('password',$password)
      ->get();

      //return $row->name;

  


     if(count($row)==1){
      foreach($row as $rows){
        $session_name= $rows->username;
      }
        $request->session()->put('accountant',$session_name);
       
        return view('plain_page');
     }
     else{
       echo "login failed";
     }

    }


    public function stu_scho_get_info(){
      //return session('accountant');

      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }

    //  $scholarship = new scholarship;
    //  $data= $scholarship::all();
    //  return view('view_scholarship_students')->with(['data'=>$data]);
    $data = DB::table('scholarships')
    ->join('student_account','student_account.roll_no','scholarships.roll_no')
    ->join('student_registration','student_registration.roll_no','scholarships.roll_no')
    ->get();

    return view('view_scholarship_students')->with(['data'=>$data]);


    }

    public function  stu_due_get_info(){
    
      // $student_with_due_balance = new students_with_due_balance;
      // $data= $student_with_due_balance::all();
      // return view('due_balance_students')->with(['data'=>$data]);

    $data= DB::table('students_with_due_balance')
    ->join('student_registration','student_registration.roll_no','students_with_due_balance.roll_no')
      ->get();

      return view('due_balance_students')->with(['data'=>$data]);
    }  

    public function update_all_info(){
      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }
      $scholarship = new scholarship;
      $scholarship::truncate();

      $bus_account = new bus_account;
      $bus_account::truncate();

     
     $student_info= DB::table('student_registration')
      ->get();
      
      foreach($student_info as $student){
        DB::table('student_registration')
        ->where('roll_no',$student->roll_no)
        ->update([
          'semester'=>$student->semester+1
        ]);

        if($student->semester >=8){
          DB::table('student_registration')
          ->where('roll_no',$student->roll_no)
          ->update([
            "passed_out"=>1
          ]);
        }
          
       }

        
     
    }
 
    




      
      
    
    public function update(Request $request){

      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }
      $student_info = new student_info;
      echo $request->semester;
      echo $request->roll_no;
      $student_info::where('roll_no',$request->roll_no)
      ->update(['semester_fee'=>$request->semester_fee,'balance_due'=>$request->balance_due,'scholarship'=>($request->scholarship/100)*103000,'bus_fee'=>$request->bus_fee,'total_fee'=>103000-($request->scholarship/100)*103000]);
      
      DB::table('scholarships')
      ->where('roll_no',$request->roll_no)
      ->update(['scholarship_percentage'=>$request->scholarship]);

      DB::table('students_with_due_balance')
      ->where('roll_no',$request->roll_no)
      ->update(['due_amount'=>$request->$request->balance_due]);
      }

    public function edit_student_info(Request $request){
      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }
      $student_info = new student_info;
      $data = DB::table('student_account')
      ->join('student_registration','student_registration.roll_no','student_account.roll_no')
      ->get();
      //$data = $student_info::where('roll_no',$request->roll_no)->get();
      return view('edit_student_info')->with(['data'=>$data]);

      //echo $request->roll_no;

    }

    public function search_student(Request $request){
      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }
      $student_info = new student_info;
      echo $request->roll_no;

      $data = $student_info::where('roll_no',$request->roll_no)->get();
     
      return view('search_students')->with(['data'=>$data]);
    }


    public function submit_amount(Request $request){
      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }
     $student_info = new student_info;
     $students_with_due_balance = new students_with_due_balance;
     $due_balance="";
     echo $request->total_fee-$request->obtained_amount;
     echo $request->roll_no;

      if($request->obtained_amount-$request->total_fee==0){
      $student_info::where('roll_no',$request->roll_no)
      ->update(['paid'=>'paid']);
      echo "jack is sexy";

      $students_with_due_balance::where('roll_no',$request->roll_no)
      ->delete();
    
     }
      
      else if($request->obtained_amount-$request->total_fee<0){
        $student_with_due_balance= new students_with_due_balance;
        $student_with_due_balance->roll_no = $request->roll_no;
        $student_with_due_balance->name=$request->name;
        $student_with_due_balance->semester=$request->semester;
        $student_with_due_balance->due_amount=$request->total_fee-$request->obtained_amount;
        $student_with_due_balance->date="jack iss seyx";
        $student_with_due_balance->save();
        $student_info::where('roll_no',$request->roll_no)
        ->update(['paid'=>'partial paid']);
      }
    }

    public function getInfo_amount(Request $request){


      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }
      $roll_no = $request->bname;
      
     

      if($roll_no!=null){
       $Student = new student_info;
       $data = DB::table('student_account')
              ->join('student_registration','student_registration.roll_no','student_account.roll_no')
              ->get();
       //$data = $Student::where('roll_no',$roll_no)->get();
       return view('get_amount')->with(['datas'=>$data]);
      }
      else
      return view('get_amount');
    }



    public function getInfo(){
      if(!session()->has('accountant')){

    
        return view('accountantlogin');
        }

      $datas = DB::table('student_account')
              ->join('student_registration','student_registration.roll_no','student_account.roll_no')
              ->get();
      //$datas = DB::table('student_account')->get();
      // $student_info = new student_info;
      // $datas = $student_info::all();
    return view('student_info')->with(['data'=>$datas]);
    }

    public function busfee_add(Request $request){
      $validate = $request->validate(['roll_no'=>'required','firstname'=>'required','lastname'=>'required','semester'=>'required','bus_fee'=>'required']);
      
      $total_fee =0;
      $bus_account = new bus_account;
      $bus_account->roll_no = $request->roll_no;
      $bus_account->firstname =  $request->firstname;
      $bus_account->lastname = $request->lastname;
      $bus_account->semester = $request->semester;
      $bus_account->bus_fee = $request->bus_fee;

     if($bus_account::where('roll_no',$request->roll_no)->first()!=null){
       echo "bus fee is already added";
      //  return view('add_account');
     }
     else{
      // $bus_account->save();
      $roll_no = $request->roll_no;
     
      DB::table('bus_account')
      ->insert([
        'roll_no'=>$roll_no
      ]);
     $student_info = new student_info;

     $bus_fee = $request->bus_fee;

     
   
     $student_info::where('roll_no',$request->roll_no)
     ->update(['bus_fee'=>$request->bus_fee]);

      $data =  $student_info::where('roll_no',$request->roll_no)->get();
      foreach($data as $row){
        $total_fee= $row['total_fee'];
      }
      $student_info::where('roll_no',$roll_no)
     ->update(['total_fee'=>$bus_fee+$total_fee]);
    
    $data = "<script>alert('data submitted successfully');</script>";
      
     
     return view('add_account')->with(['data'=>$data]);
     }
    }

    public function scholarship_add(Request $request){
      $scholarship = new scholarship;
     
      
      $fee = 103000;
      
      /* echo $request->roll_no;
      echo $request->firstname;
      echo $request->lastname;
      echo $request->semester;
      echo $request->percentage;*/

      

      /*$validate = $request->validate(['roll_no'=>'required']);
      $validate = $request->validate(['student_name'=>'required']);
      $validate = $request->validate(['lastname'=>'required']);
      $validate = $request->validate(['scholarship_sem'=>'required']);
      $validate = $request->validate(['scholarship_percentage'=>'required']);
      */

     
      $scholarship_percentage=$request->percentage;


      $total_fee=0;
      $scholarship->roll_no = $request->roll_no;
      $scholarship->student_name =  $request->firstname;
      $scholarship->lastname = $request->lastname;
      $scholarship->scholarship_sem = $request->semester;
      $scholarship->scholarship_percentage = $request->percentage;
      $roll_no=$request->roll_no;
    //  $roll_no =  $scholarship->roll_no;
    //   $scholarship->save();
    if(($scholarship::where('roll_no',$roll_no)->first())!=null){
      echo "scholarship already added";
      //echo $scholarship::where('roll_no',$roll_no)->first();
    }
    else{
      $student_info = new student_info;

       $data = $student_info::where('roll_no',$roll_no)->get();
        foreach($data as $row){
          $total_fee = $row['total_fee'];
        }
  
        DB::table('scholarships')
        ->insert([
          'roll_no'=>$roll_no,
         
        ]);
  
        $student_info::where('roll_no',$roll_no)
        ->update(['scholarship'=>($scholarship_percentage/100)*$total_fee]);
  
        $student_info::where('roll_no',$roll_no)
        ->update(['total_fee'=>$total_fee-($scholarship_percentage/100)*$total_fee]);
  
        $script = "<script>alert('scholarship submitted successfully');</script>";
        echo $script;
        return view('plain_page');
    }

    
    }

    public function getStudentInfo(Request $request){

    $roll_no = $request->bname;
    
    if($roll_no!=null){
     $Student = new student;
     $data = $Student::where('roll_no',$roll_no)->get();
     return view('add_account')->with(['datas'=>$data]);
    }
    else
    return view('add_account');
    }

  public function index(){
  return view('plain_page');
  }
  public function getData(Request $request){
    if(!session()->has('accountant')){

    
      return view('accountantlogin');
      }
    
   $validate = $request->validate(['roll_no'=>'required']);
  // $validate = $request->validate(['roll_no'=>'required']);
    $roll_no = $request->roll_no;
    //echo $roll_no;
    
   //if($roll_no!=null){
    $Student = new student;
    $data = $Student::where('roll_no',$roll_no)->get();
    return view('plain_page')->with(['datas'=>$data]);
   //}
   //else
   //return view('plain_page');
    
  
  
}
public function getData_bus(Request $request){
  if(!session()->has('accountant')){

    
    return view('accountantlogin');
    }
    
  $validate = $request->validate(['roll_no'=>'required']);
 
  $roll_no = $request->roll_no;
   

 // if($roll_no!=null){
   $Student = new student;
   $data = $Student::where('roll_no',$roll_no)->get();
   return view('add_account')->with(['datas'=>$data]);
  //}
 // else
  //return view('add_account');*/
   
 
 
}
}

 ?>
