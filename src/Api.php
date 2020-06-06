<?php

namespace cy322666\amoCRM;

//require_once __DIR__.'/Base/Model.php';
use cy322666\amoCRM\Base\Curl;

require_once __DIR__.'/Models/Account.php';
require_once __DIR__.'/Models/Lead.php';
require_once __DIR__.'/Models/Account.php';
require_once __DIR__.'/Base/Curl.php';

class Api
{
    private $attributes = [
        'Account' => '',
        'Lead' => '',
//            'contacts' => '
    ];

    private $access = [
        'login' => '',
        'hash' => ''
    ];

    private $url = '/private/api/auth.php';
    private $Curl;

    public function __construct($access)
    {
        $this->initModels();
        $this->initAccess($access);
        $this->Curl = new Curl($access['subdomain']);
    }

    private function initModels()
    {
        foreach ($this->attributes as $key => $attribute) {
            $className = __NAMESPACE__.'\Models\\'.$key;

            $this->$key = new $className;
        }
    }

    private $authorization = false;

    private function initAccess($access)
    {
        if($access) {
            $this->access['login'] = $access['login'];
            $this->access['hash'] = $access['hash'];
        }
    }
    public function auth()
    {
        $a = Curl::Query($this->url, [
            'USER_LOGIN' => $this->access['login'],
            'USER_HASH' => $this->access['hash']
        ]);
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


