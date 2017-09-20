<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?=$arResult["DETAIL_TEXT"]?>
		</div>
		<div class="review-autor">
			<?=implode(', ', array_filter([$arResult["DISPLAY_ACTIVE_FROM"], $arResult["NAME"], $arResult["PROPERTIES"]['POSITION']['VALUE'], $arResult["PROPERTIES"]['COMPANY']['VALUE']]))?>
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
</div>
<div class="exam-review-doc">
<?if($arResult['PROPERTIES']['DOCUMENTS']['VALUE']):?>
	<p>Документы:</p>
	<?foreach ($arResult['PROPERTIES']['DOCUMENTS']['VALUE'] as $doc):?>
		<?$arFile = CFile::GetFileArray($doc)?>
		<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png" alt = "<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg"><a href="<?=$arFile['SRC']?>"><?echo $arFile['ORIGINAL_NAME']?></a></div>
	<?endforeach?>
<?endif?>
</div>
<hr>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>



