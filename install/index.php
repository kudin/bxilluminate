<?php

use Bitrix\Main\{
    Loader,
    Localization\Loc,
    ModuleManager
};

class bxilluminate extends CModule {

    public $MODULE_ID = "bxilluminate";
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;

    public function __construct() {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path . "/version.php");
        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }
        $this->MODULE_NAME = Loc::getMessage("MODULE_NAME_ILLUMINATE");
        $this->MODULE_DESCRIPTION = Loc::getMessage("MODULE_DESCRIPTION_ILLUMINATE");
    }

    public function DoInstall() {

        $version = phpversion();

        $result = version_compare($version, '8.0.0');

        if ($result == -1) {
            global $APPLICATION;
            $APPLICATION->IncludeAdminFile('', $_SERVER["DOCUMENT_ROOT"] . "/local/modules/bxilluminate/install/err.php");
        }


        ModuleManager::registerModule($this->MODULE_ID);
        Loader::includeModule($this->MODULE_ID);

        return true;
    }

    public function DoUninstall() {
        Loader::includeModule($this->MODULE_ID);
        ModuleManager::unRegisterModule($this->MODULE_ID);
        return true;
    }
}
