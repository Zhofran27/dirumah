<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Gabut Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
          </li>
        </ul>
        {{-- <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back 
            </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
               <li><hr class="dropdown-divider"></li>
               <li>
                <form action="/logout" method="post">
                  @csrf
                  <a class="dropdown-item">Logout</a>
                </form>
                 
               </li>
             </ul> --}}
             @auth
             <div class="navbar-nav">
              <div class="nav-item text-nowrap">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="nav-link px-3 bg-dark border-0">Logout </button>
                </form>
              </div>
            </div>
          </li>
         @else
          <li class="nav-item text-nowrap">
            <a href="/login" class="nav-link px-3 border-0">Login</a>
          </li>
          @endauth
        </ul> 
        </ul>
      </div>
    </div>
  </nav>