
@extends('layout/master')

@section('body')

<table class ="table">
  student_info blade
  <tr>
    <th>roll_no</th>
      <th>name</th>
      <th>contact</th>
      <th>semester_fee</th>
      <th>balance_due</th>
      <th>bus_fee</th>
      <th>total_fee</th>
    
  </tr>
@foreach ($data as $row)
<tr>
  <td>{{$row->roll_no}}</td>
      <td>{{$row->firstname}}</td> 
       <td>{{$row->contact}}</td>
      <td>{{$row->semester_fee}}</td>
      <td>{{$row->balance_due}}</td>
      <td>{{$row->bus_fee}}</td>
      <td>{{$row->total_fee}}</td>


</tr>
@endforeach
</table>

@endsection
