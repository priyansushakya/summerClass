<!DOCTYPE html>
<html lang="en">
@include('admin.header.header')
<body>
  @include('admin.header.nav')
  <div class="layout">
    @yield('content')
    @include('admin.footer.footer')
  </div>
</body>
</html>
