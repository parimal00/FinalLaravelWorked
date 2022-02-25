
@extends('layout/master')

@section('body')

<table class ="table">
  due_balance_students.blade
  <tr>
    <th>roll_no</th>
      <th>name</th>
      <th>semester</th>
      <th>due_amount</th>
      <th>date</th>
    
    
  </tr>
@foreach ($data as $row)
<tr>
  <td>{{$row->roll_no}}</td>
      <td>{{$row->firstname}}</td>
      <td>{{$row->semester}}</td>
      <td>{{$row->due_amount}}</td>
      <td>{{$row->date}}</td>
     


</tr>
@endforeach
</table>

@endsection
