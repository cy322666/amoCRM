<?php


namespace cy322666\amoCRM\Base;


class Curl
{
    private $headers = 'Content-Type: application/json';

    protected function init()
    {
        $curl = curl_init(); #Сохраняем дескриптор сеанса cURL

        #Устанавливаем необходимые опции для сеанса cURL
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl,CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl,CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl,CURLOPT_HEADER, false);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl,CURLOPT_COOKIEFILE, $this->pathCookie);
        curl_setopt($curl,CURLOPT_COOKIEJAR, $this->pathCookie);
    }

    protected function setHeader($headers)
    {
        $this->headers = $headers;
    }

    public function setPathCookie($path)
    {
        $this->pathCookie = $path;
    }

}