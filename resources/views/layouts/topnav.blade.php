<!-- top navbar-->
<header class="topnavbar-wrapper">
   <!-- START Top Navbar-->
   <nav role="navigation" class="navbar topnavbar">
      <!-- START navbar header-->
      <div class="navbar-header">
         <a href="#/" class="navbar-brand">
            <div class="brand-logo">
               <img src="{{ asset('img/logo.png') }}" alt="App Logo" class="img-responsive">
            </div>
            <div class="brand-logo-collapsed">
               <img src="{{ asset('img/logo-single.png') }}" alt="App Logo" class="img-responsive">
            </div>
         </a>
      </div>
      <!-- END navbar header-->
      <!-- START Nav wrapper-->
      <div class="nav-wrapper">
         <!-- START Left navbar-->
         <ul class="nav navbar-nav">
            <li>
               <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
               <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                  <em class="fa fa-navicon"></em>
               </a>
               <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
               <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                  <em class="fa fa-navicon"></em>
               </a>
            </li>
         </ul>
         <!-- END Left navbar-->
         <!-- START Right Navbar-->
         <ul class="nav navbar-nav navbar-right">
            <li>
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <em class="icon-power"></em>
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
               </form>
            </li>
         </ul>
         <!-- END Right Navbar-->
      </div>
      <!-- END Nav wrapper-->
   </nav>
   <!-- END Top Navbar-->
</header>