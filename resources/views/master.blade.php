
@include('partials._head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('partials.messages')
    @include('partials._navbar')
    @include('partials._sidebar')
    @include('partials._sidebarControl')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('content-header')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        @yield('main-content')


    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





<!-- REQUIRED SCRIPTS -->

@yield('js')
<script src="{{ asset('js/app.js')}}"></script>

</body>
</html>
