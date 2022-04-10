@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header"><h2>EDIT</h2></div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Class</label></br>
        <input type="text" name="class" id="class" value="{{$students->class}}" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" value="{{$students->section}}" class="form-control"></br>

        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop