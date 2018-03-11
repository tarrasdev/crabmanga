<div class="col-md">
  <div class="container posts">
    <div>
      @if($post->cover!=null)
        <img src="{{$post->cover}}" class='img-fluid cover-image'>
      @endif
    </div>
      <h6 class="card-title">{{$post->title}}</h6>
      <a class='btn btn-info buttons btn-sm' href='posts/{{$post->id}}'>View</a>
      @if(Gate::allows('update-post', $post))
        <a class='btn btn-success buttons btn-sm' href="posts/{{$post->id}}/edit">Edit</a>
        <a class='btn btn-danger buttons btn-sm' href="posts/{{$post->id}}/delete">Delete</a>
      @endif
  </div>
</div>

