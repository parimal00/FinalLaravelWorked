
@extends('layout/master')

@section('body')

updateinfo blade

<form action="{{route('update_all_info')}}" method="POST">
    @csrf
    <table class="table">
        <input type="submit" value="Update all the information">
    </table>
</form>

@endsection
