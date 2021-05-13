<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="contact-section-head text-center">
	<h3><span>C</span>ontact Us</h3>
	<p>“let us know your feedbacks and questions”</p>
</div>
<div class="contact-form-main">
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>
		<label class="span1"></label>
		<input type="text" class="text" name="user_name" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
		<label class="span2"></label>
		<label class="span3"></label>
		<input type="text" name="user_email" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
		<label class="span4"></label>
		<label class="span5"></label>
		<label class="span6"></label>
		<textarea name="MESSAGE" onfocus="if(this.value == 'Message...') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Message...</textarea>
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input type="submit" name="submit" value="&nbsp;">
	</form>
</div>