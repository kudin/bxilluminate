<?php
if (!check_bitrix_sessid())
    return;

echo CAdminMessage::ShowMessage([
    "TYPE" => "ERROR",
    "MESSAGE" => 'Модуль не может быть установлен на текущую конфигурацию',
    "DETAILS" => 'Версия php должна быть >= 8',
    "HTML" => true,
]);
?>
<form action="<? echo $APPLICATION->GetCurPage(); ?>">
    <input type="hidden" name="lang" value="<? echo LANG ?>">
    <input type="submit" name="" value="<? echo GetMessage("MOD_BACK"); ?>">
    <form>
