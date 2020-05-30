<?php

namespace cy322666\amoCRM\Models;

use cy322666\amoCRM\Api;

class Auth
{
    protected $url = '/private/api/auth.php';

    private
        $attributes = [
            'subdomain' => '',
            'hash' => ''
    ];

    public function getAuth()
    {

    }
}