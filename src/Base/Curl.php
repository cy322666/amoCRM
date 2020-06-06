<?php

namespace cy322666\amoCRM\Base;

class Curl
{
    private static $subdomain;

    public function __construct($subdomain)
    {
        //var_dump($subdomain);
        self::$subdomain = $subdomain;
    }

    public static function Query($link, $array)
    {
        $headers[] = 'Content-Type: application/json';
        $curl = curl_init(); #Сохраняем дескриптор сеанса cURL

        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl,CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl,CURLOPT_URL, 'https://'.self::$subdomain.'.amocrm.ru'.$link);
        if($array) {
            curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl,CURLOPT_HTTPHEADER, $headers );
            curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($array));
        }
        curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl,CURLOPT_HEADER, false);
        curl_setopt($curl,CURLOPT_COOKIEFILE, __DIR__.'/Cookie.txt');
        curl_setopt($curl,CURLOPT_COOKIEJAR, __DIR__.'/Cookie.txt');
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 0);

        $out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        try {
            #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
            if ( $code != 200 && $code != 204 ) {
                //throw new Exception( isset ( $errors [ $code ] ) ? $errors [ $code ] : 'Undescribed error' , $code ) ;
            }
        }
        catch( Exception $E ) {
            //echo ('Fatal error : ' . $errors [ $code ] . ' ' . $code );
        }

        $Response = json_decode($out, true);
        $Response = $Response['response'];
        if (isset($Response['auth'])) #Флаг авторизации доступен в свойстве "auth"
        {
            return 'Авторизация прошла успешно';
        }

        return 'Авторизация не удалась';
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