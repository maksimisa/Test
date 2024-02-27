<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<form method="post" action="<?= $APPLICATION->GetCurPage(); ?>">
    <input type="hidden" name="lesson_complete" value="Y">
    <input type="submit" value="Завершить урок">
</form>

