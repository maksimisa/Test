<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_finish"]) && $_POST["btn_finish"] == "pressed") {
    echo "Кнопка была нажата!";
}

$this->includeComponentTemplate();