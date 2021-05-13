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
//debug($arResult['SECTIONS']);
?>

<?php foreach ($arResult['SECTIONS'] as $value) {
	$code = $value['CODE'].' ';
} ?>

<?php if (!empty($arResult['SECTIONS'])): ?>

	<ul id="filters" class="clearfix">
		<li><span class="filter active" data-filter="app <?=$code?>"><label class="active"></label>Все</span></li>
		<?php foreach ($arResult['SECTIONS'] as $arSection): ?>
			<?php
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
			?>
			<li id="<?=$this->GetEditAreaId($arSection['ID']);?>"><span class="filter" data-filter="<?=$arSection['CODE']?>"><label></label><?=$arSection['NAME']?></span></li>
		<?php endforeach; ?>
	</ul>

<?php endif; ?>