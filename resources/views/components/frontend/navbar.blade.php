<nav class="bg-transparent navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{asset('logo.png')}}" alt="" class="welcome_logo" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="mb-2 navbar-nav me-auto mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
        <form class="d-flex" role="search">
          <a href="{{route('register')}}" class="text-white sign-up-btn text-decoration-none fw-bold">SignUp</a>
        </form>
      </div>
    </div>
  </nav>