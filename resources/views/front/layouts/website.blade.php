<!DOCTYPE html>
<html lang="en">

@include('front.base._meta')

<body>
<div class="container-xxl bg-white p-0">


   @include('front.partials._header')





    @yield('content')




    @include('front.partials._footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('front.base._scripts')
</body>

</html>
