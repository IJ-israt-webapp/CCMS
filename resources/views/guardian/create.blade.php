@extends ('master')
@section ('main_section')

<div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
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
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Guardian Information</h3>

            <!-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div> -->
          <!-- /.card-header -->
          <form action="{{route('guardian.store')}}" method="post">
           @csrf
           <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Parents Name</label>
                  <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="name" style="width: 100%;">
                
                  @if($errors->has('name'))
                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
                </div> 
                
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Parent_id</label>
                  <input type="number" value="{{ old('number') }}" name="parent_id" class="form-control" placeholder="Parent id" style="width: 100%;" style="width: 100%;">
                
                  @if($errors->has('parent_id'))
                <div class="alert alert-danger">{{ $errors->first('parent_id') }}</div>
            @endif</div>


              <div class="form-group">
                <label>email</label>
                <input type="email" name="email"value="{{ old('email') }}" class="form-control" placeholder="email"  style="width: 100%;">
                
                @if($errors->has('email'))
                 <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                @endif
              </div>

              <div class="form-group">
                 <label>phone number</label>
                 
                  <input type="number" name="number" value="{{ old('number') }}"class="form-control" placeholder="Phone-number" style="width: 100%;">
                  @if($errors->has('number'))
                 <div class="alert alert-danger">{{ $errors->first('number') }}</div>
                 @endif
               </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                
                  <label>Address</label>
                  <input type="text" name="address"value="{{ old('address') }}" class="form-control" placeholder="address" style="width: 100%;">
                  @if($errors->has('address'))
                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
            @endif 
                  
                </div>
                <div class="form-group">
                  <label>parent profession</label>
                  <input type="text" name="parent_profession" value="{{ old('parent profession') }}"class="form-control" placeholder="Parent profession"  style="width: 100%;">
                  
                  @if($errors->has('parent_profession'))
                 <div class="alert alert-danger">{{ $errors->first('parent_profession') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>NID</label>
                  <input type="number" name="NID"value="{{ old('NID') }}" class="form-control" placeholder="NID"  style="width: 100%;">
                  @if($errors->has('NID'))
                   <div class="alert alert-danger">{{ $errors->first('NID') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Blood group</label>
                  <input type="text" name="blood_group" value="{{ old('blood_group') }}"class="form-control" placeholder="Blood group"  style="width: 100%;">
                  @if($errors->has('blood_group'))
                  <div class="alert alert-danger">{{ $errors->first('blood_group') }}</div>
                  @endif
                </div>
                
           

                </div>

                <div class="submit">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
           
        
        </div>
    

@endsection