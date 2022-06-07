<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Бактрийский верблюд</title>
    <style>
        <?php
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/fonts-first.css");
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/common-first.css");
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/index-first.css");
        ?>
    </style>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta content="/browserconfig.xml" name="msapplication-config">

    <!-- open-graph -->
    <meta content="ru" property="og:locale">
    <meta content="website" property="og:type">
    <meta content="" property="og:title">
    <meta content='' property="og:description">
    <meta content="/images/og-image.jpg" property="og:image">
    <meta content="summary" name="twitter:card">
    <meta content="/images/og-image.jpg" name="twitter:image">
    <meta content="Togas Woolux" name="twitter:title">
    <meta content='' name="twitter:description">
    <!-- /open-graph -->

</head>
<?php
define('LAZY_IMAGE', "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=");
?>
<body>
<div class="header-line__wrp">
    <div class="header-line">
        <img src="/images/logo.svg" alt="Togas Woolux" title="Home"/>
    </div>
</div>
<div class="index-cover__wrp">
    <div class="index-cover-bg">
        <!--<picture class="index-cover-bg__picture">
            <source media="(max-width: 576px)" srcset="/images/index-cover-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="/images/index-cover-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="/images/index-cover-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="/images/index-cover-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="/images/index-cover.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="/images/index-cover.jpg" type="image/jpeg">
            <img src="/images/index-cover.jpg" alt="">
        </picture>-->
        <picture class="index-cover-bg__picture">
            <source media="(max-width: 576px)" srcset="/images/video-cover-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="/images/video-cover-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="/images/video-cover-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="/images/video-cover-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="/images/video-cover.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="/images/video-cover.jpg" type="image/jpeg">
            <img src="/images/video-cover.jpg" alt="">
        </picture>
        <div class="index-cover-bg__video">
            <iframe src="https://www.youtube.com/embed/lEomgk8sz-4?autoplay=1&loop=1&enablejsapi=1&controls=0&modestbranding=1&rel=0&showinfo=0&color=white&iv_load_policy=3&theme=light&wmode=transparent&origin=http://woolux.mario-it.ru&playlist=lEomgk8sz-4&mute=1"
                    frameborder="0"
                    allow="autoplay"
                    id="iframebg">

            </iframe>
        </div>
    </div>
    <div class="index-cover__container video">
        <div class="container">
            <div class="index-cover__logo">
                <img src="/images/logo-woolux.svg" alt="Togas Woolux" title="Togas Woolux"/>
            </div>
            <div class="index-cover__links">
                <a href="#mastery">Мастерство</a>
                <span>|</span>
                <a href="#innovation">Инновации</a>
                <span>|</span>
                <a href="#etic">Этика</a>
            </div>
            <div class="index-cover__text">
                <p>
                    Шерсть – уникальный природный материал, тысячелетиями формировавшийся для защиты обитателей нашей планеты от ее суровых условий. 100%
                    натуральные,
                    устойчивые к множеству воздействий, прочные и необычайно мягкие волокна сегодня являются основной множества великолепных продуктов Togas.
                </p>
                <p>
                    Десятилетиями подбирая и обрабатывая лучшие сорта шерсти по всему миру мы накапливали знания, которые сегодня зафиксированы в стандарте
                    качества
                    WOOLUX, разработанном в Афинском R&D центре QC Worldwide от Togas Innovations.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="index-spl wtop">
    <span></span>
</div>
<div class="index-cover-mobile-text">
    <div class="container">
        <div class="index-cover-mobile-text__body">
            <p>
                Шерсть – уникальный природный материал, тысячелетиями формировавшийся для защиты обитателей нашей планеты от ее суровых условий. 100%
                натуральные,
                устойчивые к множеству воздействий, прочные и необычайно мягкие волокна сегодня являются основной множества великолепных продуктов Togas.
            </p>
            <p>
                Десятилетиями подбирая и обрабатывая лучшие сорта шерсти по всему миру мы накапливали знания, которые сегодня зафиксированы в стандарте качества
                WOOLUX, разработанном в Афинском R&D центре QC Worldwide от Togas Innovations.
            </p>
        </div>
    </div>
    <div class="index-spl">
        <span></span>
    </div>
</div>
<div class="index-mastery" id="mastery">
    <div class="container">
        <div class="index-mastery__body">
            <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/logo-woolux-small.svg" alt="Togas Woolux" title="Home"/>
            <div class="index-mastery__hdr">МАСТЕРСТВО</div>
            <div class="index-mastery__text">
                Только лучшие мастера своих ремесел способны находить и отбирать редчайшие отборные волокна шерсти по всему миру, и затем превращать их в
                великолепную пряжу, из которой создаются наши непревзойденные изделия.
            </div>
        </div>
    </div>
</div>
<div class="index-spl wbot">
    <span></span>
</div>
<div class="container">
    <picture class="index-fabric__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-fabric-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-fabric-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-fabric-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-fabric-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-fabric.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-fabric.jpg" type="image/jpeg">
        <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/woolux-fabric.jpg" alt="">
    </picture>
    <div class="index-fabric__grid">
        <div class="index-fabric__item">
            <div class="index-fabric__hdr">Поиск <span>сырья</span></div>
            <div class="index-fabric__text">
                Разбросанные по всей восточной части мира, фермы по производству шерсти существенно отличаются качеством своего сырья. Мы уверены, что только
                личный контроль может являться залогом постоянного уровня высочайшего качества. Поэтому опытные скауты Togas неустанно путешествуют в самые
                дальние уголки мира, чтобы находить и сертифицировать партнеров, у которых мы закупаем высококлассную необработанную шерсть.
            </div>
        </div>
        <div class="index-fabric__item">
            <div class="index-fabric__hdr">Отбор <span>волокон</span></div>
            <div class="index-fabric__text">
                Специальные процедуры отбора волокон, которые проводятся при закупке каждой партии шерсти, включают в себя множество визуальных, тактильных,
                прочностных и молекулярных тестов, которые выполняются на местах нашими экспертами. Локальное тестирование подразумевает максимально высокую
                квалификацию наших экспертов, а также дополнительные затраты на тестовое оборудование, однако мы верим, что это единственный способ выбора
                лучших, тончайших волокон шерсти, достойных стандарта WOOLUX.
            </div>
        </div>
        <div class="index-fabric__item">
            <div class="index-fabric__hdr">Контроль <span>качества</span></div>
            <div class="index-fabric__text">
                Весь объем найденного на лучших фермах и скрупулезно отобранного сырья поступает в лаборатории QC Worldwide, расположенные в логистических хабах
                Togas в Китае, ОАЭ, Греции и Турции. Здесь проводятся дополнительные масштабные тесты, чтобы убедиться что все 100% поступающих волокон
                соответствуют установленным стандартам по размерности, цветности, чистоте и составу, и, таким образом, пригодны для дальнейшей обработки.
            </div>
        </div>
    </div>
</div>
<div class="index-spl">
    <span></span>
</div>
<div class="index-mastery" id="innovation">
    <div class="container">
        <div class="index-mastery__body">
            <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/logo-woolux-small.svg" alt="Togas Woolux" title="Home"/>
            <div class="index-mastery__hdr">ИННОВАЦИИ</div>
            <div class="index-mastery__text">
                Являясь 100% натуральным материалом, шерсть сама по себе обладает широким набором генетически встроенных защитных и прочностных свойств. Любое
                вмешательство в структуру этой натуральности может привести к нарушению или разрушению таковых. Стандарт WOOLUX подразумевает особые процедуры
                по очистке сырья, а также дальнейшем крашении шерсти, если крашение необходимо.
            </div>
        </div>
    </div>
</div>
<div class="index-spl wbot">
    <span></span>
</div>
<div class="container">
    <picture class="index-fabric__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-innovation-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-innovation-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-innovation-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-innovation-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-innovation.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-innovation.jpg" type="image/jpeg">
        <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/woolux-innovation.jpg" alt="">
    </picture>
    <div class="index-fabric__grid two-col">
        <div class="index-fabric__item">
            <div class="index-fabric__hdr">Очистка<br/><span>сырой шерсти</span></div>
            <div class="index-fabric__text">
                Для мытья сырой шерсти WOOLUX используется проточная вода механической фильтрации в сочетании с особыми сортами органического мыла, состав
                которого разработан в Togas Innovations при содействии европейских партнеров. Учитывая способ мытья и необходимые материалы, вся первичная
                обработка происходит только на собственных или сертифицированных производствах.
            </div>
        </div>
        <div class="index-fabric__item">
            <div class="index-fabric__hdr">Крашение<br/><span>мытой шерсти</span></div>
            <div class="index-fabric__text">
                <p>
                    Известно, что крашение шерсти существенно влияет на ее свойства. В связи с этим мы стремимся к тому, чтобы оставлять неокрашенной
                    максимальное количество шерсти стандарта WOOLUX. Сегодня, все волокна, используемые в наполнителях наших продуктов для сна, не подвергаются
                    крашению.
                </p>
                <p>
                    Что касается волокон, из которых в дальнейшем производится наша уникальная пряжа для пледов и домашней одежды, в процессе их окрашивания
                    используются только органические красители, соответствующие европейским стандартам экологичности.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="index-spl">
    <span></span>
</div>
<div class="index-mastery" id="etic">
    <div class="container">
        <div class="index-mastery__body">
            <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/logo-woolux-small.svg" alt="Togas Woolux" title="Home"/>
            <div class="index-mastery__hdr">ЭТИКА</div>
            <div class="index-mastery__text">
                Этика современного мира определяет однозначные правила ведения бизнеса, в частности связанного с использованием природных ресурсов. В Togas мы
                отчетливо понимаем, что только максимальная прозрачность и контроль производственных процессов могут считаться достойными позиции лидера.
            </div>
        </div>
    </div>
</div>
<div class="index-spl wbot">
    <span></span>
</div>
<div class="container">
    <picture class="index-fabric__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-lamas-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-lamas-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-lamas-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-lamas-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-lamas.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/woolux-lamas.jpg" type="image/jpeg">
        <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/woolux-lamas.jpg" alt="">
    </picture>
    <div class="index-fabric__grid two-col-fifty">
        <div class="index-fabric__item">
            <div class="index-fabric__hdr">Возобновляемость <br/><span>сырья</span></div>
            <div class="index-fabric__text">
                <p>Шерсть – 100% возобновляемый материал. Тысячелетиями животные-носители делятся с нами своей шерстью, сбор которой является одним из самых
                    гуманных способов добычи какого-либо натурального сырья.</p>
                <p>О каком бы виде шерсти не шла речь, мы сотрудничаем с ограниченным количеством ферм, ежегодно сертифицируя хозяйства наших партнеров на
                    предмет
                    соответствия стандартам экологичности и устойчивости от Togas QC Worldwide.</p>
                <p>В частности, мы следим за питанием и качеством воды для животных, качестве инструментов, используемых для пострига, а также квалификацией
                    сборщиков шерсти, чтобы минимизировать механические повреждения кожных покровов животных.</p>
                <p>Особое внимание мы уделяем контролю средней продолжительности жизни животных на сертифицированных фермах, следя за тем, чтобы не менее 90%
                    животных достигали средней продолжительности жизни, соответствующей конкретным видам и породам.</p>
            </div>
        </div>
        <div class="index-fabric__item">
            <div class="index-fabric__hdr">Переработка<br/><span>и повторное использование</span></div>
            <div class="index-fabric__text">
                <p>Большая часть неиспользованной шерсти как в сырье, так и в виде готовых продуктов подлежит повторной переработке и использовании в таких
                    продуктах Togas как чехлы и прочностные слои матрасов, а также наполнителях для наших подушек и одеял.</p>
                <p>Для этих же целей используются волокна, не подошедшие под стандарт WOOLUX в процессе тестирования, в основном по причине недостаточной длины
                    волокна или цветности.</p>
                <p>Но даже в случае утилизации, волокна шерсти естественным образом разлагаются в почве в течение нескольких лет, медленно высвобождая ценные
                    питательные вещества обратно в землю.</p>
            </div>
        </div>
    </div>
</div>
<div class="index-spl wbot">
    <span></span>
</div>
<div class="index-figure">
    <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/figure.svg" alt="Togas Woolux" title="Home"/>
</div>
<div class="index-links__wrp">
    <div class="container">
        <div class="index-links__title">ПРИРОДНОЕ СОВЕРШЕНСТВО</div>
        <div class="index-links__hdr">Шерсть Togas</div>
        <div class="index-links__grid">
            <div>
                <a href="/kashmir.php">

                    <picture class="index-links__img">
                        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-kashmir-mobile.webp" type="image/webp">
                        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-kashmir-mobile.jpg" type="image/jpeg">
                        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-kashmir-tablet.webp" type="image/webp">
                        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-kashmir-tablet.jpg" type="image/jpeg">
                        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-kashmir.webp" type="image/webp">
                        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-kashmir.jpg" type="image/jpeg">
                        <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/links-kashmir.jpg" alt=""/>

                    </picture>
                </a>
                <div class="index-links__item__title">КИТАЙ И ИНДИЯ</div>
                <a href="/kashmir.php" class="index-links__item__name">Тибетский<br/>кашемир</a>
            </div>
            <div>
                <a href="/merinos.php">
                    <picture class="index-links__img">
                        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-merinos-mobile.webp" type="image/webp">
                        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-merinos-mobile.jpg" type="image/jpeg">
                        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-merinos-tablet.webp" type="image/webp">
                        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-merinos-tablet.jpg" type="image/jpeg">
                        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-merinos.webp" type="image/webp">
                        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-merinos.jpg" type="image/jpeg">
                        <img class="lazy" src"<?= LAZY_IMAGE ?>" data-src="/images/links-merinos.jpg" alt="" />
                    </picture>
                </a>
                <div class="index-links__item__title">АВСТРАЛИЯ</div>
                <a href="/merinos.php" class="index-links__item__name">Пеппинский<br/>меринос</a>
            </div>
            <div>
                <a href="/camel.php">
                    <picture class="index-links__img">
                        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-camel-mobile.webp" type="image/webp">
                        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-camel-mobile.jpg" type="image/jpeg">
                        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-camel-tablet.webp" type="image/webp">
                        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-camel-tablet.jpg" type="image/jpeg">
                        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-camel.webp" type="image/webp">
                        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/links-camel.jpg" type="image/jpeg">
                        <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/links-camel.jpg" alt=""/>
                    </picture>
                </a>
                <div class="index-links__item__title">МОНГОЛИЯ</div>
                <a href="/camel.php" class="index-links__item__name">Бактрийский<br/>верблюд</a>
            </div>
        </div>
    </div>
</div>
<div class="to-top"><img src="/images/to-top.svg" alt="Вверх"/></div>
<link href="/css/index-second.css" type="text/css" rel="stylesheet"/>
<link href="/css/common-second.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="/js/npm.vanilla-lazyload.bundle.js"></script>
<script type="text/javascript" src="/js/common.bundle.js"></script>
<script type="text/javascript" src="/js/index.bundle.js"></script>
<div id="css-support-msg" style="display: none"></div>
</body>
</html>