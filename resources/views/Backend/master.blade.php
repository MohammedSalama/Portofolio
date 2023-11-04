<!DOCTYPE html>
<html lang="en">

@include('Backend.head')

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="{{ asset('Backend/assets/images/pre-loader/loader-01.svg') }}" alt="">
    </div>

    <!--=================================
     preloader -->

    @include('Backend.header')

    <!--=================================
     Main content -->

    <div class="container-fluid">
        <div class="row">

            @include('Backend.main-sidebar')

            <!--=================================
           wrapper -->

            <div class="content-wrapper">

                @yield('page-header')

                @yield('content')
                <!--=================================
                 wrapper -->

                <!--=================================
                 footer -->

                @include('Backend.footer')
            </div><!-- main content wrapper end-->
        </div>
    </div>
</div>

<!--=================================
 footer -->

@include('Backend.script')
</body>
</html>
