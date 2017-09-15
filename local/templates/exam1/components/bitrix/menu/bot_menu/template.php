<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?if (!empty($arResult)):?>
<nav class="main-menu">
		<?foreach($arResult as $arItem):?>
			<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
				<?=str_repeat("</ul></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
			<?endif?>
	                	<?if ($arItem["IS_PARENT"]):?>
							<?if ($arItem["DEPTH_LEVEL"] == 1):?>
								<div class="item">
			                    <div class="title-block"><?echo $arItem['TEXT']?></div>
			                    <ul>
	                        <?endif?>
                        <?else:?>
	                        <li><a href="<?=$arItem["LINK"]?>"><?echo $arItem['TEXT']?></a></li>
	                    <?endif?>
	        		<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
                <?endforeach?>
                <?if ($previousLevel > 1):?>
					<?=str_repeat("</ul></div>", ($previousLevel-1) );?>
				<?endif?>
            </nav>
<?endif?>