{{-- <a href="{{url('news')}}">HOME</a></div> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Protet4Uu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/news')}}">{{__('menu.home')}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="{{url('/news/technology')}}">{{__('menu.technology')}}<span class="sr-only">(current)</span></a>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{__('menu.news')}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('news/sport')}}">{{__('menu.sports')}}</a>
                <a class="dropdown-item" href="{{url('news/technology')}}">{{__('menu.technology')}}</a>
                <a class="dropdown-item" href="{{url('news/business')}}">{{__('menu.business')}}</a>
                <a class="dropdown-item" href="{{url('news/politics')}}">{{__('menu.politics')}}</a>
                {{-- <a class="dropdown-item" href="{{url('news/environment')}}">Environment</a> --}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('lang/th')}}">Thai</a>
                <a class="dropdown-item" href="{{url('lang/en')}}">English</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>