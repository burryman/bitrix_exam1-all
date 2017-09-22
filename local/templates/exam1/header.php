<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);

$workTime = (date(h) > 9) && (date(h) < 18);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css" />
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <!-- wrap -->
    <div class="wrap">
    <?$APPLICATION->ShowPanel();?>
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <?if ($workTime):?>
                        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <?else:?>
                        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <?endif?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "search_form",
                    Array()
                    );?>

                    <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"demo", 
	array(
		"COMPONENT_TEMPLATE" => "demo",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/login/user.php",
		"REGISTER_URL" => "/login/index.php",
		"SHOW_ERRORS" => "N"
	),
	false
);?>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "horizontal_multilevel1",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "3",
                "MENU_CACHE_GET_VARS" => array(0=>"",),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "Y"
            )
        );?>
        <!-- /nav -->
        <!-- breadcrumbs -->
        <?if ($APPLICATION->GetCurPage() != "/"):?>
            <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"COMPONENT_TEMPLATE" => "nav",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	),
	false
);?>
        <?endif?>
        <!-- /breadcrumbs -->
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <?if ($APPLICATION->GetCurPage() != "/"):?>
                            <header>
                                <h1><?$APPLICATION->ShowTitle()?></h1>
                            </header>
                            <hr>
                        <?else:?>
                            <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
                            </p>
                        
                               
                            <!-- index column -->
                            <div class="cnt-section index-column">
                                <div class="col-wrap">
            
                                    <!-- main actions box -->
                                    <div class="column main-actions-box">
                                        <div class="title-block">
                                            <h2>Новинки</h2>
                                             <hr>
                                        </div>
                                          <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new01.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                        <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new02.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                        <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new03.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                        <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новинки</a>
                                    </div>
                                    <!-- /main actions box -->
                                    <!-- main news box -->
                                    <div class="column main-news-box">
                                        <div class="title-block">
                                            <h2>Новости</h2>
                                        </div>
                                        <hr>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новости</a>
                                    </div>
                                    <!-- /main news box -->
            
                                </div>
                            </div>
                            <!-- /index column -->
                            
                            <!-- afisha box -->
                            <div class="cnt-section afisha-box">
                                <div class="section-title-block">
                                    <h2 class="second-ttile">Ближайшие мероприятия</h2>
                                    <a href="" class="btn-next">все мероприятия</a>
                                </div>
                                <hr>
                                <div class="items-wrap">
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?endif?>