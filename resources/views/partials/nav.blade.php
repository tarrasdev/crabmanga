<header>
  <div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container">
      <a href="/" class="navbar-brand d-flex">
        <div>
          <img src="/crab.png" class='crab'>  
        </div>
        
        <div>
          <h3>CrabManga</h3>
        </div>
        </a>

          @if(!Auth::check())
          <ul class="nav justify-content-end">
            <a href="/login" class='navbar-brand ml-auto'>Login</a>
            <a href="/register" class='navbar-brand ml-auto'>Register</a>
          </ul>
          @endif

          @if(Auth::check())
          <ul class="nav justify-content-end">
            <h4 class='navbar-brand ml-auto'>{{Auth::user()->name}}</h4>
            <a href="/logout" class='navbar-brand ml-auto'>Logout</a>
            <a href="/posts/create" class='btn btn-primary btn-lg'>Create</a>
          </ul>
          @endif

      </a>
    </div>
  </div>
</header>
