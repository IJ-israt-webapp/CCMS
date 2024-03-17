@extends('master')
@section('main_section')

<div class="container">
    <h2>Rank</h2>
    <br>
    <a class="btn btn-success" href="{{route('teacher.post')}}">Add Teacher</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Identity Number</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Mail</th>
      <th scope="col">NID</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teacher as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>

      <td>{{$item->name}}</td>
      <td>{{$item->status}}</td>
      
   
<td>
  
  <!-- <a class="btn btn-info" href="{{route('rank.view',$item->id)}}">View</a> -->
<!-- <a class="btn btn-warning" href="{{route('rank.edit',$item->id)}}">Edit</a>
<a class="btn btn-danger" href="{{route('rank.delete',$item->id)}}">Delete</a> -->
</td>
</tr>
    @endforeach

  </tbody>
</table>

</div>



@endsection