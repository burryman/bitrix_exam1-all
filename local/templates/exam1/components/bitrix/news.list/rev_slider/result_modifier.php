<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//var_dump($arResult);
foreach ($arResult['ITEMS'] as $i => $arItem) {
	$prevPic = $arItem["PREVIEW_PICTURE"]["SRC"];
	$prevPicID = $arItem["PREVIEW_PICTURE"]["ID"];

    if(!$prevPic){
        $prevPic = SITE_TEMPLATE_PATH . "/img/no_photo_left_block.jpg";
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $prevPic;
    } else {
    $smallPhoto = CFile::ResizeImageGet(
		   $arItem["PREVIEW_PICTURE"]['ID'], 
		   array(
		      'width'=>39,
		      'height'=>39
		   ),
		   BX_RESIZE_IMAGE_EXACT,
		   Array(
		      "name" => "sharpen", 
		      "precision" => 0
		   )
		);
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $smallPhoto['src'];
	}
}


