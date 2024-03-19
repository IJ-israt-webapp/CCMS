@extends('master')
@section('main_section')

<div class="container">
    <h2>Teacher</h2>
    <br>
    <a class="btn btn-success" href="{{route('teacher.post')}}">Add Teacher</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">name</th>
      <th scope="col">identity</th>
      <th scope="col">number</th>
      <th scope="col">mail</th>
      <th scope="col">nid</th>
      <th scope="col">address</th>
      <th scope="col">gender</th>
      <th scope="col">status</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teacher as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>

      <td>{{$item->name}}</td>
      <td>{{$item->identity}}</td>
      <td>{{$item->number}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->nid}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->status}}</td>
      
   
<td>

<div class="iconss">
                                    <a href="{{ route('teacher.post')}}"> <i class="fas fa-eye"></i></a>
                                    <a href="{{ route('teacher.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('teacher.delete',$item->id)}}"><i class="fas fa-trash-alt"></i></a>
                                </div>


  

</td>
</tr>
    @endforeach

  </tbody>
</table>

</div>



@endsection