<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.header')
    <title>@yield('page-title')</title>
  </head>
  <body class="hold-transition dark-mode">
    <div class="wrapper">
      <div class="row pl-5 pt-2 m-0">
        @include('includes.leftNav')
        @yield('main-section')
        @include('includes.rightNav')
      </div>
    </div>

    @include('includes.script')
  </body>
</html>
