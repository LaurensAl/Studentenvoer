<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="font-family: 'Pacifico', cursive;">Studentenvoer Laurens Albers</a>
        </div>

        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="/"><span class="glyphicon glyphicon-home">&nbsp</span>Home</a></li>

                <li><a href="/about"><span class="glyphicon glyphicon-user">&nbsp</span>About</a></li>
                <li><a href="/contact"><span class="glyphicon glyphicon-info-sign">&nbsp</span>Contact</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in">&nbsp</span>Login</a>
                    </li>

                @else
                    <li><a href="{{ url('/addblog') }}"><span class="glyphicon glyphicon-pencil">&nbsp</span>Add Recipes</a>
                    </li>
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-log-out">&nbsp</span>Register</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           style="position:relative; padding-left:50px">
                            <img src="/avatar/{{ Auth::user()->foto }}"
                                 style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span
                                            class="glyphicon glyphicon-log-out">&nbsp</span>Logout</a></li>


                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
