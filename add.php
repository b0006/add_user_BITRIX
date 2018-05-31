<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$user = new CUser;
$arFields = Array(
  "NAME"              => "Сергей",
  "LAST_NAME"         => "Иванов",
  "EMAIL"             => "ivanov@microsoft.com",
  "LOGIN"             => "b0007",
  "LID"               => "ru",
  "ACTIVE"            => "Y",
  "GROUP_ID"          => array(1),
  "PASSWORD"          => "13820003",
  "CONFIRM_PASSWORD"  => "13820003",
  "PERSONAL_PHOTO"    => $arIMAGE
);

$ID = $user->Add($arFields);
if (intval($ID) > 0)
    echo "Пользователь успешно добавлен.";
else
    echo $user->LAST_ERROR;
?>
