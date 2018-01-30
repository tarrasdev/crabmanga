<div class="col-md-4">
  <div class="card mb-4 box-shadow">

      @if($post->cover!=null)
        <img src="{{$post->cover}}" class='img-fluid'>
      @endif
      <div class="card-body">
        <p class="card-text">{{$post->title}}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a class='btn btn-outline-dark' href='posts/{{$post->id}}'>View</a>
              <a class='btn btn-outline-dark' href="posts/{{$post->id}}/edit">Edit</a>
                <form action="/posts/{{$post->id}}" method='POST'>
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                    <button class='btn btn-outline-dark'>Delete Post</button>
                
                </form>
            </div>
           </div>
          </div>
  </div>
</div>
