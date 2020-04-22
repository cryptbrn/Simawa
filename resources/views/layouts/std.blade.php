<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <style>
            :root {
                        --body_gradient_left:#00ac25;
                        --body_gradient_right: #00ac86;
            }
                /* Style the sidebar - fixed full height */
            .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-image: linear-gradient(to right, var(--body_gradient_left), var(--body_gradient_right));
            overflow-x: hidden;
            padding-top: 16px;
            }

            /* Style sidebar links */
            .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #000000;
            display: block;
            }

            /* Style links on mouse-over */
            .sidebar a:hover {
            color: #f1f1f1;
            }

            /* Style the main content */
            .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            padding: 0px 10px;
            }

            /* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
            @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
            }

            img {
                width: 90px;
                height: 90px;
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
