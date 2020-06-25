@include('inc.header')

  <div class="container">
    <div class="row">
    
      <legend>Pharmacy</legend>
      
       <div class="row">
         <div class="col-md-6 col-lg-6">
          @if(session('info'))
           <div class="alert alert-success">
             {{session('info')}}
           </div>
          @endif
         </div>
       </div>
        <table class="table table-striped table-hover">
         <thead>
        <!--  -->
      
           <tr>
            <th> ID</th>
             <th> Profile</th>
             <th>Title</th>
               <th>Price</th>
             <th>Description</th>
             <th>Action</th>
           </tr>
         </thead>
         <tbody>
            @if(isset($articles))
        
          @foreach($articles as $article)


           <tr>
            <td>{{ $article->id }}</td>
             <td >
  <img  src="{{Storage::url($article->img)}}" style="width: 40px; height: 40px"></td>
            
             <td>{{ $article->title }}</td>
              <td>{{ $article->price }}</td>
             <td>{{ $article->description}}</td>
             <td>
      
                <a href="{{route('read',$article->id)}}" class="label label-primary">Read</a>

               <a href="{{route('delete',$article->id)}}" class="label label-danger">Delete</a>

                <a href="{{route('edit',$article->id)}}" class="label label-danger">Edit</a>
             </td>
            
             </td>
           </tr>
            @endforeach
          
      
         </tbody>
          
        </table>
          <span>{{ $articles->links() }}</span>
           @endif

        </div>
      </div>
    </div>
  </div>
</table>
@include('inc.footer')