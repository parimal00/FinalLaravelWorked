
@extends('layout/master')

@section('body')

<table class ="table">
  view_scholarship
  <tr>
    <th>roll_no</th>
      <th>student_name</th>
      <th>scholarship_sem</th>
      <th>scholarship amount</th>
      
    
    
  </tr>
@foreach ($data as $row)
<tr>
  <td>{{$row->roll_no}}</td>
  {{-- <td>{{$row->semester_fee}}</td> --}}
      <td>{{$row->firstname}}</td>
      <td>{{$row->semester}}</td>
      <td>{{$row->scholarship}}</td>
     
     


</tr>
@endforeach
</table>

@endsection
