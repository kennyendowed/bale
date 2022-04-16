@include('components.header')

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
      <!-- Spinner Start -->
      {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <img src="http://www.ymmaa.com/wp-content/uploads/2015/02/logo155.png"/>
          <div class="spinner"></div>
    </div> --}}
    <!-- Spinner End -->
    <!-- ============================================================== -->

 
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('components.nav')
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        {{-- @include('components.sidebar') --}}
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        {{-- <div id="page-wrapper"> --}}
            @yield('content')
        {{-- </div> --}}
        
        @include('components.footer')

       
</body>

</html>

