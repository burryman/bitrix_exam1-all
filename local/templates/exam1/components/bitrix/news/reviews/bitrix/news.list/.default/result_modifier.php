<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//var_dump($arResult);
foreach ($arResult['ITEMS'] as $i => $arItem) {
    $prevPic = $arItem["PREVIEW_PICTURE"]["SRC"];

    if(!$prevPic){
        $prevPic = SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg";
    }

    $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $prevPic;
}
