<?php


namespace cy322666\amoCRM\Models;


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
        //echo 'lead';
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
}