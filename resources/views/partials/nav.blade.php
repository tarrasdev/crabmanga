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
        @if(!Auth::check())
        <li class="nav-item active">
          <a class="nav-link" href="/login">Login<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/register">Register<span class="sr-only">(current)</span></a>
        </li>
        @endif
        @if(Auth::check())
        <li class='nav-item active'>
          <a class='nav-link'>Hello, {{Auth::user()->name}}!</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/logout">Logout<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/posts/create">Create a new gallery<span class="sr-only">(current)</span></a>
        </li>
        @endif
      </ul>
    </div>
  </nav>
</header>
