@extends('master')
@section('main_section')
<div class="container">
  <h2>Teacher Details</h2>
<form action="{{route('teacher.update',$teacheritem->id)}}" method="post" enctype="multipart/form-data">

@csrf
@method('PUT')
@if($errors->any())
        @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
  @csrf

  <div class="form-group">
    <label for="">Teacher Name</label>
    <input type="name"  name="name" class="form-control" id="name" value="{{ $teacheritem->name}}" placeholder="teacher name">
  </div>
  <br>
  <div class="form-group">
    <label for="">Teacher Identity Number</label>
    <input type="number"  name="identity" class="form-control" id="identity"value="{{ $teacheritem->identity}}"  placeholder="teacher identity number">
  </div>
  <br>
  <div class="form-group">
    <label for="">Teacher Phone Number</label>
    <input type="number"  name= "number" class="form-control" id="number"value="{{ $teacheritem->number}}"  placeholder="teacher phone number">
  </div>
  <br>
  <div class="form-group">
    <label for="">Teacher Mail ID</label>
    <input type="email"  name="mail" class="form-control" id="mail" value="{{ $teacheritem->mail}}" placeholder="teacher mail id">
  </div>
  <br>
  <div class="form-group">
    <label for="">Teacher NID Number</label>
    <input type="number"  name="nid" class="form-control" id="nid"value="{{ $teacheritem->nid}}"  placeholder="teacher nid number">
  </div>
  <br>
  <div class="form-group">
    <label for="">Teacher Address</label>
    <input type="text"  name="address" class="form-control" id="address" value="{{ $teacheritem->address}}" placeholder="teacher address">
  </div>
  <br>
  <div class="form-group">
  <label for=""> Gender </label>
  <div class="form-check">
  <input type="radio" class="form-check-input" id="male" name="gender" value="male" checked>Male
  <label class="form-check-label" for="male"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="female" name="gender" value="female">Female
  <label class="form-check-label" for="female"></label>
</div>

  </div>
  


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection