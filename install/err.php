<?
if (!check_bitrix_sessid())
    return;

echo CAdminMessage::ShowMessage(array(
    "TYPE" => "ERROR",
    "MESSAGE" => 'Модуль не может быть установлен на текущую конфигурацию',
    "DETAILS" => 'php должен быть 8',
    "HTML" => true,
));
?>
<form action="<? echo $APPLICATION->GetCurPage(); ?>">
    <input type="hidden" name="lang" value="<? echo LANG ?>">
    <input type="submit" name="" value="<? echo GetMessage("MOD_BACK"); ?>">
    <form>