<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Electronic Store a Ecommerce Online Shopping</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- //for-mobile-apps -->
    <!-- Custom Theme files -->
    <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all" />
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
    {{--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />--}}
    <link href="{!! asset('css/fasthover.css') !!}" rel="stylesheet" type="text/css" media="all" />
    <link href="{!! asset('css/popuo-box.css') !!}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <link href="{!! asset('css/jquery.countdown.css') !!}" rel="stylesheet" /> <!-- countdown -->
    <!-- //js -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<!-- for bootstrap working -->
<script src="{!! asset('js/bootstrap-3.1.1.min.js') !!}" type="text/javascript"></script>
<!-- //for bootstrap working -->

@include('_partials.header_modal')

@include('_partials.header')

@include('_partials.navigation')

@yield('content')

@include('_partials.contact')

@include('_partials.footer')
<!-- cart-js -->
<script src="{!! asset('js/minicart.js') !!}"></script>
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->
</body>
</html>