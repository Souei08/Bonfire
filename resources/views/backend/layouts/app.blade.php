
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Bonfire | CMS</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  @yield('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            @yield('navbar')
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <form action="{{ url('admin/logout') }}" method="POST">@csrf
                <button class="btn btn-dark">
                    <i class="fas fa-power-off"></i>
                </button>
            </form>
            </li>
        </ul>
    </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <center>
        <a href="{{ url('admin/dashboard') }}" class="brand-link">
            CMS
            <span class="brand-text font-weight-light">| Bonfire</span>
        </a>
        </center>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/banner') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/products') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/blog') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/promo') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Promo
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/contact-us') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Contact Us
                        </p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Success!</h5>
            {{ Session::get('success') }}
          </div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-error alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Error!</h5>
            {{ Session::get('error') }}
          </div>
        @endif
        @yield('content')
    </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="{{ asset('js/admin.js') }}"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(document).ready(function () {
    $('#myTable').DataTable();
    });
</script>


@yield('js')

</body>
</html>
