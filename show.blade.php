	
@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header"><h2>Student's Detail</h2></div>
  <hr>
  
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Class: {{ $students->class }}</p>
        <p class="card-text">Section : {{ $students->section }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>