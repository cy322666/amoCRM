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
            'Auth' => '',
            'Account' => '',
            'Lead' => ''
//            'contacts' => ''
        ];

    public $Model;

    public function __construct()
    {
        echo '=============';
        echo 'Мы в API '.__CLASS__.' '.__NAMESPACE__;

        $this->initModels();

        //$this->Model = new Base\Model();
    }

    private function initModels()
    {
        foreach ($this->attributes as $key => $attribute) {
            $className = __NAMESPACE__.'\Models\\'.$key;

            $this->attributes[$key] = new $className;
        }
    }

    public function getAuth()
    {
        return $this->attributes['Auth'];
    }

    public function getAccount()
    {
        return $this->attributes['Account'];
    }

    public function getLead()
    {
        return $this->attributes['Lead'];
    }

    public function getContact()
    {
        return $this->attributes['Contact'];
    }

//    public function Auth($path)
//    {
//        $fileAccess = $path.'php';
//        if(file_exists($fileAccess)) {
//            $access = require_once $path.'php';
//
//        }
//    }
}


