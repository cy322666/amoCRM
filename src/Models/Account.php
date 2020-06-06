<?php


namespace cy322666\amoCRM\Models;

use cy322666\amoCRM\Base\Curl as Curl;

class Account
{
    private $url = '/api/v4/account';

    public function __construct()
    {
        $a = Curl::Query($this->url, '');
        var_dump($a);
    }
    public function getInfo()
    {

    }
}