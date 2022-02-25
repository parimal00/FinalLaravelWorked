
@extends('layout/master')

@section('body')

@error('roll_no') {{$message}} @enderror


                            <form class="" action="{{route('roll_no_bus')}}" method="post">
                              @csrf
                                <table class ="table">

<tr>
  add_account blade
  <td><input type="text" class ="form-control"placeholder="Enter roll no" name="roll_no"></td>

</tr>
<tr>
  <td><input type="submit" name="hey"></td>
</tr>
</form>

</table>
<?php

if(isset($_POST['hey'])&&$_POST['roll_no']!=null){
?>
  @foreach($datas as $row)
  {{$row['lastname']}}
  <table class="table table-bordered">
   <form action="submit_bus_fee_info" method ="post">
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
      <td><input class ="form-control"name="bus_fee"placeholder="enter  bus_fee" type="text"></td>
    </tr>
    <tr>
      <td><button name="btn_addData"  class="form-control">Add data in database</button></td>
    </tr>
  </form>
  </table>
  @endforeach
 
<?php
}
?>
<?php 
if(isset($_POSTS['btn_addData'])){
?>
{!! $data !!}}
<?php 
}
?>
@endsection
