<?php


namespace cy322666\amoCRM;

//use cy322666\amoCRM\Base\Query;

use cy322666\amoCRM\Base\Model;

require_once '/Models/Account.php';
require_once '/Models/Auth.php';
require_once '/Base/Model.php';

class Api
{
    public function __construct()
    {
        $this->model = new Model();
    }
}