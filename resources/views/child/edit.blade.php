@extends('master')
@section('main_section')
<div class="container">
  <h2>Child Details</h2>
<form action="{{route('child.update',$childitem->id)}}" method="post" enctype="multipart/form-data">
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
    <label for="">Child Name</label>
    <input type="name"  name="name" class="form-control" id="name" value="{{ $childitem->name}}" placeholder="Child name">
  </div>
  <br>
  <div class="form-group">
    <label for="">ID Card</label>
    <input type="number"  name="id_card" class="form-control" id="id_card" value="{{ $childitem->id_card}}" placeholder="Id_Card">
  </div>
  <br>
  <div class="form-group">
    <label for="">Age</label>
    <input type="number"  name= "age" class="form-control" id="age"value="{{ $childitem->age}}"  placeholder="Age">
  </div>
  <br>
  <div class="form-group">
    <label for="">Address</label>
    <input type="text"  name="address" class="form-control" id="address" value="{{ $childitem->address}}" placeholder="Address">
  </div>
  <br>
  <div class="form-group">
    <label for="">Parent_Id</label>
    <input type="number"  name="parent_id" class="form-control" id="parent_id"value="{{ $childitem->parent_id}}"  placeholder="Parent_id">
  </div>
  <br>
  <div class="form-group">
    <label for="">Blood_Group</label>
    <input type="text"  name="blood_group" class="form-control" id="blood_group" value="{{ $childitem->blood_group}}" placeholder=" Blood_group">
  </div>


  
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
              