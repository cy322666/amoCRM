<?php


namespace cy322666\amoCRM\Models;

use cy322666\amoCRM;

class Lead
{
    protected $url = '/api/v4/leads';
    private
        $attributes = [
            'id' => '',
            'name' => '',
            'sale' => '',
            'status_id' => '',
            'pipeline_id' => '',
            'tags' => ''
        ];

    function __construct()
    {
        echo __NAMESPACE__;
        //echo 'lead';
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
}