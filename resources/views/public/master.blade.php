<!DOCTYPE html>
<html lang="en">
  <head>
    @include('public.header')
    <title>@yield('page-title')</title>
  </head>
  <body class="hold-transition dark-mode">
    <div class="wrapper">
      <div class="row pl-5 pt-2 m-0">
        @include('public.leftNav')
        @yield('main-section')
        @include('public.rightNav')
      </div>
    </div>

    @include('public.script')
  </body>
</html>
