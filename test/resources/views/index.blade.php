@extends('layouts.app')

@section('content')

    <link href ="http://www.fas.nus.edu.sg/templates/fass_nus/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">


<style>
    .before, :after{
        webkit-box-sizing: border box;
        moz-box-sizing: border box;
        box-sizing: border-box;
    }
</style>
    <section id="content" class=" no-left block com_content">
        <div class=" container">

            <div class="row">

                 <aside id="content-left" class="col-md-3 colsm-12 hidden"></aside>
            <div id="content_main" class="col-md-9">
                <div id="system-message-continer">
                </div>
                <div id="yt_component">
                    <article class="item-page">

                        <header class=article-header>
                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Программная инженерия
                                    </font>
                                </font>
                                <span class="title-color"></span>
                            </h2>
                            @if (Auth::user())
                            <div class="row justify-content-xl-center">
                                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                <a href="{{ route('applicant.create') }}" class="btn btn-success">Заполнить заявление</a>
                            </div>
                                @endif
                        </header>
                        <div class="border">
                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Администрация
                                    </font>
                                </font>
                            </h2>
                            <blockquote>
                                <p>
                                    <strong>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Факультет
                                            </font>
                                        </font>
                                        <br>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Факультет информационных технологий
                                        </font>
                                    </font>
                                </p>
                                <p>
                                    <strong>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit">
                                                Кафедра
                                            </font>
                                        </font>
                                        <br>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            ПОКС
                                        </font>
                                    </font>
                                </p>
                            </blockquote>
                        </div>
                        <div class="border"><hr>
                            <h2>Прграммы</h2>
                            <blockquote>
                                <h3>Студент</h3>
                            </blockquote>
                            <ul>
                                <li>Бакалавр</li>
                            </ul>
                            <blockquote>
                                <h3>Выпускник</h3>
                            </blockquote>
                            <ul>
                                <li>Магистр</li>

                            </ul>
                        </div>
                        <div class="border"><hr>
                            <h2>О чем это</h2>
                            <p>Учебная программа состоит в изучении дисциплинированного, измеримого подхода к разработке, фукнционированию и сопровождению программного обеспечения, а также исследованию этих подходов</p>
                            <hr>
                            <h3>Уникальные программы</h3>
                            <p>....................................</p>
                        </div>
                        <div class="border">
                            <h2>Карьерный рост</h2>
                            <p>....................................</p>
                        </div>

                    </article>
                </div>
            </div>
            </div>
        </div>
        <section id="yt_spotlight8" class="block">
            <div class="container">

                    <div id="bottom4" class="col-md-3 col-sm-6">

                        <div class="module  get-in-touch ">
                            <h3 class="modtitle">Факультет информационных технологий</h3>
                            <div class="razd-info">



                                <p style="text-align: center; color: gray;">720044, г. Бишкек, пр. Чынгыза Айтматова (быв. пр. Мира) 66, КГТУ, к.1/324</p>
                                <p style="text-align: center;color: gray;">Тел. (0312) 54-51-77 (приемная комиссия)</p>
                                <p style="text-align: center;color: gray;">e-mail: tagaeva_72@mail.ru</p>
                                <p style="text-align: center;color: gray;">&nbsp;(0312) 54-51-51 (для иностранных студентов),</p>
                                <p style="text-align: center;color: gray;">e-mail: intoffice.kstu@gmail.com</p>
                                <p style="text-align: center;color: gray;">Факс: +966 (312) 54-51-62</p>
                                <p style="text-align: center;color: gray;">rector@kstu.kg</p>


                            </div>
                        </div>

                        <div class="module  social-icon ">
                            <div class="modcontent clearfix">

                                <div class="list-icon" style="text-align: left;"><div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb rss default  cicle color" title="" href="http://blog.nus.edu.sg/fassnews/" data-original-title="FASSNews"><i class="fa fa-rss"></i></a></div> <div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb facebook default  cicle color" title="" href="https://www.facebook.com/nusfass" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></div> <div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb twitter default  cicle color" title="" href="https://twitter.com/fassnews" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div> <div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb linkedin default  cicle color" title="" href="https://www.linkedin.com/groups/1917151" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></div></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        </section>

    </section>





@endsection