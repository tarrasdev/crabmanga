<header>
  <div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container d-flex justify-content-between">
     
        <div class='row'>
            <div class='col'>
                <a class='navbar-brand' href='/posts/{{$post->id}}'>{{$post->title}}</a>
            </div>
         
            <div class='col'>
                    <button onclick='addImage(-1)' class='reader-buttons'>Prev</button>
                    <button onclick='addImage(1)' class='reader-buttons'>Next</button>
            </div>
          
        </div>
       
    </div>
  </div>
</header>