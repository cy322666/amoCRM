<?php


namespace cy322666\amoCRM;

//use cy322666\amoCRM\Base\Model;

//use cy322666\amoCRM\Base\Model;

//require_once '/Models/Account.php';
//require_once '/Models/Auth.php';
//use cy322666\amoCRM\Base\Model;

//use cy322666\amoCRM;
//use cy322666\amoCRM\Base;

require_once __DIR__.'/Base/Model.php';
require_once __DIR__.'/Models/Auth.php';
require_once __DIR__.'/Models/Account.php';
require_once __DIR__.'/Models/Lead.php';
require_once __DIR__.'/Models/Account.php';

class Api
{
    private
        $attributes = [
            'Account' => '',
            'Lead' => '',
//            'contacts' => ''
        ];

    public $Model;

    public function __construct()
    {
        echo '=============';
        echo 'Мы в API '.__CLASS__.' '.__NAMESPACE__;

        foreach ($this->attributes as $key => $attribute) {
            $className = __NAMESPACE__.'\Models\\'.$key;

            $this->attributes[$key] = new $className;
        }
        $this->Model = new Base\Model();
    }

    public function Auth($path)
    {
        $fileAccess = $path.'php';
        if(file_exists($fileAccess)) {
            $access = require_once $path.'php';

        }
    }
}


