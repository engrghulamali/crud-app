@include('inc.header')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form class="form-horizontal" method="post" action="{{ route('create') }}" enctype="multipart/form-data">
        @csrf
     <fieldset>
      <legend>Crud App</legend>
       @if(isset($errors))
    
      @foreach($errors->all() as $error)
       <div class="alert alert-danger">
          {{$error}}
       </div>
      @endforeach
      @endif
      <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Profile</label>
       <div class="col-lg-10">
        <input type="file" name="img" class="form-control" id="inputEmail" placeholder="Title">
      </div>
    </div>
       <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Title</label>
       <div class="col-lg-10">
        <input type="text" name="title" class="form-control" id="inputEmail" placeholder="Title">
      </div>
    </div>
    <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Price</label>
       <div class="col-lg-10">
        <input type="text" name="price" class="form-control" id="inputEmail" placeholder="e.g:1000Rs">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">

       
       <textarea class="form-control" name="description"  placeholder="Description">
         
       </textarea>
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       
        <button type="submit" class="btn btn-primary">Submit</button>
         <a href="{{ url('/')}}" class="btn btn-primary">Back</a>
      </div>
    </div>
  </fieldset>
</form>
      
    </div>
  </div>
</div>
@include('inc.footer')