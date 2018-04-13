<?php

use \Bitrix\Main;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Loader;
use \Bex\D7dull\ExampleTable;

class Getlist extends CBitrixComponent
{

    protected function checkModules()
    {
        if (!Main\Loader::includeModule('bex.d7dull')){
            throw new Main\LoaderException(Loc::getMessage('MODULE_NOT_INSTALLED'));
		} 
    }

    function var1()
    {
        $result = ExampleTable::getList(array(
            'select'  => array('MOUNTH','VAL'),
            'order'   => array('ID'=>'DESC'), 
        ));

        return $result;
    }


    public function executeComponent()
    {
        $this->includeComponentLang('class.php');

        $this->checkModules();

        $result = $this->var1();

        $this->arResult = $result->fetchAll();

        $this->includeComponentTemplate();
    }
};
