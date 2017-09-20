<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    $detailPic = $arResult["DETAIL_PICTURE"]["SRC"];

    if(!$detailPic){
        $detailPic = SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg";
    }

    $arResult['DETAIL_PICTURE']['SRC'] = $detailPic;

