<?php
namespace lib;
class Smarty{
    function __construct()
    {
        $smarty=new Smarty();

        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $this->smarty=$smarty;
    }

}