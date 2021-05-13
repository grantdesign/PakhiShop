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
//debug($arResult['ITEMS']);
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>

<?php foreach ($arResult['ITEMS'] as $arItem): ?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<?php
		$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>150, 'height'=>150), BX_RESIZE_IMAGE_EXACT, true);
        $arItem['PREVIEW_PICTURE']['SRC'] = $file['src'];
	?>

	<div class="portfolio <?=$arItem['PROPERTIES']['CATEGORY']['VALUE_XML_ID']?> mix_all  data-cat="<?=$arItem['PROPERTIES']['CATEGORY']['VALUE_XML_ID']?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>" style="display: inline-block; opacity: 1;">
		<div class="portfolio-wrapper">		
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="b-link-stripe b-animate-go  thickbox">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="img-responsive" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" /><div class="b-wrapper"><div class="atc"><p>More</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
			</div></a>
			<div class="title">
				<div class="main-price">
					<h3>Размер: <span></span><?=$arItem['PROPERTIES']['SIZE']['VALUE']?></h3>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<?php endforeach; ?>