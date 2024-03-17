
@extends ('master')
@section ('main_section')



        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Child</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="{{route('child.store')}}" method="post">
           @csrf
           <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" value="{{ old('Name') }}" name="Name" class="form-control" placeholder="Name" style="width: 80%;">
                
                  @if($errors->has('Name'))
                <div class="alert alert-danger">{{ $errors->first('Name') }}</div>
            @endif
                </div> 
                
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" value="{{ old('Age') }}" name="Age" class="form-control" placeholder="Age" style="width: 80%;">
                
                  @if($errors->has('Age'))
                <div class="alert alert-danger">{{ $errors->first('Age') }}</div>
            @endif</div>


              <div class="form-group">
                <label>Parent_id</label>
                <input type="text" name="Parent_id"value="{{ old('Parent_id') }}" class="form-control" placeholder="Parent_id"  style="width: 80%;">
                
                @if($errors->has('Parent_id'))
                 <div class="alert alert-danger">{{ $errors->first('Parent_id') }}</div>
                @endif
              </div> 

              
              
              
               <div class="form-group">
                  <label>Blood_group</label><br>
                  
                  <select>
                  <option value="A">A</option>
                 <option value="B">B</option>
                 <option value="AB">AB</option>
                 <option value="O">O</option>
                 </select>
                  @if($errors->has('Blood_group'))
                  <div class="alert alert-danger">{{ $errors->first('Blood_group') }}</div>
                  @endif
                </div>

                <div class="form-group">
                <label>Gender</label><br>
                <!-- <input type="text" name="gender"value="{{ old('gender') }}" class="form-control" placeholder="gender "  style="width: 100%;"> -->
                <label>
               <input type="radio" name="Gender" value="male"> Male
                </label>
                <br>
                <label>
                 <input type="radio" name="Gender" value="female"> Female
                </label>
                
                  @if($errors->has('Gender'))
                 <div class="alert alert-danger">{{ $errors->first('Gender') }}</div>
                 @endif
               </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                  <label>Id_card</label>
                  <input type="number" value="{{ old('Id_card') }}" name="Id_card" class="form-control" placeholder="Id_card" style="width: 80%;">
                
                  @if($errors->has('Id_card'))
                <div class="alert alert-danger">{{ $errors->first('Id_card') }}</div>
                @endif
              </div>
                
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="Address" value="{{ old('Address') }}"class="form-control" placeholder="Address"  style="width: 80%;">
                  
                  @if($errors->has('Adress'))
                 <div class="alert alert-danger">{{ $errors->first('Adress') }}</div>
                  @endif
                </div>
                <!-- <div class="form-group">
                  <label>attendance_id</label>
                  <input type="number" name="attendance_id"value="{{ old('attendance_id') }}" class="form-control" placeholder="attendance_id"  style="width: 100%;">
                  @if($errors->has('attendance_id'))
                   <div class="alert alert-danger">{{ $errors->first('attendance_id') }}</div>
                  @endif
                </div> -->
                <!-- <div class="form-group">
                  <label>blood_group</label>
                  <input type="text" name="blood_group" value="{{ old('blood_group') }}"class="form-control" placeholder="blood_group"  style="width: 100%;">
                  @if($errors->has('blood_group'))
                  <div class="alert alert-danger">{{ $errors->first('blood_group') }}</div>
                  @endif
                </div> -->
                
           

                </div>

                <div class="submit">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
           
        
        </div>





@endsection
              


                