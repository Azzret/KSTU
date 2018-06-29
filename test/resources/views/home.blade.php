@extends('layouts.app')

@section('content')




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">





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
@endsection
