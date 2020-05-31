<?php


namespace cy322666\amoCRM\Base;


class Query extends Model
{
    protected function setQuery()
    {
        curl_setopt($curl,CURLOPT_URL, 'https://'.$this->subdomain.'.amocrm.ru'.$link);
    }



    function post()
    {
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl,CURLOPT_HTTPHEADER, $headers );
        curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($array));
    }

    function get()
    {

    }
}