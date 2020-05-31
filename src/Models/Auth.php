<?php

namespace cy322666\amoCRM\Models;

use cy322666\amoCRM\Api;

class Auth
{
    protected $url = '/private/api/auth.php';

    private
        $attributes = [
            'login' => '',
            'hash' => ''
    ];

    private $authorization = false;

    public function __construct()
    {

    }

    private function accessInit($accessArray)
    {
        if($accessArray) {
            $this->attributes['login'] = $accessArray['login'];
            $this->attributes['hash'] = $accessArray['hash'];
        }
    }

    public function auth($accessArray)
    {
        $this->accessInit($accessArray);

    }

    public function getAuth()
    {
        return $this->authorization;
    }
}