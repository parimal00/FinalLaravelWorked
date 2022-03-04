
@extends('layout/master')

@section('body')
edit_students_info blade


  @foreach($data as $row)
  
  <table class="table table-bordered">
  <form action="{{route('edit_info')}}" method ="post">
    @csrf
    <tr>
        <td>Roll number</td>
      </tr>
      <tr>
        <td><input class ="form-control"type="text" name="roll_no" value ="{{$row->roll_no}}"></td>
      </tr>
      <tr>
        <td>Name</td>
      </tr>
      <tr>
        <td><input class ="form-control"type="text" name="firstname"value ="{{$row->firstname}}"></td>
      </tr>
      <tr>
        <td>Semester</td>
      </tr>
      <tr>
        <td><input class ="form-control" name="semester"type="text"value ="{{$row->semester}}"></td>
      </tr>
      <tr>
        <td>Semester fee</td>
      </tr>
      <tr>
      <td><input class ="form-control"name="semester_fee" value ="{{$row->semester_fee}}" type="text"></td>
      </tr>
      <tr>
        <td>Balance due</td>
      </tr>
      <tr>
        <td><input class ="form-control"name="balance_due" value ="{{$row->balance_due}}" type="text"></td>
        </tr>
      <tr>
        <td>Scholarship</td>
      </tr>
      <tr>
        <td><input class ="form-control"name="scholarship" value ="{{$row->scholarship}}" type="text"></td>
        </tr>
      <tr>
        <td>Bus fee</td>
      </tr>
      <tr>
        <td><input class ="form-control"name="bus_fee" value ="{{$row->bus_fee}}" type="text"></td>
        </tr>
      {{-- <tr>
        <td>Total fee</td>
      </tr>
      <tr>
        <td><input class ="form-control"name="total_fee" value ="{{$row->total_fee}}" type="text"></td>
        </tr>
      <tr> --}}
        <td><button name="btn_addData" class="form-control">Edit information</button></td>
      </tr>
  </form>
  </table>
  @endforeach


@endsection
