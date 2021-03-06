<header class="masthead">
  <div class="inner masthead__inner">
    
    <div class="masthead__logo">
      <a href="{{ URL::to('/') }}"><img src="{{ URL::to('/img/cat.svg') }}" alt="Home"></a>
    </div>

    <nav class="masthead__nav main-nav">
      <ul class="main-nav__list">

        @if (Auth::guest())
          <li class="nav-item active">
            <a class="nav-link" href="{{ URL::to('users/login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('users/register') }}">Register</a>
          </li>
        @else
          @if(!Auth::getUser()->is_member)
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('subscribe/payment') }}">Subscribe</a>
            </li>
          @else
            <li class="nav-item ">
              <a class="nav-link" href="{{ URL::to('members') }}">Members area</a>
            </li>
          @endif
          <li class="nav-item ">
            <a class="nav-link" href="{{ URL::to('account/profile') }}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('users/logout') }}">Logout</a>
          </li>
          
        @endif
      </ul>
      <!-- main-nav__list -->
    </nav>
    <!-- ./main-nav -->  
  </div>
  <!-- ./inner -->
</header>