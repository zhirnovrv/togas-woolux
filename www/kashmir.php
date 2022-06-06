<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Тибетский кашемир</title>
    <style>
        <?php
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/fonts-first.css");
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/common-first.css");
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/kashmir-first.css");
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
<div class="cover__wrp">
    <section class="cover-bg">
        <picture class="cover-bg__picture">
            <source media="(max-width: 576px)" srcset="/images/goats-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="/images/goats-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="/images/goats-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="/images/goats-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="/images/goats.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="/images/goats.jpg" type="image/jpeg">
            <img src="/images/goats.jpg" alt="">
        </picture>
    </section>
    <section class="cover">
        <div class="container">
            <div class="cover__body">
                <div>
                    <div class="cover__pre-text">ПРИРОДНОЕ СОВЕРШЕНСТВО TOGAS</div>
                    <div class="cover__hdr">Тибетский кашемир</div>
                    <div class="cover__sub-text">
                        Созидание чистоты Гималайского климата, воплощенное в древнейшем обитателе — высокогорной тибетской кашемировой козе.
                    </div>
                </div>
                <div>
                    <div class="cover__mouse"><img src="/images/mouse.svg" alt="Togas Woolux" title="Home"/></div>
                    <div class="cover__start-journey">ВДОХ</div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="trigger-1"></div>
<div class="desert-bg">
    <div class="desert__infinite-majesty">
        <div class="container">
            <div class="desert__infinite-majesty__body">
                <div class="desert__infinite-majesty__hdr">
                    Поднебесье
                </div>
                <div class="desert__infinite-majesty__text">
                    Недаром называемый поднебесным, Тибет приветствует нас своими горными ландшафтами. Здесь трудно дышать — на такой высоте мало кислорода, но
                    его чистота и свежесть уникальны. Эти эпитеты свойственны многому в этих краях, включая тех обитателей, ради кого мы здесь сегодня.
                </div>
            </div>
        </div>
    </div>
    <picture class="desert-bg__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mountains-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mountains-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mountains-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mountains-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mountains.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mountains.jpg" type="image/jpeg">
        <img class="lazy" src="/images/mountains.jpg" alt="">
    </picture>
</div>
<div class="trigger-2"></div>
<div class="desert-bg__pseudo"></div>
<div class="trigger-3"></div>
<div class="flyout-block" id="two-col-block-1">
    <div class="flyout-block__text-col" id="two-col-block-1-text">
        <div class="flyout-block__hdr">Хозяева снежных хребтов</div>
        <div class="flyout-block__p">
            Обитающие в северных регионах центральной Азии, кашемировые горные козы происходят из одноименной области Кашмир — бывшего княжества в высокогорье
            передних Гималаев.
        </div>
        <div class="flyout-block__p">
            Угодья, где мы добываем ценнейший подшерсток кашемира расположены по обе стороны Тибетского нагорья. Большая часть от породы Гекси, из китайской
            провинции Ганьсу, а также ценнейший пух породы Чантаги из индийского региона Ладакх.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/misters-snowy-ridges-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/misters-snowy-ridges-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/misters-snowy-ridges-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/misters-snowy-ridges-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/misters-snowy-ridges.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/misters-snowy-ridges.jpg" type="image/jpeg">
            <img class="lazy" src="/images/misters-snowy-ridges-camel.jpg" alt="">
        </picture>
    </div>
</div>
<div class="flyout-block revert" id="two-col-block-2">
    <div class="flyout-block__picture-col two">
        <picture class="flyout-block__picture" id="two-col-block-2-pic-1">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-1-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-1-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-1-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-1-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-1.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-1.jpg" type="image/jpeg">
            <img class="lazy" src="/images/natural-weightlessness-1.jpg" alt="">
        </picture>
        <picture class="flyout-block__picture" id="two-col-block-2-pic-2">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-2-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-2-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-2-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-2-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-2.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/natural-weightlessness-2.jpg" type="image/jpeg">
            <img class="lazy" src="/images/natural-weightlessness-2.jpg" alt="">
        </picture>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__text-col" id="two-col-block-2-text">
        <div class="flyout-block__hdr">Природная невесомость</div>
        <div class="flyout-block__p">
            Свой кашемир мы изготавливаем из шерсти кочевых коз — у них мало жира, поэтому под шерстью на нижней части живота у них вырастают тонкий длинный
            подшерсток — из него и делают кашемир. Толщина кашемирового волоса — всего 15-18 мкм, что в 2,5-3 раза тоньше, например, человеческого.
        </div>
    </div>
</div>
<div class="desert-tiny-block">
    <div class="desert-tiny-block__text">ПРИРОДНОЕ СОВЕРШЕНСТВО TOGAS</div>
    <picture class="desert-tiny-block__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mauntaines-tiny-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mauntaines-tiny-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mauntaines-tiny-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mauntaines-tiny-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mauntaines-tiny.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/mauntaines-tiny.jpg" type="image/jpeg">
        <img class="lazy" src="/images/mauntaines-tiny.jpg" alt="">
    </picture>
</div>
<div class="flyout-block kashmir" id="two-col-block-3">
    <div class="flyout-block__text-col" id="two-col-block-3-text">
        <div class="flyout-block__hdr">Магия легких касаний</div>
        <div class="flyout-block__p">
            Кашемир — синоним тактильности, мягкость ощущений от прикосновений к которому сравнима разве что с шелком. Этот неповторимый тактильный опыт
            обусловлен тонкостью кашемирового волоса, и особенностями пород коз, подшерсток которых вычесывается на наших партнерских фермах.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/magic-of-light-touch-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/magic-of-light-touch-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/magic-of-light-touch-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/magic-of-light-touch-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/magic-of-light-touch.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/magic-of-light-touch.jpg" type="image/jpeg">
            <img class="lazy" src="/images/magic-of-light-touch.jpg" alt="">
        </picture>
    </div>
</div>
<div class="flyout-block revert" id="two-col-block-4">
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/caring-warmth-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/caring-warmth-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/caring-warmth-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/caring-warmth-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/caring-warmth.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/caring-warmth.jpg" type="image/jpeg">
            <img class="lazy" src="/images/caring-warmth.jpg" alt="">
        </picture>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__text-col" id="two-col-block-4-text">
        <div class="flyout-block__hdr">Забота тепла</div>
        <div class="flyout-block__p">
            Традиционно, любая шерсть ценится в первую очередь за то тепло, что она дарит нам. Как и все природное, пространственная структура волокон
            кашемировой шерсти уникальна, хотя строение любой шерсти схоже — множество микроскопических воздушных карманов, сохраняют теплый воздух внутри себя.
        </div>
        <div class="flyout-block__p">
            Регионы в которых расположены наши партнерские фермы — будь-то северный Китай или высокогорья северной Индии отличаются холодным континентальным
            климатом, где кочевые козы сотнями лет приспосабливались к выживанию, отращивая все более густую и теплую шерсть.
        </div>
    </div>
</div>
<div class="flyout-block" id="two-col-block-5">
    <div class="flyout-block__text-col" id="two-col-block-5-text">
        <div class="flyout-block__hdr">Весенний сбор</div>
        <div class="flyout-block__p">
            Пух кашемира выщипывают или вычёсывают вручную весной, во время линьки коз. Одна коза в год даёт около 150-200 грамм неочищенного кашемира. После
            очистки и обработки пуха остаётся всего лишь 80-120 грамм.
        </div>
        <div class="flyout-block__p">
            Мы ответственно следим за тем, чтобы весенний сбор кашемира начинался только после того, как в регионах сбора установятся положительные
            среднесуточные температуры, дабы не подвергать остриженных животных воздействию холодов.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/spring-collection-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/spring-collection-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/spring-collection-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/spring-collection-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/spring-collection.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/spring-collection.jpg" type="image/jpeg">
            <img class="lazy" src="/images/spring-collection.jpg" alt="">
        </picture>
    </div>
</div>
<div class="flyout-block revert" id="two-col-block-6">
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/traditions-of-artisans-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/traditions-of-artisans-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/traditions-of-artisans-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/traditions-of-artisans-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/traditions-of-artisans.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/traditions-of-artisans.jpg" type="image/jpeg">
            <img class="lazy" src="/images/traditions-of-artisans.jpg" alt="">
        </picture>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__text-col" id="two-col-block-6-text">
        <div class="flyout-block__hdr">Традиции ремесленников</div>
        <div class="flyout-block__p">
            Из-за особой тонкости получившейся пряжи, окрашивается и ткётся она только вручную, как правило, от полутора до четырёх недель.
        </div>
    </div>
</div>
<div class="desert-tiny-block">
    <picture class="desert-tiny-block__picture">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/goats-2-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/goats-2-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/goats-2-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/goats-2-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/goats-2.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/goats-2.jpg" type="image/jpeg">
        <img class="lazy" src="/images/goats-2.jpg" alt="">
    </picture>
</div>
<section class="container">
    <div class="simple-text-block italic col-6">
        <div></div>
        <div>
            <p>Обитатели заснеженных поднебесных хребтов и равнин, испокон веков делятся с нами богатствами, подаренными им самой природой.</p>
            <p>Сегодня мы используем их во благо себе и тем, кого мы любим. Тем, о ком мы заботится так же, как природа заботится о нас.</p>
        </div>
        <div></div>
    </div>
</section>
<div class="products__wrp">
    <div class="container">
        <div class="products__hdr">
            Ощутите тысячелетний опыт природы, сосредоточенный в естественном натуральном кашемировом волокне в продуктах Togas.
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
<link href="/css/common-second.css" type="text/css" rel="stylesheet"/>
<link href="/css/kashmir-second.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="/js/npm.vanilla-lazyload.bundle.js"></script>
<script type="text/javascript" src="/js/common.bundle.js"></script>
<script type="text/javascript" src="/js/npm.gsap.bundle.js"></script>
<script type="text/javascript" src="/js/npm.scrollmagic.bundle.js"></script>
<script type="text/javascript" src="/js/npm.scrollmagic-plugin-gsap.bundle.js"></script>
<script type="text/javascript" src="/js/smooth_scroll.bundle.js"></script>
<script type="text/javascript" src="/js/kashmir.bundle.js"></script>
<div id="css-support-msg" style="display: none"></div>
</body>
</html>