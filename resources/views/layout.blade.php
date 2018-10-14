<!DOCTYPE html>

<html>
    <head>
        <title> @yield('title','My Web')
        </title>
    </head>
    <body>

        <div class="container">

            @yield('content')

        </div>

        <ul>
            <li><a href="/">Home</a></li>

            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </body>

</html>