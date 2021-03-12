<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?$APPLICATION->IncludeComponent("bitrix:news.detail","development-detail",Array(
        "IBLOCK_TYPE" => "development_en",
        "IBLOCK_ID" => "23",
        "ELEMENT_ID" => $_REQUEST["panelId"],
        "PROPERTY_CODE" => Array("TITLE","NAME_IN_DETAIL","BLOCKS","VIEW_BLOCK","PREZA"),
        "SET_TITLE" => "N",
        "SET_CANONICAL_URL" => "N",
        "SET_BROWSER_TITLE" => "N",
        "BROWSER_TITLE" => "-",
        "SET_META_KEYWORDS" => "N",
        "META_KEYWORDS" => "-",
        "SET_META_DESCRIPTION" => "N",
        "META_DESCRIPTION" => "-",
        "SET_STATUS_404" => "N",
        "LINK" => "#",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "ADD_ELEMENT_CHAIN" => "N",
        "USE_PERMISSIONS" => "N",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_GROUPS" => "Y",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
    )
);?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>