<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Main");
?>
<div class="waves"></div>


<div class="cookie">
    <div class="cookie__text">Мы используем файлы cookie, чтобы вам было удобнее пользоваться нашим сайтом.
        Используя наш сайт, вы даете согласие на использование файлов cookie. <a href="#">Узнать больше</a>
    </div>
    <div class="cookie__btns">
        <div class="cookie__accept">Принять и продолжить</div>
        <div class="cookie__refuse">Отказаться</div>
    </div>
</div>


<section class="start">
    <div class="container">
        <?$APPLICATION->IncludeComponent("bitrix:news.detail","start",Array(
                    "IBLOCK_TYPE" => "screens_en",
                    "IBLOCK_ID" => "28",
                    "ELEMENT_ID" => 179,
                    "PROPERTY_CODE" => Array("NEXT_BLOCK"),
                    "SET_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "BROWSER_TITLE" => "-",
                    "SET_META_KEYWORDS" => "N",
                    "META_KEYWORDS" => "-",
                    "SET_META_DESCRIPTION" => "N",
                    "META_DESCRIPTION" => "-",
                    "SET_STATUS_404" => "N",
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

    </div>
</section>


<div class="main-fake"></div>


<main class="main">


    <section class="idea">
        <div class="container">
            <?$APPLICATION->IncludeComponent("bitrix:news.list","two_screen",Array(
                        "IBLOCK_TYPE" => "screens_en",
                        "IBLOCK_ID" => "29",
                        "NEWS_COUNT" => "3",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => Array("ID"),
                        "PROPERTY_CODE" => Array("TITLE_BLOCK","TEXT_BLOCK","NEXT_BLOCK","IMG_BLOCK","SLIDER","BENEFITS",),
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => ""
                    )
                );?>
        </div>
    </section>


    <section class="why">
        <div class="anchor" id="why"></div>
        <div class="container">
            <div class="why__wrap">
                <?$APPLICATION->IncludeComponent("bitrix:news.detail","why_wrap_1",Array(
                            "IBLOCK_TYPE" => "screens_en",
                            "IBLOCK_ID" => "30",
                            "ELEMENT_ID" => 183,
                            "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","IMG_BLOCK","SLIDER"),
                            "SET_TITLE" => "N",
                            "SET_CANONICAL_URL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "N",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "N",
                            "META_DESCRIPTION" => "-",
                            "SET_STATUS_404" => "N",
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
                <?$APPLICATION->IncludeComponent("bitrix:news.detail","why_wrap_2",Array(
                            "IBLOCK_TYPE" => "screens_en",
                            "IBLOCK_ID" => "30",
                            "ELEMENT_ID" => 184,
                            "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","IMG_BLOCK","SLIDER"),
                            "SET_TITLE" => "N",
                            "SET_CANONICAL_URL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "N",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "N",
                            "META_DESCRIPTION" => "-",
                            "SET_STATUS_404" => "N",
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
            </div>
        </div>
    </section>


    <section class="demand">
        <div class="anchor" id="demand"></div>
        <div class="container">
            <?$APPLICATION->IncludeComponent("bitrix:news.detail","demand_1",Array(
                        "IBLOCK_TYPE" => "screens_en",
                        "IBLOCK_ID" => "31",
                        "ELEMENT_ID" => 185,
                        "PROPERTY_CODE" => Array("NEXT_BLOCK","TEXTS"),
                        "SET_TITLE" => "N",
                        "SET_CANONICAL_URL" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "N",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "SET_STATUS_404" => "N",
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
            <?$APPLICATION->IncludeComponent("bitrix:news.detail","demand_d",Array(
                        "IBLOCK_TYPE" => "screens_en",
                        "IBLOCK_ID" => "31",
                        "ELEMENT_ID" => 186,
                        "PROPERTY_CODE" => Array("NEXT_BLOCK","TEXTS"),
                        "SET_TITLE" => "N",
                        "SET_CANONICAL_URL" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "N",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "SET_STATUS_404" => "N",
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
            <?$APPLICATION->IncludeComponent("bitrix:news.detail","demand_steps",Array(
                        "IBLOCK_TYPE" => "screens_en",
                        "IBLOCK_ID" => "31",
                        "ELEMENT_ID" => 187,
                        "PROPERTY_CODE" => Array("NEXT_BLOCK","TEXTS"),
                        "SET_TITLE" => "N",
                        "SET_CANONICAL_URL" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "N",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "SET_STATUS_404" => "N",
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
        </div>
    </section>
    <?$APPLICATION->IncludeComponent("bitrix:news.detail","cases",Array(
                "IBLOCK_TYPE" => "screens_en",
                "IBLOCK_ID" => "32",
                "ELEMENT_ID" => 188,
                "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","CASES"),
                "SET_TITLE" => "N",
                "SET_CANONICAL_URL" => "N",
                "SET_BROWSER_TITLE" => "N",
                "BROWSER_TITLE" => "-",
                "SET_META_KEYWORDS" => "N",
                "META_KEYWORDS" => "-",
                "SET_META_DESCRIPTION" => "N",
                "META_DESCRIPTION" => "-",
                "SET_STATUS_404" => "N",
                "LINK" => "#quest",
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
    <?$APPLICATION->IncludeComponent("bitrix:news.detail","development",Array(
                "IBLOCK_TYPE" => "screens_en",
                "IBLOCK_ID" => "33",
                "ELEMENT_ID" => 189,
                "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","CASES"),
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
    <?$APPLICATION->IncludeComponent("bitrix:news.list","news_anons",Array(
                "IBLOCK_TYPE" => "news_en",
                "IBLOCK_ID" => "25",
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array(),
                "ACTIVE_DATE_FORMAT"=>"j F Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            )
        );?>

</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>