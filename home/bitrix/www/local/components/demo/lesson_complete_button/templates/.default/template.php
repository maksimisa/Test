<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<form method="post" action="<?= $APPLICATION->GetCurPage() ?>">
    <button type="submit" name="btn_finish" value="pressed"><?= $arParams['BUTTON_TEXT'] ?></button>
</form>


