<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

IncludeTemplateLangFile(__FILE__);

$dir = $APPLICATION->GetCurDir();
$page = $APPLICATION->GetCurPage();
$show_left_sidebar = $APPLICATION->GetDirProperty("show_left_sidebar");

$assets = \Bitrix\Main\Page\Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="<?=LANG_CHARSET?>">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="author" content="RK">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons Icon -->
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" type="image/x-icon" />

    <?

    /**
     * CSS
     */
    $assets->addCss( SITE_TEMPLATE_PATH . '/css/styles.css' );

    /**
     * JS
     */
    //VENDOR
    \CJSCore::Init(array('jquery'));
    $assets->addJs(SITE_TEMPLATE_PATH . '/js/main.js');

    /**
     * BITRIX ->ShowHead()
     */
    $APPLICATION->ShowMeta("robots", false);
    $APPLICATION->ShowMeta("keywords", false);
    $APPLICATION->ShowMeta("description", false);
    $APPLICATION->ShowLink("canonical", null);
    $APPLICATION->ShowCSS(true);
    $APPLICATION->ShowHeadStrings();
    ?>

    <title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>