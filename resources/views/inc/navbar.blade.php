<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="{{Request::is('/') ? 'nav-item active':'nav-item'}}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="{{Request::is('about') ? 'nav-item active':'nav-item'}}">
        <a class="nav-link" href="/todo/create">Create ToDo</a>
      </li>
    </ul>
  </div>
</nav>