<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">

<head>
  @include(backpack_view('inc.head')) 

</head>

<body class="{{ config('backpack.base.body_class') }}" >

    @include(backpack_view('inc.sidebar'))

       @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))

       @yield('after_breadcrumbs_widgets')

  @yield('before_scripts')
  @stack('before_scripts')

  @include(backpack_view('inc.scripts'))

  @yield('after_scripts')
  @stack('after_scripts')
</body>
</html>