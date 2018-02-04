<div class="col-md-4">
  <div class="container">

      @if($post->cover!=null)
        <img src="{{$post->cover}}" class='img-fluid images'>
      @endif
      <div class="card-body">
        <h4 class="card-text">{{$post->title}}</h4>
          <div class="d-flex justify-content-between align-items-center">
            <div class="row">

            <a class='btn btn-info buttons' href='posts/{{$post->id}}'>View</a>

            <a class='btn btn-success buttons' href="posts/{{$post->id}}/edit">Edit</a>

            <form action="/posts/{{$post->id}}" method='POST'>
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                    <button class='btn btn-danger buttons'>Delete</button>
                
            </form>

            </div>
           </div>
          </div>
  </div>
</div>
