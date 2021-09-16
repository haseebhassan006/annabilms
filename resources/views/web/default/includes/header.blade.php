    <!-- Floating Menu -->
    {{-- <div class="icon" id="menu">
        <!-- <i class="fas fa-bars" id="toggler"></i> -->
        <img src=" {{ asset('/frontend/assets/images/Untitled-1.png') }} " alt=""  id="toggler">
    </div> --}}
      {{-- <div id="main">
        <nav id="navbar">
          <ul id="links">
            <li class="list-inline-item nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Lease</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ride Share</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </nav>
      </div> --}}
      <!-- Floating Menu -->
      <header>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color:black;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/"><img src="{{ asset('/frontend/assets/images/Name-Logo.png') }}" class="img-fluid" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav " >
                        @if(!empty($navbarPages) and count($navbarPages))
                        @foreach($navbarPages as $navbarPage)

                            <li class="nav-item">
                                <a class="nav-link" href="{{ $navbarPage['link'] }}">{{ $navbarPage['title'] }}</a>
                              </li>
                        @endforeach
                    @endif

                      @if(empty($authUser))
                      <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                      </li>
                      @else
                      <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                      </li>
                      @endif
                      <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </li>
                    </ul>

                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
