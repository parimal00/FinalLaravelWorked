
@extends('layout/master')

@section('body')

get_amount_blade

<form class="" action="{{route('roll_get_amount')}}" method="post">
@csrf
<table class ="table">

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
 

  
  <table class="table table-bordered">
   <form action="submit_amount" method ="post">
    @csrf
    <tr>
        <th>Roll no:</td>
      </tr>
    <tr>
      <td><input class ="form-control"type="text" name="roll_no" value ="{{$row->roll_no}}"></td>
    </tr>
    <tr>
        <th>Name</td>
      </tr>
    <tr>
      <td><input class ="form-control"type="text" name="name"value ="{{$row->firstname}}"></td>
    </tr>
    <tr>
        <th>Semester</td>
      </tr>
    <tr>
      <td><input class ="form-control"type="text"name="semester"value ="{{$row->semester}}"></td>
    </tr>
    <tr>
      <th>Semester fee</td>
    </tr>
  <tr>
    <td><input class ="form-control"type="text"name="semester_fee"value ="{{$row->semester_fee}}"></td>
  </tr>
    <tr>
        <th>Balance due</td>
      </tr>
    <tr>
      <td><input class ="form-control" name="balance_due"type="text"value ="{{$row->balance_due}}"></td>
    </tr>
    <tr>
      <th>Scholarship</td>
    </tr>
    <tr>
        <td><input class ="form-control"name="scholarship"value ="{{$row->scholarship}}"></td>
      </tr>
      <tr>
        <th>Bus fee</td>
      </tr>
    <tr>
    <td><input class ="form-control"name="bus_fee"value="{{$row->bus_fee}}"type="text"></td>
    </tr>
    <tr>
      <th>Total amount</td>
    </tr>
  <tr>
  <td><input class ="form-control"name="total_fee"value="{{$row->total_fee}}"type="text"></td>
  </tr>
  <tr>
    <th>Amount obtained </td>
  </tr>
<tr>
<td><input class ="form-control"name="obtained_amount" placeholder="enter your amount" type="text"></td>
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
