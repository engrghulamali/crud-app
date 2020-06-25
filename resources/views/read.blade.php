@include('inc.header')
 <div class="container">
    <div class="row">
    
      <legend>Read Articles</legend>

             <img  src="{{Storage::url($articles->img)}}" style="width: 100px; height: 100px"><br>


      Titel:<p class="lead">{{ $articles->title }}</p>
        Price:<p class="lead">{{ $articles->price }}</p>
      Description:<p>{{ $articles->description }}</p>

@include('inc.footer')