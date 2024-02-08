<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          @endguest
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
          @guest
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">View Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('password.edit') }}">Update Password</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item text-danger" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                <form action="/logout" method="post" id="logout-form">@csrf</form>
              </li>
            </ul>
          </li>
          @endguest
        </ul>
    </div>
  </div>
</nav>