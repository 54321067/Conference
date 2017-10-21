<!Doctype html>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
 
        <!-- Cascade Style Sheets -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 
        <!-- JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js" type="text/javascript"></script>
    </head>
    <body>
        <section id="fixed-navbar" class="mobile-hide current">
            <div class="ui borderless main menu large registered icon">
                <div class="ui container middle aligned">
                    <img src="/images/a.png" style="width: 100px;height: 100px">
                    <a class="item" style="padding:0" height="50" style="width:auto;">
                    S I G N U P 
                    </a>
                    <div class="right menu">
                        <a href="#pricing" class="item">ABOUT US</a>
                        <a href="#contact" class="item">CONTACT</a>
                        <div class="ui icon buttons">
                            <button class="ui button basic huge"><i class="facebook icon"></i></button>
                            <button class="ui button basic huge"><i class="twitter icon"></i></button>
                            <button class="ui button basic huge"><i class="youtube icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
 
        <div class="ui grid centered" style="margin: 3em 0;">
            <div class="eight wide column">
            @if(Auth::check())
                <a href="{{ route('users.logout') }}" class="ui button">Logout</a>
            @else
                <form action="{{ route('users.setLogin') }}" method="post" class="ui form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            @endif
 
                @yield('content')
            </div>
        </div>
    </body>
</html>