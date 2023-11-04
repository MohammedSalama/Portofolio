<!DOCTYPE html>
<html lang="en">

@include('Frontend.head')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


@include('Frontend.main-sidebar')

@include('Frontend.section')

@include('Frontend.footer')


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@include('Frontend.script')

</body>
</html>
