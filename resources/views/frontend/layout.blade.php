<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.includes.header')
</head>

<body id="default_theme" class="home_page1">
<!-- header -->
@include('frontend.includes.nav')
<!-- end header section -->


<!-- yield content - homepage content -->

@yield('content')

<!-- end of content yield -->


<!-- footer bottom -->
@include('frontend.includes.footer')
<!-- end footer -->

<!--=========== js section ===========-->
@include('frontend.includes.scripts')
<!-- end of js section  -->

</body>
</html>
