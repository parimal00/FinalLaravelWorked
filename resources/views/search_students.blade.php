
@extends('layout/master')

@section('body')


search_student blade


@foreach($data as $row)
<table class="table">
    <tr>
        <th>roll_no</th>
          <th>name</th>
          <th>semester</th>
          <th>semester_fee</th>
          <th>balance_due</th>
          <th>scholarship</th>
          <th>bus_fee</th>
          <th>total_fee</th>
          <th>Edit</th>
          <th>Delete</th>

        
      </tr>
    <tr>
        <td>{{$row['roll_no']}}</td>
        <td>{{$row['name']}}</td>
        <td>{{$row['semester']}}</td>
        <td>{{$row['semester_fee']}}</td>
        <td>{{$row['balance_due']}}</td>
        <td>{{$row['scholarship']}}</td>
        <td>{{$row['bus_fee']}}</td>
        <td>{{$row['total_fee']}}</td>
        
    <td> <a href="../edit_student_info?roll_no={{$row['roll_no']}}"><button >Edit</button></a> </td>
       <td> <button>Delete</button></td>
    </tr>
</table>
@endforeach


@endsection
