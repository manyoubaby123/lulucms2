<?php
namespace source\core\front;

use source\core\base\BaseApplication;

class BaseFrontApplication extends BaseApplication
{

    public function init()
    {
        parent::init();
        $this->loadActiveModules(false);
    }
}
