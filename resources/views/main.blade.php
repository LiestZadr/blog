<!doctype html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body>

    @include('partials._nav')
    <!-- Content Start -->
    <div class="container pt-5 pb-5">
    
      @include('partials._message')
      
        @yield('content')

        <hr />

       @include('partials._footer')

    </div>
    <!--Content End -->
    <!-- Script Start -->
    @include('partials._script')

    @yield('scripts')
    <!-- Script End -->
  </body>
</html>
