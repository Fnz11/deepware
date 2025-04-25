<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Pelatihan') - BKPSDM</title>

    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pelatihan.css') }}">
    @yield('additional-css')

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background: #e2eaf1;
        }

        .layout-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Content area styles */
        .content-wrapper {
            flex: 1;
            padding: 20px; 
            /* Match sidebar width */
            transition: margin-left 0.3s ease;
        }

        .content-wrapper.expanded {
            margin-left: 60px;
        }

        .content-header {
            background: #fff;
            padding: 15px 20px;
            width: calc(100% - 280px);
            box-shadow: 0 7px 7px rgba(0,0,150, .05);
            border-radius: 8px;
            margin-bottom: 20px;
            margin-left: auto;
        }

        .content-body {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 7px 7px rgba(0,0,150, .05);
            width: calc(100% - 280px);
            margin-left: auto
        }

        /* Header adjustments */
        .header {
            position: fixed;
            top: 0;
            right: 0;
            left: 250px;
            /* Match sidebar width */
            z-index: 1030;
            transition: left 0.3s ease;
        }

        .header.expanded {
            left: 60px;
        }
    </style>
</head>

<body>
    <div class="layout-wrapper">
        @include('pelatihan-sidebar')

        <div class="content-wrapper">
            @include('header')

            {{-- <div class="content-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1 class="h3 mb-0">@yield('page-title')</h1>
                        </div>
                        <div class="col-auto">
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="content-body">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sidebar toggle functionality
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content-wrapper');
            const header = document.querySelector('.header');
            const toggleBtn = document.querySelector('#sidebarToggle');

            if (toggleBtn) {
                toggleBtn.addEventListener('click', () => {
                    sidebar.classList.toggle('closed');
                    content.classList.toggle('expanded');
                    header.classList.toggle('expanded');
                });
            }

            // Handle responsive behavior
            function handleResize() {
                if (window.innerWidth < 768) {
                    sidebar?.classList.add('closed');
                    content?.classList.add('expanded');
                    header?.classList.add('expanded');
                }
            }

            window.addEventListener('resize', handleResize);
            handleResize(); // Initial check
        });
    </script>

    @yield('scripts')
</body>

</html>
