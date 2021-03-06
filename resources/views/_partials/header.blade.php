<!-- header -->
<div class="header" id="home1">
    <div class="container">
        <div id="app"></div>
        <div class="w3l_login">
            <!-- <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a> -->
            @if (Auth::check())
                <form action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="glyphicon glyphicon-log-out" aria-hidden="true"></button>
                </form>
                <div id="user-details">

                {{ Auth::user()->first_name }}

                @if(Auth::user()->hasRole('administrator'))
                    <a id="dashboard" href="{{ url('dashboard') }}">Dashboard</a>
                @endif

                </div>
            @else
                <a href="{{ url('login') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                <a href="{{ url('register') }}" id="register-link">Register</a>
            @endif
        </div>
        <div class="w3l_logo">
            <h1><a href="index.html">Electronic Store<span>Your stores. Your place.</span></a></h1>
        </div>
        <div class="search">
            <input class="search_box" type="checkbox" id="search_box">
            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
            <div class="search_form">
                <form action="#" method="post">
                    <input type="text" name="Search" placeholder="Search...">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
        <div class="cart cart box_1">
            <form action="#" method="post" class="last">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- //header -->