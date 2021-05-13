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
$this->setFrameMode(true);?>

<div class="search-box">
	<div id="sb-search" class="sb-search">
		<form action="<?=$arResult["FORM_ACTION"]?>">
			<input class="sb-search-input" name="q" placeholder="Enter your search term..." type="text" id="search">
			<input class="sb-search-submit" type="submit" value="">
			<span class="sb-icon-search"> </span>
		</form>
	</div>
</div>