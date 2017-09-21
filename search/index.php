<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "5",
		"RESTART" => "N",
		"SHOW_ITEM_DATE_CHANGE" => "N",
		"SHOW_ITEM_TAGS" => "N",
		"SHOW_ORDER_BY" => "N",
		"SHOW_TAGS_CLOUD" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(
			0 => "no",
			1 => "main",
			2 => "forum",
			3 => "iblock_products",
			4 => "iblock_vacancies",
			5 => "iblock_reviews",
			6 => "blog",
			7 => "microblog",
		),
		"COMPONENT_TEMPLATE" => "search",
		"NO_WORD_LOGIC" => "N",
		"FILTER_NAME" => "",
		"arrFILTER_main" => array(
		),
		"arrFILTER_forum" => array(
			0 => "all",
		),
		"arrFILTER_iblock_products" => array(
			0 => "all",
		),
		"arrFILTER_iblock_vacancies" => array(
			0 => "all",
		),
		"arrFILTER_iblock_reviews" => array(
			0 => "all",
		),
		"arrFILTER_blog" => array(
			0 => "all",
		),
		"USE_LANGUAGE_GUESS" => "Y",
		"SHOW_RATING" => "",
		"RATING_TYPE" => "",
		"PATH_TO_USER_PROFILE" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>