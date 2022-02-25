<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/{name}','Hellocontroller@index')->where(["name"=>"[0-9]+"]);



Route::get('/','secondController@index');


//////////////////////////////////////////////////////////////
//////  Student Scholarship Add in the database 


Route::get('lol',function(){
   //return view('accountantlogin');
    
   if(session()->has('accountant')){
  return view('plain_page');
   }
   else{
    return view('accountantlogin');
   }
});
Route::post('submit','Hellocontroller@scholarship_add');

Route::post('lol','Hellocontroller@getData')->name('roll_no');




////////////////////////////////////////////////////////////
///// Add bus fee in database and update the bus fee



Route::post('bus_manage','Hellocontroller@getData_bus')->name('roll_no_bus');

Route::get('bus_manage',function(){
    if(session()->has('accountant')){

    
    return view('add_account');
    }
    else {
        return view('accountantlogin');
    }
});

Route::post('submit_bus_fee_info','Hellocontroller@busfee_add');





///////////////////////////////////////////////////////////////////
////////View Student Information



Route::get('student_info','Hellocontroller@getInfo');




/////////////////////////////////////////////////////////////////
/////////Get Amount

Route::get('get_amount',function(){
    if(session()->has('accountant')){
        return view('get_amount');
    }
    return view('accountantlogin');
});


Route::post('student_info','Hellocontroller@getInfo_amount')->name('roll_get_amount');

Route::post('submit_amount','Hellocontroller@submit_amount');


//////search_student

Route::post('layout/master','Hellocontroller@search_student')->name('search');

/////////////////////////////////////
///////////Edit Student account information

Route::get('edit_student_info','Hellocontroller@edit_student_info');

Route::post('edit_student_info','Hellocontroller@update')->name('edit_info');


////////////////////////////////////////////////////////////
///////////////////Update all the information

Route::get('update',function(){
    if(session()->has('accountant')){
        return view('updateInfo');
    }
    else{
    return view('accountantlogin');
    }
});

Route::post('update','Hellocontroller@update_all_info')->name('update_all_info');

///////////////////////////////////////////////////////////////////
///////////////////////View students with due balance

Route::get('view_due','Hellocontroller@stu_due_get_info');


/////////////////////////////////////////////////////////////////
//////////////////////View students with scholarships

Route::get('view_scholarship','Hellocontroller@stu_scho_get_info');


Route::get('admin/lol',function(){
    return view ('admin');
});


/*


Route::post('add_account','Hellocontroller@getStudentInfo')->name('roll_no');
Route::get('insert_stu_data',function(){
    return view('insert_student_data');
});

//Route::post('lol','Hellocontroller@scholarship_add')->name('scholarship_add');

Route::get('student_info',function(){
return view('student_info');
});




*/

Route::get('accountantlogin',function(){
    return view('accountantlogin');
});

Route::post('login_accountant','Hellocontroller@accountant_login');

Route::get('logout',function(){
    session()->pull('accountant');
    return view('accountantlogin');

});