
@extends('layout/master')

@section('body')



<form class="" action="{{route('roll_no')}}" method="post">
@csrf
<table class ="table">
  insert_student_data

<tr>
  <td><input type="text" class ="form-control"placeholder="Enter roll no" name="bname"></td>
</tr>

<tr>
  <td><input type="submit" name="hey"></td>
</tr>

</form>

</table>

<?php

if(isset($_POST['hey'])&&$_POST['bname']!=null){
?>
  @foreach($datas as $row)
  {{$row['lastname']}}
  <table class="table table-bordered">
   <form action="submit" method ="post">
    @csrf
    <tr>
      <td><input class ="form-control"type="text" name="roll_no" value ="{{$row['roll_no']}}"></td>
    </tr>
    <tr>
      <td><input class ="form-control"type="text" name="firstname"value ="{{$row['firstname']}}"></td>
    </tr>
    <tr>
      <td><input class ="form-control"type="text"name="lastname"value ="{{$row['lastname']}}"></td>
    </tr>
    <tr>
      <td><input class ="form-control" name="semester"type="text"value ="{{$row['semester']}}"></td>
    </tr>
    <tr>
      <td><input class ="form-control"name="percentage"placeholder="enter scholarship percentage" type="text"></td>
    </tr>
    <tr>
      <td><button name="btn_addData" class="form-control">Add data in database</button></td>
    </tr>
  </form>
  </table>
  @endforeach
<?php
}
?>


@endsection
