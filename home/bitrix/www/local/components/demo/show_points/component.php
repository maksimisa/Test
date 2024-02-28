<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


global $USER;
        
if ($USER->IsAuthorized()) {
    $userId = $USER->GetID();
    $userPoints = CUser::GetByID($userId)->Fetch()["UF_POINTS"];

    $this->arResult["USER_POINTS"] = $userPoints;
} else {
    $this->arResult["USER_POINTS"] = 0;
}

$this->includeComponentTemplate();
