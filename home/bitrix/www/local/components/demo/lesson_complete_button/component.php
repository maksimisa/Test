<?php
/** @global CUser $USER */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_finish"]) && $_POST["btn_finish"] == "pressed") {
    // Ваш код для начисления баллов
    $userId = $USER->GetID(); // получаем ID текущего пользователя
    $pointsToAdd = 10; // количество баллов для начисления

    // Пример использования CUser::Update для обновления поля с баллами пользователя
    $arUserFields = array(
        "UF_POINTS" => CUser::GetByID($userId)->Fetch()["UF_POINTS"] + $pointsToAdd,
    );
    $user = new CUser;
    $user->Update($userId, $arUserFields);

    echo "Кнопка была нажата! Пользователю начислено $pointsToAdd баллов.";
}

$this->includeComponentTemplate();
?>
