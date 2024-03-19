@extends('master')

@section('main_section')

<div class="container">
    <h2>Child</h2>
    <br>
    <a class="btn btn-success" href="{{route('child.create')}}">Add Child</a>
 <br>
<table class="table">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">name</th>
      <th scope="col">id_card</th>
      <th scope="col">age</th>
      <th scope="col">address</th>
      <th scope="col">parent_id</th>
      <th scope="col">gender</th>
      <th scope="col">blood_group</th>
      <th scope="col">status</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($children as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>

      <td>{{$item->name}}</td>
      <td>{{$item->id_card}}</td>
      <td>{{$item->age}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->parent_id}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->blood_group}}</td>
      <td>{{$item->status}}</td>

      
   
<td>

<div class="iconss">
                                    <a href="{{ route('child.create')}}"> <i class="fas fa-eye"></i></a>
                                    <a href="{{ route('child.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('child.delete',$item->id)}}"><i class="fas fa-trash-alt"></i></a>
                                </div>



</td>
</tr>
    @endforeach

  </tbody>
</table>

</div>






























@endsection