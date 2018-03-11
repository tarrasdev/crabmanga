<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav">
      <img src="/crab.png" class='navbar-brand crab-icon'>
      <a class="navbar-brand" href="/">CrabManga</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </ul>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/posts/{{$post->id}}">{{$post->title}}<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <button onclick='addImage(-1)' class='reader-buttons'>Prev</button>
        </li>
        <li class="nav-item active">
          <button onclick='addImage(1)' class='reader-buttons'>Next</button>
        </li>
      </ul>
    </div>
  </nav>
</header>