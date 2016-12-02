<html>
2 <head>
    3 <title> @yield('title') </title>
    4 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6\
5 /css/bootstrap.min.css">
    6 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6\
7 /css/bootstrap-theme.min.css">
    8
    9 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    10 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.mi\
11 n.js"></script>
    12 </head>
13 <body>
14
15 @include('shared.navbar')
16
17 @yield('content')
18
19 </body>
20 </html>
