<header>
  <div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container d-flex justify-content-between">
      <a href="/" class="navbar-brand d-flex align-items-center">
        <div>
          <img src="/crab.png" class='crab'>  
        </div>
        
        <div>
          <h3>CrabManga</h3>
        </div>
        </a>

          @if(Auth::check())

          <h4 class='navbar-brand ml-auto'>{{Auth::user()->name}}</h4>

          @endif

      <a href="/posts/create" class='btn btn-primary btn-lg'>Create</a>
      </a>
    </div>
  </div>
</header>
