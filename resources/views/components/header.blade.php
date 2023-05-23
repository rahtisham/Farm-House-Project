<header class="header fixed">
    <!-- Header Top Begin -->
    <div class="header-top hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-5">
                    <div class="social-to">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div> <!-- /.social-to -->
                </div> <!-- /.col- -->
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7">
                    <div class="contact-to">
                        <div class="contact-text">
                            <ul>
                                <li><a href="#"><i class="fa fa-map-marker"></i>23 Aro Lane, NY, USA</a></li>
                                <li><a href="#"><i class="fa fa-mobile-phone"></i>+345-000-111-2222</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat  10.00 - 19.00</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.contact-to -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
    <!-- /.header-top -->

    <!-- Main Menu Area Begin -->
    <div class="container">
        <div class="main-menu-deputy">
            <!-- Navbar visibility controls (<800px) -->
            <div class="menu-when-collapse"></div>
            <div class="menu-collapse-after-effect"></div>
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                </a>
            </div><!-- /.logo -->
        </div><!-- /.main-menu-deputy -->
        <div class="main-menu">
            <div class="close-nav"></div> <!-- Close the menu for mobile -->
            <ul class="main-nav">
                <li class="active"><a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contacts</a></li>
                <li><a href="{{ route('farmhouse_lists') }}">FarmHouse Lists</a></li>
                <li><a href="{{ route('agents') }}">Agents</a></li>
                <li><a href="{{ route('login') }}">Sign In</a></li>
                <li><a href="{{ route('register') }}">Sign Up</a></li>
            </ul><!-- /.main-nav -->

            <!--  Header Top visibility controls (=<991px) -->
            <div class="header-top visible-xs visible-sm">
                <div class="visible-xs visible-sm">
                    <div class="social-to">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div> <!-- /.social-to -->
                </div> <!-- /.col- -->
                <div class="visible-xs visible-sm">
                    <div class="contact-to">
                        <div class="contact-text">
                            <ul>
                                <li><a href="#"><i class="fa fa-map-marker"></i>23 Aro Lane, NY, USA</a></li>
                                <li><a href="#"><i class="fa fa-mobile-phone"></i>+345-000-111-2222</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat  10.00 - 19.00</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.contact-to -->
                </div> <!-- /.col- -->
            </div> <!-- /.header-top -->
        </div><!-- /.main-menu -->
    </div><!-- /.container -->
    <!-- Main Menu Area End -->
</header><!-- /.header -->
