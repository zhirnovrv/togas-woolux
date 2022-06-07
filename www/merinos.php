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
        include($_SERVER["DOCUMENT_ROOT"]  . "/css/merinos-first.css");
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
            <source media="(max-width: 576px)" srcset="/images/merinos-cover-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="/images/merinos-cover-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="/images/merinos-cover-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="/images/merinos-cover-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="/images/merinos-cover.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="/images/merinos-cover.jpg" type="image/jpeg">
            <img src="/images/merinos-cover.jpg" alt="">
        </picture>
    </section>
    <section class="cover">
        <div class="container">
            <div class="cover__body">
                <div>
                    <div class="cover__pre-text">ПРИРОДНОЕ СОВЕРШЕНСТВО TOGAS</div>
                    <div class="cover__hdr">Пеппинский меринос</div>
                    <div class="cover__sub-text">
                        Изумрудные равнины и пологие склоны Нового Южного Уэльса — вотчина благородного пеппинского Мериноса на западном краю земли.
                    </div>
                </div>
                <div>
                    <div class="cover__mouse"><img src="/images/mouse.svg" alt="Togas Woolux" title="Home"/></div>
                    <div class="cover__start-journey">НА КРАЙ СВЕТА</div>
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
                        Путешествие на край света
                    </div>
                    <div class="desert__infinite-majesty__text">
                        Около тысячи лет назад, древние Берберы привезли в Испанию особый вид домашних овец, положив начало монополии Испанской короны на
                        производство шерсти, продлившееся вплоть до XVIII века, когда, первые отары отборных мериносов отправились с Первым флотом в далекую
                        Австралию.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="desert-bg">
        <picture class="desert-bg__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/sunrise-valley-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/sunrise-valley-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/sunrise-valley-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/sunrise-valley-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/sunrise-valley.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/sunrise-valley.jpg" type="image/jpeg">
            <img class="lazy" src="/images/sunrise-valley.jpg" alt="">
        </picture>
    </div>
</div>
<div class="trigger-2"></div>
<div class="desert-bg__pseudo-h"></div>
<div class="trigger-2-5"></div>
<div class="desert-bg__pseudo-h"></div>
<div class="trigger-3"></div>
<div class="flyout-block" id="two-col-block-1">
    <div class="flyout-block__text-col" id="two-col-block-1-text">
        <div class="flyout-block__hdr">Братья Пеппин</div>
        <div class="flyout-block__p">
            Пеппинский меринос, шерсть которого мы используем в своих продуктах сегодня, получил свое название по фамилии братьев, занимавшихся селекцией в
            конце XIX века в Риверине, Австралия. Являясь прямым потомком ценнейшей рамбуйской породы, пеппинский меринос сегодня — основной природный поставщик
            нежнейшей овечьей шерсти премиального класса.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col two">
        <picture class="flyout-block__picture" id="two-col-block-1-pic-1">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-1-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-1-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-1-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-1-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-1.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-1.jpg" type="image/jpeg">
            <img class="lazy" src="/images/pipin-1.jpg" alt="">
        </picture>
        <picture class="flyout-block__picture" id="two-col-block-1-pic-2">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-2-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-2-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-2-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-2-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-2.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/pipin-2.jpg" type="image/jpeg">
            <img class="lazy" src="/images/pipin-2.jpg" alt="">
        </picture>
    </div>
</div>
<div class="flyout-block revert" id="two-col-block-2">
    <div class="flyout-block__picture-col two">
        <picture class="flyout-block__picture" id="two-col-block-2-pic-1">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-2-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-2-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-2-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-2-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-2.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-2.jpg" type="image/jpeg">
            <img class="lazy" src="/images/royal-sophistication-2.jpg" alt="">
        </picture>
        <picture class="flyout-block__picture" id="two-col-block-2-pic-2">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-1-tablet.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-1-tablet.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-1-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-1-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-1.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/royal-sophistication-1.jpg" type="image/jpeg">
            <img class="lazy" src="/images/royal-sophistication-1.jpg" alt="">
        </picture>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__text-col" id="two-col-block-2-text">
        <div class="flyout-block__hdr">Королевская утонченность</div>
        <div class="flyout-block__p">
            Шерсть пеппинскго мериноса обычно имеет диаметр менее 24 мкм, что в 3 раза тоньше человеческого волоса. В отдельных случаях удается получить сверх-
            и супертонкие волокна, которые используются для смешивания с шелком и кашемиром, для достижения уникальных тактильных ощущений.
        </div>
        <div class="flyout-block__p">
            Являясь самой тонкой и мягкой овечьей шерстью в мире, шерсть мериноса составляет всего 1% от мирового производства волокна для одежды — воистину,
            настоящая роскошь.
        </div>
    </div>
</div>
<div class="flyout-block" id="two-col-block-3">
    <div class="flyout-block__text-col" id="two-col-block-3-text">
        <div class="flyout-block__hdr">Глубина снов</div>
        <div class="flyout-block__p">
            Засыпайте, погружаясь в теплые объятия шерсти пеппинского мериноса от Togas.
        </div>
        <div class="flyout-block__p">
            Актуальные исследования, проведенные учеными из Сиднейского университета, показали, что взрослые в шерстяной одежде для сна засыпают всего за 12
            минут по сравнению с 22 и 27 минутами в одежде из полиэстера и хлопка.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/deep-sleeps-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/deep-sleeps-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/deep-sleeps-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/deep-sleeps-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/deep-sleeps.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/deep-sleeps.jpg" type="image/jpeg">
            <img class="lazy" src="/images/magic-of-light-touch.jpg" alt="">
        </picture>
    </div>
</div>
<div class="flyout-block revert" id="two-col-block-4">
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-power-of-warm-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-power-of-warm-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-power-of-warm-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-power-of-warm-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-power-of-warm.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/tenderness-power-of-warm.jpg" type="image/jpeg">
            <img class="lazy" src="/images/tenderness-power-of-warm.jpg" alt="">
        </picture>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__text-col" id="two-col-block-4-text">
        <div class="flyout-block__hdr">Нежная сила тепла</div>
        <div class="flyout-block__p">
            Как и во всех остальных типах, пространственная структура волокон мериноса уникальна. И хотя строение любой шерсти схоже — множество
            микроскопических воздушных карманов, сохраняют теплый воздух внутри себя — шерсть мериноса обладает повышенной прочностью за счет своей особой
            эластичности.
        </div>
        <div class="flyout-block__p">
            Начиная с братьев Пеппин, вот уже 200 лет австралийские заводчики занимаются селекцией пеппинского мериноса, чтобы получать все более качественную,
            тонкую, прочную и теплую шерсть. В Togas мы гордимся тем, сотрудничаем с лучшими из них.
        </div>
    </div>
</div>
<div class="flyout-block" id="two-col-block-5">
    <div class="flyout-block__text-col" id="two-col-block-5-text">
        <div class="flyout-block__hdr">Селекция во благо жизни</div>
        <div class="flyout-block__p">
            Мериносы были одомашнены и выращены таким образом, чтобы они не могли выжить без регулярных стрижек. Их необходимо стричь хотя бы раз в год, потому
            что шерсть не перестаёт расти. Пренебрежение регулярной стрижкой может вызвать тепловой стресс, проблемы с подвижностью и даже слепоту животного.
        </div>
        <div class="flyout-block__p">
            Учитывая мягкий климат западной части Австралии и скорость роста шерсти пеппинского мериноса, их стрижка на наших партнерских фермах, проводится
            несколько раз в год.
        </div>
    </div>
    <div class="flyout-block__spl"></div>
    <div class="flyout-block__picture-col">
        <picture class="flyout-block__picture">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/selection-for-live-mobile.webp" type="image/webp">
            <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/selection-for-live-mobile.jpg" type="image/jpeg">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/selection-for-live-tablet.webp" type="image/webp">
            <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/selection-for-live-tablet.jpg" type="image/jpeg">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/selection-for-live.webp" type="image/webp">
            <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/selection-for-live.jpg" type="image/jpeg">
            <img class="lazy" src="/images/spring-collection.jpg" alt="">
        </picture>
    </div>
</div>
<section class="triple-block">
    <picture class="triple-block-col-1">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-left-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-left-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-left-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-left-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-left.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-left.jpg" type="image/jpeg">
        <img class="lazy" src="/images/spring-collection.jpg" alt="">
    </picture>
    <picture class="triple-block-col-2">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-center-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-center-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-center-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-center-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-center.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-center.jpg" type="image/jpeg">
        <img class="lazy" src="/images/spring-collection.jpg" alt="">
    </picture>
    <picture class="triple-block-col-3">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-right-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-right-mobile.jpg" type="image/jpeg">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-right-tablet.webp" type="image/webp">
        <source media="(max-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-right-tablet.jpg" type="image/jpeg">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-right.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?= LAZY_IMAGE ?>" data-srcset="/images/triple-right.jpg" type="image/jpeg">
        <img class="lazy" src="/images/spring-collection.jpg" alt="">
    </picture>
</section>
<section class="container">
    <div class="simple-text-block italic col-6">
        <div></div>
        <div>
            <p>Свежесть раздолий западных равнин и взгорий Австралии, на самом краю мира, сегодня является домом одного из самых щедрых к людям обитателей нашей
                планеты — тонкорунной овцы мериноса.</p>
            <p>Сегодня мы используем его во благо себе и тем, кого мы любим. Тем, о ком мы заботится так же, как природа заботится о нас.</p>
        </div>
        <div></div>
    </div>
</section>
<div class="products__wrp">
    <div class="container">
        <div class="products__hdr">
            Ощутите тысячелетний опыт природы, сосредоточенный в естественной натуральности шерсти мериноса в продуктах Togas.
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


<link href="/css/merinos-second.css?<?= rand(1, 999999) ?>" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="/js/npm.vanilla-lazyload.bundle.js?<?= rand(1, 999999) ?>"></script>
<script type="text/javascript" src="/js/common.bundle.js?<?= rand(1, 999999) ?>"></script>
<script type="text/javascript" src="/js/npm.gsap.bundle.js?<?= rand(1, 999999) ?>"></script>
<script type="text/javascript" src="/js/npm.scrollmagic.bundle.js?<?= rand(1, 999999) ?>"></script>
<script type="text/javascript" src="/js/npm.scrollmagic-plugin-gsap.bundle.js?<?= rand(1, 999999) ?>"></script>
<script type="text/javascript" src="/js/smooth_scroll.bundle.js?<?= rand(1, 999999) ?>"></script>
<script type="text/javascript" src="/js/merinos.bundle.js?<?= rand(1, 999999) ?>"></script>
<div id="css-support-msg" style="display: none"></div>
</body>
</html>