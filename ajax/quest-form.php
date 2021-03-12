<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(CModule::IncludeModule("iblock"))
{
    $arSelect = Array(
        "ID",
        "NAME",
        "IBLOCK_ID",
        "PROPERTY_TARGET",
        "PROPERTY_TASKS",
        "PREVIEW_TEXT"
    );
    $ib = 15;
    if(SITE_ID == "s2"){
        $ib = 22;
    }
    $arFilter = Array("IBLOCK_ID"=>$ib, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID"=>94);
    $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement())
    {
        $case["FIELDS"] = $ob->GetFields();
        $case["PROPS"] = $ob->GetProperties();
        $arResult["CASES"][$case["FIELDS"]["ID"]] = $case;
    }
    //echo "<pre>"; print_r($arResult); echo "</pre>";
}
$code=$APPLICATION->CaptchaGetCode();
?>
<form action="#" class="popup__form">
    <?if($_REQUEST["mail_template"]):?>
        <input type="hidden" name="sendTpl" value="<?=$_REQUEST["mail_template"]?>">
    <?endif;?>
    <h3 class="heading-tertiary">Apply now</h3>
    <h2 class="heading-secondary">Application form</h2>
    <div class="popup__content">
        <div class="popup__wrap">
            <div class="popup__group">
                <label class="popup__label">Organization name</label>
                <input type="text" class="popup__input required" data-rule-input="min-3" name="FIELDS[NAME]" placeholder="LTD “Horns-Hooves”">
            </div>
            <div class="popup__group">
                <label class="popup__label">Organization location</label>
                <input type="text" class="popup__input required" data-rule-input="min-3" name="PROPERTY[LOCATION]" placeholder="Moscow">
            </div>
        </div>
        <div class="popup__wrap">
            <div class="popup__group <?/*success*/?>">
                <label class="popup__label">Full name</label>
                <input type="text" class="popup__input required" data-rule-input="min-3" name="PROPERTY[FIO]" placeholder="Ivanov Ivan Ivanovich">
            </div>
            <div class="popup__group <?/*error*/?>">
                <label class="popup__label">Phone Number</label>
                <input type="text" class="popup__input input-phone required" data-rule-input="phone-1" name="PROPERTY[PHONE]" placeholder="+ 7(900)___-__-__">
            </div>
        </div>
        <div class="popup__wrap">
            <div class="popup__group">
                <label class="popup__label">E-mail</label>
                <input type="text" class="popup__input required" name="PROPERTY[EMAIL]" data-rule-input="min-6,email-1" placeholder="ian_off@ya.ru">
            </div>
            <?if($_REQUEST["variant"] == "1" || !isset($arResult["CASES"])):?>
                <div class="popup__group">
                    <label class="popup__label">Functional area</label>
                    <input type="text" class="popup__input required" name="PROPERTY[DIRECTION]" data-rule-input="min-6" placeholder="">
                </div>
            <?endif;?>
            <?if($_REQUEST["variant"] == "2" && isset($arResult["CASES"])):?>
                <div class="popup__group">
                    <label class="popup__label">Case proposal</label>
                    <select name="PROPERTY[CASE]" class="popup__input">
                        <?foreach($arResult["CASES"] as $id => $case):?>
                            <?
                            $selected = "";
                            if($_REQUEST["case_id"] && $_REQUEST["case_id"] == $id){
                                $selected = " selected";
                            }
                            ?>
                            <option value="<?=$id?>"<?=$selected?>><?=$case["FIELDS"]["NAME"]?></option>
                        <?endforeach;?>
                    </select>
                </div>
            <?endif;?>
        </div>
        <div class="popup__wrap --textarea">
            <div class="popup__group">
                <label class="popup__label">Project brief</label>
                <textarea name="FIELDS[PREVIEW_TEXT]" class="popup__textarea required"
                          placeholder="Briefly describe your project..."></textarea>
            </div>
        </div>
        <div class="popup__wrap --checkbox">
            <label class="popup__label">Stage of the project</label>
            <label class="popup__checkbox">
                <input type="checkbox" name="PROPERTY[STAGE][]" class="popup__checkbox-input" value="47">
                <span class="popup__checkbox-c">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                            </svg>
                        </span>
                <div class="popup__checkbox-text">Пилотирование</div>
            </label>
            <label class="popup__checkbox">
                <input type="checkbox" name="PROPERTY[STAGE][]" class="popup__checkbox-input" value="48">
                <span class="popup__checkbox-c">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                            </svg>
                        </span>
                <div class="popup__checkbox-text">Implementation</div>
            </label>
            <label class="popup__checkbox">
                <input type="checkbox" name="PROPERTY[STAGE][]" class="popup__checkbox-input" value="49">
                <span class="popup__checkbox-c">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                            </svg>
                        </span>
                <div class="popup__checkbox-text">Ready solution</div>
            </label>
        </div>
        <div class="popup__wrap --textarea">
            <div class="popup__group">
                <label class="popup__label">Description of implementation cases </label>
                <textarea name="FIELDS[DETAIL_TEXT]" class="popup__textarea required"
                          placeholder="Describe the implementation case if tyou have a ready solution..."></textarea>
            </div>
        </div>
        <!-- вид документов изначально -->
        <div class="popup__wrap --document">
            <div class="popup__group">
                <label class="popup__label">Presentations and other materials </label>
                <div class="popup__document">
                    <input type="file" class="hidden-input-file" name="file[0]" data-num-file="0" value="">
                    <div class="popup__document-icon"></div>
                    <div class="popup__document-name">Upload your materials</div>
                </div>
            </div>
        </div>
        <?/*<!-- вид документов после добавления файла -->
            <div class="popup__wrap --document">
                <div class="popup__group">
                    <label class="popup__label">Презентации и прочие материалы </label>
                    <div class="popup__document --loaded">
                        <div class="popup__document-icon"></div>
                        <div class="popup__document-name">xncjkOP.ppt</div>
                    </div>
                    <div class="popup__document">
                        <div class="popup__document-icon"></div>
                        <div class="popup__document-name">Загрузить еще</div>
                    </div>
                </div>
            </div>*/?>
    </div>
    <div class="captcha_box">
        <div class="captcha_box-wrap">
            <input type="hidden" class="sid-captcha" name="captcha_sid" value="<?= $code; ?>" />
            <img class="img-captcha" src="/bitrix/tools/captcha.php?captcha_sid=<?= $code; ?>" alt="CAPTCHA" />
            <div class="recode-captcha">Change it</div>
        </div>
        <input type="text" class="popup__input required input-captcha" name="captcha_word">
    </div>
    <div class="popup__bot">

        <button class="popup__btn" type="submit">Apply</button>
        <label class="popup__checkbox">
            <input type="checkbox" name="consent" class="popup__checkbox-input">
            <span class="popup__checkbox-c">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                        </svg>
                    </span>
            <div class="popup__checkbox-text">Consent to the processing of personal data</div>
        </label>
    </div>
</form>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>