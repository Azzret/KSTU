<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <link href ="https://bootswatch.com/4/cerulean/bootstrap.css" rel="stylesheet" type="text/css">
        <link href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial;
            }

            /* The grid: Three equal columns that floats next to each other */
            .column {
                float: left;
                width: 33.33%;
                padding: 50px;
                text-align: center;
                font-size: 25px;
                cursor: pointer;
                color: white;
            }

            .containerTab {
                padding: 20px;
                color: white;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Closable button inside the container tab */
            .closebtn {
                float: right;
                color: white;
                font-size: 35px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">KSTU </a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="flex-center form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                    @endif
                </ul>
            </div>
        </nav>
    </div>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="align-content: center">
                <img src="image\first.jpg" alt="">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item flex-center">
                <img src="image\second.jpg" alt="" style="align-content: center">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


        </div>
    <div style="text-align:center">
        <h2>Факультеты</h2>
        <p>Click on the boxes below:</p>
    </div>

    <!-- Three columns -->
    <div class="row">
        <div class="column" onclick="openTab('b1');" style="background:#474953;">
            Факультет Информационных Технологий
        </div>
        <div class="column" onclick="openTab('b2');" style="background:#474953;">
            Технологический Факультет
        </div>
        <div class="column" onclick="openTab('b3');" style="background:#474953;">
            Энергетический Факультет
        </div>

    </div>

    <!-- Full-width columns: (hidden by default) -->
    <div id="b1" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <p>Программная инженирия</p>
    </div>
    <div id="b2" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <h2>Box 2</h2>
        <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
    </div>
    <div id="b3" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <h2>Box 3</h2>
        <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
    </div>
        <div class="row">
        <div class="column" onclick="openTab('b4');" style="background:#474953;">
            Факультет
        </div>
        <div class="column" onclick="openTab('b5');" style="background:#474953;">
            Технологиче
        </div>
        <div class="column" onclick="openTab('b6');" style="background:#474953;">
            Энергет
        </div>

    </div>

    <div id="b4" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <br>
        <a href="/software" style="color: white;" target="_blank">Программная инженерия</a>

    </div>

    <div id="b5" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <h2>Box 5</h2>
        <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>
    </div>

    <div id="b6" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <h2>Box 6</h2>
        <p>Lorem ipsum dolor sit amet, te quo doctus abhorreant, et pri deleniti intellegat, te sanctus inermis ullamcorper nam. Ius error diceret deseruisse ad</p>




    </div>

    <div class="flex-center position-ref full-height">

        <div class="col-4">

        </div>
    </div>

    <script>
        function openTab(tabName) {
            var i, x;
            x = document.getElementsByClassName("containerTab");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }
    </script>

    </body>
</html>
