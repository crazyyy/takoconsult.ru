<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- css + javascript -->
    <?php wp_head(); ?>
    <script id="facebook-jssdk" src="<?php echo get_template_directory_uri(); ?>/js/all.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easyslider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js.js"></script>

   
    <link rel="icon" href="favicon.ico" type="image/x-icon">


    <script>
        !window.jQuery && document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             *   Examples - various
             */

            $("#various1").fancybox({
                'titlePosition': 'inside',
                'transitionIn': 'none',
                'transitionOut': 'none'
            });

            $("#various2").fancybox();

            $("#various3").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe'
            });

            $("#various4").fancybox({
                'padding': 0,
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe',
                'centerOnScroll': 'true',
                'hideOnOverlayClick': 'true',
                'height': 170,
                'width': 495
            });
            $("#various5").fancybox({
                'padding': 0,
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none'
            });
        });
    </script>
</head>
<body <?php body_class(); ?> oncopy="return false" hola-ext-player="1">
    <script language="JavaScript">
        <!--
        var message = "";
         ///////////////////////////////////
        function clickIE() {
            if (document.all) {
                (message);
                return false;
            }
        }

        function clickNS(e) {
            if (document.layers || (document.getElementById && !document.all)) {
                if (e.which == 2 || e.which == 3) {
                    (message);
                    return false;
                }
            }
        }
        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = clickNS;
        } else {
            document.onmouseup = clickNS;
            document.oncontextmenu = clickIE;
        }
        document.oncontextmenu = new Function("return false")
         // -->
    </script>

    <script language="Javascript">
        document.ondragstart = test;
        document.onselectstart = test;
        document.ontextmenu = test;

        function test() {
            return false
        }
    </script>

    <script language="JavaScript1.2">
        function disableselect(e) {
            return false
        }

        function reEnable() {
            return true
        }
         //if IE4+
        document.onselectstart = new Function("return false")
         //if NS6
         if (window.sidebar) {
            document.onmousedown = disableselect
            document.onclick = reEnable
        }
    </script>
 
    <table cellspacing="0" cellpadding="0" border="0" id="main">
        <tbody>
            <tr>
                <td class="cont">
                    <div id="header">
                        <a href="./index_files/index.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="219" height="81" alt="Консалтинговая группа ТАКО" id="logo">
                        </a>
                        <div id="right_head">
                            <span id="title"><p>Законодательство должно быть голосом разума, а&nbsp;судья&nbsp;– голосом закона.</p>Пифагор</span>  <span class="tel">+7 499 579-8008<br>+7 499 579-8007</span>
                            <ul id="menu">
                                <li><a href="http://www.takoconsult.ru/about/" title="О нас">О нас</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/services/" title="Услуги">Услуги</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/staff/" title="Команда">Команда</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/partners/" title="Отзывы">Отзывы</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/news/" title="Новости компании">Новости компании</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/novoe-zakonodatelstvo/" title="Лента новостей">Лента новостей</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/seminars/" title="Семинары">Семинары</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/dlja-smi/" title="Для СМИ">Для СМИ</a>
                                </li>
                                <li><a href="http://www.takoconsult.ru/contacts/" title="Контакты">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="content">
                        <div id="slider" style="width: 990px; height: 389px; overflow: hidden;">
                            <ul class="slides" style="width: 4950px; margin-left: -1980px;">
                                <li style="margin-left: -990px; float: left;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/information_items_450.jpg" class="news_img" width="990" height="389" alt="Слайдер 5" align="left">
                                </li>
                                <li style="float: left;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/information_items_422.jpg" class="news_img" width="990" height="389" alt="Слайдер 1" align="left">
                                </li>
                                <li style="float: left;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/information_items_423.jpg" class="news_img" width="990" height="389" alt="Слайдер 2" align="left">
                                </li>
                                <li style="float: left;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/information_items_428.jpg" class="news_img" width="990" height="389" alt="Слайдер 4" align="left">
                                </li>
                                <li style="float: left;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/information_items_450.jpg" class="news_img" width="990" height="389" alt="Слайдер 5" align="left">
                                </li>
                                <li style="float: left;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/information_items_422.jpg" class="news_img" width="990" height="389" alt="Слайдер 1" align="left">
                                </li>
                            </ul>
                        </div>
                        <ol id="controls">
                            <li id="controls1" class=""><a rel="0" href="javascript:void(0);">1</a>
                            </li>
                            <li id="controls2" class=""><a rel="1" href="javascript:void(0);">2</a>
                            </li>
                            <li id="controls3" class="current"><a rel="2" href="javascript:void(0);">3</a>
                            </li>
                            <li id="controls4"><a rel="3" href="javascript:void(0);">4</a>
                            </li>
                        </ol> <span id="prevBtn"><a href="javascript:void(0);">Previous</a></span>  <span id="nextBtn"><a href="javascript:void(0);">Next</a></span>


                        <ul id="menumid">
                            <li><a href="http://www.takoconsult.ru/services/legal/">Юридический консалтинг</a>
                            </li>
                            <li><a href="http://www.takoconsult.ru/services/audit/">Аудит</a>
                            </li>
                            <li><a href="http://www.takoconsult.ru/services/tax-advice/">Налоговый консалтинг</a>
                            </li>
                            <li><a href="http://www.takoconsult.ru/services/accounting-consulting-outsourcing/" class="double">Бухгалтерский консалтинг и аутсорсинг</a>
                            </li>
                            <li><a href="http://www.takoconsult.ru/services/hr-office-work/">Кадровый консалтинг</a>
                            </li>
                            <li><a href="http://www.takoconsult.ru/services/registration/">Корпоративные процедуры</a>
                            </li>
                        </ul>

                        <!--noindex-->
                        <script src="<?php echo get_template_directory_uri(); ?>/js/scriptgal.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            var settings = {
                                containerResizeSpeed: 350
                            };
                            $(function () {
                                var settings = {
                                    containerResizeSpeed: 350
                                };
                                $("#carousel a").lightBox(settings);
                            });
                        </script>
                        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.admitad.carousel.js"></script>
                        <script>
                            $(document).ready(function () {
                                $("#carousel").advCompaignCarousel({
                                    speed: 30,
                                    rewSpeed: 180,
                                    hPics: [

            "/img/logo/_rzd.png",
            "/img/logo/_sis.png",
            "/img/logo/_rostrans.png",
            "/img/logo/_acetarget.png",
            "/img/logo/_transresurs.png",
            "/img/logo/_lokoil.png",
            "/img/logo/_pegas.png",
            "/img/logo/_eld.png",
            "/img/logo/_vipproject.png",
            "/img/logo/_jasmin.png",
            "/img/logo/_altum.png",
            "/img/logo/_promkluch.png",
            "/img/logo/_domani.png",
            "/img/logo/_invertor.png",
            "/img/logo/_svat.png",
            "/img/logo/_efpar.png",
            "/img/logo/_lushdrug.png",
            "/img/logo/_riston.png",
            "/img/logo/_trian.png",
            "/img/logo/_trans-m.png",
            "/img/logo/_sy155.png",
            "/img/logo/_zlatkombank.png"
 ]
                                });
                            });
                        </script>

                        <div class="carousel_auter" onmousemove="$(\&#39;#carousel a\&#39;).lightBox(settings);">
                            <h2>Наши партнеры:</h2>
                            <div id="carousel" style="visibility: visible;">
                                <div class="but_left"></div>
                                <div class="but_right"></div>
                                <ul style="width: 8370px; left: -2790px;">
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/rzd.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/rzd.png" width="143" height="59" alt="Компания «РЖД Сервис»" title="Компания «РЖД Сервис»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/active-cis.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/sis.png" width="143" height="59" alt="Группа компаний «Active CIS»" title="Группа компаний «Active CIS»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/rtmt.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/rostrans.png" width="66" height="59" alt="Компания «РОСТРАНСМАШ Трейд»" title="Компания «РОСТРАНСМАШ Трейд»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/starget.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/acetarget.png" width="100" height="60" alt="Рекламное агентство «Ace Target Russia»" title="Рекламное агентство «Ace Target Russia»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/transresurs.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/transresurs.png" width="60" height="60" alt="Компания «ТРАНСРЕСУРС»" title="Компания «ТРАНСРЕСУРС»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/lucoil.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/lokoil.png" width="44" height="60" alt="Нефтяная компания «Лукойл»" title="Нефтяная компания «Лукойл»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/pegas.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/pegas.png" width="88" height="60" alt="Компания «Пегас-Он Лайн»" title="Компания «Пегас-Он Лайн»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/eldorado.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/eld.png" width="88" height="60" alt="Компания «ЭЛЬДОРАДО»" title="Компания «ЭЛЬДОРАДО»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/vipproject.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/vipproject.png" width="127" height="60" alt="Компания «ВИПроджект»" title="Компания «ВИПроджект»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/jasminbig.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/jasmin.png" width="90" height="60" alt="Jasmin Production" title="Jasmin Production">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/altym.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/altum.png" width="77" height="60" alt="Компания «АЛЬТУМ»" title="Компания «АЛЬТУМ»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/promkluch.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/promkluch.png" width="61" height="60" alt="Компания «ПромКлюч»" title="Компания «ПромКлюч»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/domany.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/domani.png" width="159" height="60" alt="Компания «СПЕЙСГАРТ»" title="Компания «СПЕЙСГАРТ»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/invertor.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/invertor.png" width="50" height="60" alt="Компания «НПП ЛМ Инвертор»" title="Компания «НПП ЛМ Инвертор»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/svatoslavm.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/svat.png" width="139" height="60" alt="Компания «Святославъ М»" title="Компания «Святославъ М»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/effpar.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/efpar.png" width="150" height="60" alt="Компания «Эффективное партнерство»" title="Компания «Эффективное партнерство»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/lushiitur.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/lushdrug.png" width="77" height="60" alt="Туристическая компания «Ваш Лучший Тур»" title="Туристическая компания «Ваш Лучший Тур»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/ristonbig.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/riston.png" width="60" height="60" alt="Чайная компания «Riston»" title="Чайная компания «Riston»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/trian.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/trian1.png" width="99" height="60" alt="Компания «ТриАн»" title="Компания «ТриАн»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/trans-m.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/trans-m.png" width="92" height="60" alt="Компания «Транс-М»" title="Компания «Транс-М»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/sy155.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/sy155.png" width="60" height="60" alt="Группа компании «Су-155»" title="Группа компании «Су-155»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/zlatkombank.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/zlatkombank.png" width="91" height="60" alt="Коммерческий банк «Златкомбанк»" title="Коммерческий банк «Златкомбанк»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/rzd.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/rzd.png" width="143" height="59" alt="Компания «РЖД Сервис»" title="Компания «РЖД Сервис»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/active-cis.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/sis.png" width="143" height="59" alt="Группа компаний «Active CIS»" title="Группа компаний «Active CIS»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/rtmt.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/rostrans.png" width="66" height="59" alt="Компания «РОСТРАНСМАШ Трейд»" title="Компания «РОСТРАНСМАШ Трейд»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/starget.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/acetarget.png" width="100" height="60" alt="Рекламное агентство «Ace Target Russia»" title="Рекламное агентство «Ace Target Russia»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/transresurs.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/transresurs.png" width="60" height="60" alt="Компания «ТРАНСРЕСУРС»" title="Компания «ТРАНСРЕСУРС»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/lucoil.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/lokoil.png" width="44" height="60" alt="Нефтяная компания «Лукойл»" title="Нефтяная компания «Лукойл»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/pegas.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/pegas.png" width="88" height="60" alt="Компания «Пегас-Он Лайн»" title="Компания «Пегас-Он Лайн»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/eldorado.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/eld.png" width="88" height="60" alt="Компания «ЭЛЬДОРАДО»" title="Компания «ЭЛЬДОРАДО»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/vipproject.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/vipproject.png" width="127" height="60" alt="Компания «ВИПроджект»" title="Компания «ВИПроджект»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/jasminbig.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/jasmin.png" width="90" height="60" alt="Jasmin Production" title="Jasmin Production">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/altym.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/altum.png" width="77" height="60" alt="Компания «АЛЬТУМ»" title="Компания «АЛЬТУМ»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/promkluch.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/promkluch.png" width="61" height="60" alt="Компания «ПромКлюч»" title="Компания «ПромКлюч»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/domany.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/domani.png" width="159" height="60" alt="Компания «СПЕЙСГАРТ»" title="Компания «СПЕЙСГАРТ»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/invertor.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/invertor.png" width="50" height="60" alt="Компания «НПП ЛМ Инвертор»" title="Компания «НПП ЛМ Инвертор»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/svatoslavm.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/svat.png" width="139" height="60" alt="Компания «Святославъ М»" title="Компания «Святославъ М»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/effpar.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/efpar.png" width="150" height="60" alt="Компания «Эффективное партнерство»" title="Компания «Эффективное партнерство»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/lushiitur.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/lushdrug.png" width="77" height="60" alt="Туристическая компания «Ваш Лучший Тур»" title="Туристическая компания «Ваш Лучший Тур»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/ristonbig.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/riston.png" width="60" height="60" alt="Чайная компания «Riston»" title="Чайная компания «Riston»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/trian.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/trian1.png" width="99" height="60" alt="Компания «ТриАн»" title="Компания «ТриАн»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/trans-m.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/trans-m.png" width="92" height="60" alt="Компания «Транс-М»" title="Компания «Транс-М»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/sy155.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/sy155.png" width="60" height="60" alt="Группа компании «Су-155»" title="Группа компании «Су-155»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/zlatkombank.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/zlatkombank.png" width="91" height="60" alt="Коммерческий банк «Златкомбанк»" title="Коммерческий банк «Златкомбанк»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/rzd.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/rzd.png" width="143" height="59" alt="Компания «РЖД Сервис»" title="Компания «РЖД Сервис»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/active-cis.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/sis.png" width="143" height="59" alt="Группа компаний «Active CIS»" title="Группа компаний «Active CIS»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/rtmt.jpg" style="margin-top: 0.5px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/rostrans.png" width="66" height="59" alt="Компания «РОСТРАНСМАШ Трейд»" title="Компания «РОСТРАНСМАШ Трейд»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/starget.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/acetarget.png" width="100" height="60" alt="Рекламное агентство «Ace Target Russia»" title="Рекламное агентство «Ace Target Russia»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/transresurs.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/transresurs.png" width="60" height="60" alt="Компания «ТРАНСРЕСУРС»" title="Компания «ТРАНСРЕСУРС»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/lucoil.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/lokoil.png" width="44" height="60" alt="Нефтяная компания «Лукойл»" title="Нефтяная компания «Лукойл»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/pegas.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/pegas.png" width="88" height="60" alt="Компания «Пегас-Он Лайн»" title="Компания «Пегас-Он Лайн»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/eldorado.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/eld.png" width="88" height="60" alt="Компания «ЭЛЬДОРАДО»" title="Компания «ЭЛЬДОРАДО»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/vipproject.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/vipproject.png" width="127" height="60" alt="Компания «ВИПроджект»" title="Компания «ВИПроджект»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/jasminbig.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/jasmin.png" width="90" height="60" alt="Jasmin Production" title="Jasmin Production">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/altym.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/altum.png" width="77" height="60" alt="Компания «АЛЬТУМ»" title="Компания «АЛЬТУМ»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/promkluch.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/promkluch.png" width="61" height="60" alt="Компания «ПромКлюч»" title="Компания «ПромКлюч»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/domany.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/domani.png" width="159" height="60" alt="Компания «СПЕЙСГАРТ»" title="Компания «СПЕЙСГАРТ»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/invertor.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/invertor.png" width="50" height="60" alt="Компания «НПП ЛМ Инвертор»" title="Компания «НПП ЛМ Инвертор»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/svatoslavm.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/svat.png" width="139" height="60" alt="Компания «Святославъ М»" title="Компания «Святославъ М»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/effpar.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/efpar.png" width="150" height="60" alt="Компания «Эффективное партнерство»" title="Компания «Эффективное партнерство»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/lushiitur.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/lushdrug.png" width="77" height="60" alt="Туристическая компания «Ваш Лучший Тур»" title="Туристическая компания «Ваш Лучший Тур»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/ristonbig.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/riston.png" width="60" height="60" alt="Чайная компания «Riston»" title="Чайная компания «Riston»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/trian.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/trian1.png" width="99" height="60" alt="Компания «ТриАн»" title="Компания «ТриАн»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/trans-m.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/trans-m.png" width="92" height="60" alt="Компания «Транс-М»" title="Компания «Транс-М»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/sy155.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/sy155.png" width="60" height="60" alt="Группа компании «Су-155»" title="Группа компании «Су-155»">
                                        </a>
                                    </li>
                                    <li style="overflow: hidden; float: left; display: inline;">
                                        <a rel="nofollow" href="http://www.takoconsult.ru/img/recom_letters/zlatkombank.jpg" style="margin-top: 0px; margin-left: 33px; overflow: hidden; float: left;">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/zlatkombank.png" width="91" height="60" alt="Коммерческий банк «Златкомбанк»" title="Коммерческий банк «Златкомбанк»">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="but_left"></div>
                            <div class="but_right"></div>
                        </div>
                        <!--/noindex-->

                        <div id="text">
                            <p style="margin: 10px 0 10px;">Консалтинговая группа<span style="margin-right: 0.3em"> </span>  <span style="margin-left: -0.3em">«</span>ТАКО» – это&nbsp;ведущая московская консалтинговая компания, занимающая лидирующее место по&nbsp;уровню клиентского сервиса.</p>
                            <p style="margin: 10px 0 10px;">Многолетний практический опыт работы на&nbsp;рынке консалтинга, позволяет КГ&nbsp;ТАКО предлагать широкий спектр консалтинговых услуг: <a href="http://www.takoconsult.ru/services/legal/">юридический консалтинг</a>, <a href="http://www.takoconsult.ru/services/tax-advice/">налоговый консалтинг</a>, <a href="http://www.takoconsult.ru/services/legal/arbitration/">арбитраж и&nbsp;судебные споры</a>, <a href="http://www.takoconsult.ru/services/accounting-consulting-outsourcing/">бухгалтерский консалтинг и&nbsp;аутсорсинг</a>, <a href="http://www.takoconsult.ru/services/hr-office-work/">кадровый консалтинг</a>, <a href="http://www.takoconsult.ru/services/audit/">аудит</a>.</p>
                            <p style="margin: 10px 0 10px;">Штат высококвалифицированных специалистов в&nbsp;области налогообложения, права, бухгалтерского учета и&nbsp;аудита предлагает свои опыт и&nbsp;знания для&nbsp;комплексного решения конкретных задач, поставленных клиентами.</p>
                            <p style="margin: 10px 0 10px;">Профессионализм, компетентность, инициативность нашей команды позволяет создавать и&nbsp;поддерживать отношения с&nbsp;клиентами, основанные на&nbsp;принципах взаимного понимания и&nbsp;доверия, а&nbsp;также обеспечивать высокий уровень клиентского сервиса.</p>
                            <p style="margin: 10px 0 10px;">Руководство Консалтинговой группы<span style="margin-right: 0.3em"> </span>  <span style="margin-left: -0.3em">«</span>ТАКО» обеспечивает неукоснительное выполнение взятых на&nbsp;себя договорных обязательств.</p>
                            <p style="margin: 10px 0 10px;">Для того чтобы сделать заказ&nbsp;или получить информацию о&nbsp;стоимости консалтинговых услуг Вы&nbsp;можете:</p>
                            <ul style="margin: 0 10px 0;">
                                <li>позвонить по&nbsp;телефону +7<span style="margin-right: 0.3em"> </span>  <span style="margin-left: -0.3em">(499</span>) 579–8008;</li>
                                <!--noindex-->
                                <li>отправить вопрос на&nbsp;e-mail:
                                    <script type="text/javascript">
                                        <!--
                                        document.write('<a  href="mailto:' + 'takoconsult' + '@' + 'takoconsult' + '.' + 'ru' + '" rel="nofollow">' + 'takoconsult@takoconsult.ru' + '</a>');
                                         -->
                                    </script><a href="mailto:takoconsult@takoconsult.ru" rel="nofollow">takoconsult@takoconsult.ru</a>;</li>
                                <li>заполнить <a href="http://www.takoconsult.ru/services/order-calculation/" rel="nofollow" id="various3">заявку</a>.</li>
                                <!--/noindex-->
                            </ul>
                            <p style="margin: 10px 0 10px;">Мы свяжемся с&nbsp;Вами максимально быстро!</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <div id="footer">
                        <div id="foot_l">© 1997–2015 Консалтинговая группа «ТАКО»
                            <br>
                            <br><span style="font-size: 12px;"> Ведущая консалтинговая компания в Москве, занимающая лидирующее место в сфере консалтинговых услуг и уровню клиентского сервиса.</span>
                        </div>
                        <div id="foot_c">
                            <div id="menu_bt"><a href="./index_files/index.html" rel="nofollow">Главная</a> / <a href="http://www.takoconsult.ru/about/" rel="nofollow" title="О компании">О компании</a> / <a href="http://www.takoconsult.ru/services/" title="Услуги">Услуги</a> / <a href="http://www.takoconsult.ru/articles/" title="Статьи">Статьи</a> / <a href="http://www.takoconsult.ru/news/" rel="nofollow" title="Новости">Новости</a>
                            </div>
                            <div id="sc">
                                <a id="various4" href="http://www.takoconsult.ru/reiting/" rel="nofollow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pravo_300.png" width="87" height="60" alt="" align="absmiddle">
                                </a>
                                <a href="http://www.takoconsult.ru/contacts/" rel="nofollow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" width="60" height="60" alt="" align="absmiddle"><span>посмотреть схему проезда</span>
                                </a>
                            </div>
                        </div>
                        <div id="foot_r">
                            <!--noindex-->
                            <span class="flash_icons">
<object type="application/x-shockwave-flash" data="http://www.takoconsult.ru/flash/facebook.swf" width="25" height="25">
<param name="movie" value="http://www.takoconsult.ru/flash/facebook.swf">
</object> 

<object type="application/x-shockwave-flash" data="http://www.takoconsult.ru/flash/twitter.swf" width="25" height="25">
<param name="movie" value="http://www.takoconsult.ru/flash/twitter.swf">
</object> 

<object type="application/x-shockwave-flash" data="http://www.takoconsult.ru/flash/vkontakte.swf" width="25" height="25">
<param name="movie" value="http://www.takoconsult.ru/flash/vkontakte.swf">
</object> 
</span>
                            <!--/noindex-->
                            <span class="tel">+7 499 579-8008 +7 499 579-8007</span>
                            <a href="http://www.takoconsult.ru/contacts/" rel="nofollow">Москва, Малый Кисельный переулок<br> дом 1/9, офис «ТАКО»</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div id="fancybox-tmp"></div>
    <div id="fancybox-loading">
        <div></div>
    </div>
    <div id="fancybox-overlay"></div>
    <div id="fancybox-wrap">
        <div id="fancybox-outer">
            <div class="fancybox-bg" id="fancybox-bg-n"></div>
            <div class="fancybox-bg" id="fancybox-bg-ne"></div>
            <div class="fancybox-bg" id="fancybox-bg-e"></div>
            <div class="fancybox-bg" id="fancybox-bg-se"></div>
            <div class="fancybox-bg" id="fancybox-bg-s"></div>
            <div class="fancybox-bg" id="fancybox-bg-sw"></div>
            <div class="fancybox-bg" id="fancybox-bg-w"></div>
            <div class="fancybox-bg" id="fancybox-bg-nw"></div>
            <div id="fancybox-content"></div>
            <a id="fancybox-close"></a>
            <div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a>
        </div>
    </div>
    <spots-wrapper></spots-wrapper>
</body>

</html>