


                        <!-- Authentication Links at the TOP BAT -->
                          <div class="top-bar" id="index">
            <div class="heading"></div>
            <div class="user-tab">
                <ul class="navbar-nav ml-auto">

                        @guest
                        <!--  not logged in yet -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else   
                        <!-- when your logged -->
                        <h2 class="username">{{ Auth::user()->fname }}</h2>
                            <li class="hiddenUser">
                                    <h2 class="dropdown-item" id="yourprofile">Your Profile</h2>
                                   <h2 class="dropdown-item" id="flname">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h2>
                                  <h2 class="dropdown-item" id="profession">{{ Auth::user()->profession }}</h2>
                                <div class="dropdown-item">
                                <div class="inline-item">
                                <img src="/images/phone-user.svg" class="user-icons">
                                 <h2 class="dropdown-item" id="pro_number">{{ Auth::user()->pnumber }}
                                 </h2>
                             </div>
                                </div>
                                <div class="dropdown-item">
                                     <div class="inline-item">
                                <img src="/images/email-user.svg" class="user-icons">
                                  <h2 class="dropdown-item" id="pro_email">{{ Auth::user()->email }}</h2>
                              </div>
                                </div>
                                <div class="double-btn" id="userbtns">
                                    <div class="editprofile"><h2 class=" dropdown-item" id="editprofile">Edit</h2>
                                    </div>
                                 <div class="logoutprofile">
                                    <a class="dropdown-item" id="logoutprofile" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>

                    <!-- sidebar menu -->
         @guest
         @else
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.1/lottie.min.js"></script>
        <div>
            
                
         
            <label for="menu-toggle" id="menuToggle">
                <div class="menu" href="{{ url('/') }}">
                   <div id="logo-menu">
                    <div id="lottie">
                         </div>
                        <img src="/images/logo.svg" id="logo">
                   </div>
                    <input type="checkbox" id="menu-toggle"/>
                    <div id="menu" >
                        <img src="/images/whiteLogo.svg" class="whiteLogo">
                            
                            <div class="active-menu" id="homeactive"><a class="active-menu" href="{{ url ('/')}}"><img class="miniIcons" src="/images/minihome.svg">Home</a>
                            </div>

                            <div class="active-menu"><a href="{{ url ('/clients')}}" class="active-menu" >
                            <img class="miniIcons" src="/images/miniclient.svg">Clients</a>
                            </div>

                            <div class="active-menu" id="addproj"><a href="{{ url ('/projects/new')}}"" class="active-menu" ><img class="miniIcons" src="/images/add.svg">Add a Project</a>
                            </div>

                            <div class="active-menu" id="addproj"><a href="{{ url ('/clients/new')}}" class="active-menu" ><img class="miniIcons" src="/images/add.svg">Add a Client</a>
                            </div>

                    </div>
                </div>
            </label>
        </div>
        @endguest
    </div>
        <script src="{{ asset('/js/hamburger.js') }}"></script> 



