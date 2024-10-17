<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- meta -->
  @include('includes.meta')

  <title>@yield('title') | Back Office E-PERPUS PNP</title>


  @include('includes.style')

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <!-- header -->
      @include('components.header')

      <!-- menu -->
      @include('components.menu')

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>


      @include('components.footer')
      
    </div>
  </div>

  @include('includes.script')
</body>
</html>