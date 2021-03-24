<header class="ht-header full-width-hd">
    <div class="row">
        <nav id="mainNav" class="navbar navbar-default navbar-custom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header logo">
                <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <a href="index.html"><img class="logo" src="{{asset('img/white_joker.png')}}" alt="" width="119" height="58"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse flex-parent" >
                <ul class="nav navbar-nav flex-child-menu menu-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class=" first">
                        <a class="btn btn-default  lv1" >
                            Home
                        </a>

                    </li>
                    <li class=" first">
                        <a class="btn btn-default  lv1" href="{{route('MovieList')}}" >
                            movies
                        </a>

                    </li>
                    <li class=" first">
                        <a class="btn btn-default  lv1" href="celebritygrid01.html" >
                            celebrities
                        </a>


                    </li>

                    <li class=" first">
                        <a href="userprofile.html" class="btn btn-default  lv1" >
                            community </i>
                        </a>

                    </li>
                </ul>
                <ul class="nav navbar-nav flex-child-menu menu-right">

                    <li class="btn "><a href="{{route('add_movie')}}">Add New Movie</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- search form -->
    </div>

</header>