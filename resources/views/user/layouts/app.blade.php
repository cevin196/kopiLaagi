<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layouts.head')
</head>

<body>

    <!-- END nav -->
    @include('user.layouts.navbar')
    {{-- header --}}
    @include('user.layouts.header')
    {{-- end header --}}

	@section('content')
		
	@show


    <footer class="ftco-footer ftco-section img">
        @include('user.layouts.footer')
    </footer>



    <!-- loader -->
    {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div> --}}


    @include('user.layouts.script')

</body>

</html>
