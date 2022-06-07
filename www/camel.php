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
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/camel-first.css");
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
<div class="cover__wrp">
    <section class="cover-bg">
        <picture class="cover-bg__picture">
            <source media="(max-width: 576px)" srcset="/images/camel-cover-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="/images/camel-cover-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="/images/camel-cover-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="/images/camel-cover-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="/images/camel-cover.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="/images/camel-cover.jpg" type="image/jpeg">
            <img src="/images/camel-cover.jpg" alt="">
        </picture>
    </section>
    <section class="cover">
        <div class="container">
            <div class="cover__body">
                <div>
                    <div class="cover__pre-text">ПРИРОДНОЕ СОВЕРШЕНСТВО TOGAS</div>
                    <div class="cover__hdr">Бактрийский верблюд</div>
                    <div class="cover__sub-text">Откройте для себя удивительный, суровый мир пустыни Гоби, чтобы встретится с её повелителем — двугорбым
                        бактрийским верблюдом.
                    </div>
                </div>
                <div>
                    <div class="cover__mouse"><img src="/images/mouse.svg" alt="Togas Woolux" title="Home"/></div>
                    <div class="cover__start-journey">НАЧАТЬ ПУТЕШЕСТВИЕ</div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="trigger-1"></div>
<div class="desert__wrp">
    <div class="desert-text__wrp">
        <div class="desert__infinite-majesty">
            <div class="container">
                <div class="desert__infinite-majesty__body">
                    <div class="desert__infinite-majesty__hdr">
                        Бескрайнее величие
                    </div>
                    <div class="desert__infinite-majesty__text">
                        Пустыня Гоби встречает нас суровым климатом вне зависимости от времени года — ледяные зимние ночи сменяют раскаленные летние дни. Здесь
                        сложно
                        чувствовать себя комфортно, но есть один обитатель, или, скорее повелитель этих мест, приспособившийся к холодам и жаре.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desert-bg">
        <picture class="desert-bg__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert.jpg" type="image/jpeg">
            <img class="lazy" src="/images/desert.jpg" alt="">
        </picture>
    </div>
</div>
<div class="trigger-2"></div>
<div class="desert-bg__pseudo-h"></div>
<div class="trigger-2-5"></div>
<div class="desert-bg__pseudo-h"></div>
<div class="trigger-3"></div>
<div class="flyout-block" id="lord-of-desert-block">
    <div class="flyout-block__text-col" id="lord-of-desert-text">
        <div class="flyout-block__hdr">Повелитель пустыни</div>
        <div class="flyout-block__p">
            Родившись в давно исчезнувшей Бактрии — между горами Гиндукуш и Ферганской долиной, бактрийский двугорбый верблюд тысячи лет обитает в различных
            регионах северной части Азии.
        </div>
        <picture class="flyout-block__mobile-picture">
            <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel-mobile.webp" type="image/webp">
            <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel-mobile.jpg" type="image/jpeg">
            <img class="lazy" src="/images/lonely-camel-mobile.jpg" alt="">
        </picture>
        <div class="flyout-block__p">
            Фермы, на которых мы стрижем мягчайшую согревающую шерсть бактрийских верблюдов находятся в монгольской провинции Гоби-Алтай, в регионе Тугруг.
            Именно здесь обитает порода Хос Зогдорт (Hos Zogdort), знаменитая качеством, мягкостью и длиной шерсти.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/lonely-camel.jpg" type="image/jpeg">
            <img class="lazy" src="/images/lonely-camel.jpg" alt="">
        </picture>
    </div>
</div>
<div class="flyout-block revert" id="purity-of-youth">
    <div class="flyout-block__picture-col two">
        <picture class="flyout-block__picture" id="purity-of-youth-1">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-1-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-1-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-1-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-1-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-1.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-1.jpg" type="image/jpeg">
            <img class="lazy" src="/images/the-yang-clean-1.jpg" alt="">
        </picture>
        <picture class="flyout-block__picture" id="purity-of-youth-2">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-2-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-2-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-2-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-2-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-2.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/the-yang-clean-2.jpg" type="image/jpeg">
            <img class="lazy" src="/images/the-yang-clean-2.jpg" alt="">
        </picture>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__text-col" id="purity-of-youth-text">
        <div class="flyout-block__hdr">Чистота молодости</div>
        <div class="flyout-block__p">
            Мы собираем только самую тонкую и качественную шерсть и подшерсток с диаметром волокна до 16-18 мкм. Такой шерстью обладают годовалые особи
            бактрийский верблюдов, а их способность к регенерации шерсти в таком возрасте наиболее высока.
        </div>
    </div>
</div>
<div class="desert-tiny-block" id="tiny-desert">
    <div class="desert-tiny-block__text">ПРИРОДНОЕ СОВЕРШЕНСТВО TOGAS</div>
    <picture class="desert-tiny-block__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tiny-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tiny-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tiny-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tiny-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tiny.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/desert-tiny.jpg" type="image/jpeg">
        <img class="lazy" src="/images/desert-tiny.jpg" alt="">
    </picture>
</div>
<div class="flyout-block" id="tenderness-touch-block">
    <div class="flyout-block__text-col" id="tenderness-touch-text">
        <div class="flyout-block__hdr">Нежность прикосновений</div>
        <div class="flyout-block__p">
            Максимальная длина и тонкость волокон обеспечивают невероятную мягкость и однородность шерсти верблюда, придающих неповторимые ощущения от
            соприкосновений с ней.
        </div>
        <div class="flyout-block__p">
            Особую ценность представляет подшерсток годовалых особей мягкость которого сравнима с некоторыми сортами кашемира.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-touch-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-touch-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-touch-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-touch-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-touch.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-touch.jpg" type="image/jpeg">
            <img class="lazy" src="/images/tenderness-touch.jpg" alt="">
        </picture>
    </div>
</div>
<div class="flyout-block revert" id="embrace-of-warmth-block">
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/embrace-of-warmth-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/embrace-of-warmth-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/embrace-of-warmth-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/embrace-of-warmth-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/embrace-of-warmth.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/embrace-of-warmth.jpg" type="image/jpeg">
            <img class="lazy" src="/images/embrace-of-warmth.jpg" alt="">
        </picture>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__text-col" id="embrace-of-warmth-text">
        <div class="flyout-block__hdr">Объятия тепла</div>
        <div class="flyout-block__p">
            Мы все знаем и ценим шерсть в первую очередь за то тепло, что она дарит нам. Уникальная пространственная структура волокон шерсти бактрийского
            верблюда образует множество микроскопических воздушных карманов, сохраняющих теплый воздух внутри себя. Согласитесь, что может быть надежнее защиты,
            созданной самой природой?
        </div>
    </div>
</div>
<div class="desert-tiny-block">
    <div class="desert-tiny-block__text large">Натуральный обмен</div>
    <picture class="desert-tiny-block__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-exchange-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-exchange-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-exchange-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-exchange-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-exchange.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-exchange.jpg" type="image/jpeg">
        <img class="lazy" src="/images/natural-exchange.jpg" alt="">
    </picture>
</div>
<section class="container">
    <div class="simple-text-block col-8">
        <div></div>
        <div id="camels-about">
            <p>Бактрийских верблюдов стригут в начале лета, когда морозы сменяет жара резко-континентального климата Монголии. Важнейшая часть процесса —
                мастерство
                стригущего. По нормативам наших партнерских ферм, один двугобрый должен быть острижен за 15 минут. Таким образом животное испытывает минимум
                стресса.</p>
            <p>Убирая массивный шерстяной покров летом, мы помогаем верблюдам с терморегуляцией, а также это действенный способ защиты от паразитов, которые не
                успевают завестись в шерсти.</p>
        </div>
        <div></div>
    </div>
</section>
<div id="trigger-4"></div>
<div class="desert-tiny-block">
    <picture class="desert-tiny-block__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/many-cemals-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/many-cemals-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/many-cemals-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/many-cemals-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/many-cemals.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/many-cemals.jpg" type="image/jpeg">
        <img class="lazy" src="/images/many-cemals.jpg" alt="">
    </picture>
</div>
<section class="container">
    <div class="simple-text-block italic col-6">
        <div></div>
        <div>
            <p>Суровые края Монгольских пустынь, чарующие своей бескрайностью, подарили нашему миру носителей ценнейшего натурального материала, тысячелетиями
                формировавшегося для защиты от холодов и сохранения жизни.</p>
            <p>Сегодня мы используем его во благо себе и тем, кого мы любим. Тем, о ком мы заботится так же, как природа заботится о нас.</p>
        </div>
        <div></div>
    </div>
</section>
<div class="products__wrp">
    <div class="container">
        <div class="products__hdr">
            Ощутите тысячелетний опыт природы, сосредоточенный в естественном натуральном волокне шерсти двугорбого верблюда в продуктах Togas
        </div>
        <div class="products__scroll__wrp">
            <div class="products__scroll">
                <div class="products__grid">
                    <div>
                        <a href="#">
                            <picture class="products__img">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-1.webp" type="image/webp">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-1.jpg" type="image/jpeg">
                                <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/product-1.jpg" alt=""/>
                            </picture>
                        </a>
                        <a href="#" class="products__name">Детская подушка Виенто</a>
                        <div class="products__desc">Верблюжья шерсть в шелке</div>
                        <div class="products__price">6 690 ₽</div>
                    </div>
                    <div>
                        <a href="#">
                            <picture class="products__img">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-2.webp" type="image/webp">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-2.jpg" type="image/jpeg">
                                <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/product-2.jpg" alt=""/>
                            </picture>
                        </a>
                        <a href="#" class="products__name">Детская подушка Виенто</a>
                        <div class="products__desc">Верблюжья шерсть в шелке</div>
                        <div class="products__price">6 690 ₽</div>
                    </div>
                    <div>
                        <a href="#">
                            <picture class="products__img">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-3.webp" type="image/webp">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-3.jpg" type="image/jpeg">
                                <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/product-3.jpg" alt=""/>
                            </picture>
                        </a>
                        <a href="#" class="products__name">Детская подушка Виенто</a>
                        <div class="products__desc">Верблюжья шерсть в шелке</div>
                        <div class="products__price">6 690 ₽</div>
                    </div>
                    <div>
                        <a href="#">
                            <picture class="products__img">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-4.webp" type="image/webp">
                                <source srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/product-4.jpg" type="image/jpeg">
                                <img class="lazy" src="<?= LAZY_IMAGE ?>" data-src="/images/product-4.jpg" alt=""/>
                            </picture>
                        </a>
                        <a href="#" class="products__name">Детская подушка Виенто</a>
                        <div class="products__desc">Верблюжья шерсть в шелке</div>
                        <div class="products__price">6 690 ₽</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="to-top"><img src="/images/to-top.svg" alt="Вверх"/></div>
<link href="/css/common-second.css?<?= rand(0, 99999) ?>" type="text/css" rel="stylesheet"/>
<link href="/css/camel-second.css?<?= rand(0, 99999) ?>" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="/js/npm.vanilla-lazyload.bundle.js?<?= rand(0, 99999) ?>"></script>
<script type="text/javascript" src="/js/common.bundle.js?<?= rand(0, 99999) ?>"></script>
<script type="text/javascript" src="/js/npm.gsap.bundle.js?<?= rand(0, 99999) ?>"></script>
<script type="text/javascript" src="/js/npm.scrollmagic.bundle.js?<?= rand(0, 99999) ?>"></script>
<script type="text/javascript" src="/js/npm.scrollmagic-plugin-gsap.bundle.js?<?= rand(0, 99999) ?>"></script>
<script type="text/javascript" src="/js/smooth_scroll.bundle.js?<?= rand(0, 99999) ?>"></script>
<script type="text/javascript" src="/js/camel.bundle.js?<?= rand(0, 99999) ?>"></script>
<div id="css-support-msg" style="display: none"></div>
</body>
</html>