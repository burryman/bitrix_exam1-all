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

<div class="item-wrap">
     <div class="rew-footer-carousel">
     <?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="item">
			<div class="side-block side-opin">
				<div class="inner-block">
					<div class="title">
						<div class="photo-block">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="photo">
						</div>
						<div class="name-block"><a href=""><?echo $arItem["NAME"]?></a></div>
						<div class="pos-block"><?=implode(', ', array_filter([$arItem["PROPERTIES"]['POSITION']['VALUE'], $arItem["PROPERTIES"]['COMPANY']['VALUE']]))?></div>
					</div>
					<div class="text-block">
					<?$str = $arItem["PREVIEW_TEXT"];
					if (mb_strlen($str) > 150) {
						$str = mb_substr($str, 0, 150) . '...';
					}
					echo $str;?>
					</div>
				</div>
			</div>
		</div>
	<?endforeach;?>
	</div>
</div>



