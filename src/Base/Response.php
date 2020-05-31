<?php


namespace cy322666\amoCRM\Base;


class Response extends Model
{

$out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

//        try {
//            #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
//            if ( $code != 200 && $code != 204 ) {
//                throw new Exception( isset ( $this->errors [ $code ] ) ? $this->errors [ $code ] : 'Undescribed error' , $code ) ;
//            }
//        }
//        catch( Exception $E ) {
//            //bot::sendMsg('Fatal error : ' . $this->errors [ $code ] . ' ' . $code );
//            exit;
//        }

$Response = json_decode($out, true);

return $Response;
//        if(!$Response) {
//            //bot::sendMsg($this->l_id.' : '.$link, '');
//            exit;
//
//        } elseif ($Response['response']['error']) {
//            //bot::sendMsg($this->l_id.' : '.$Response['response']['error'], '');
//        } else return $Response;

}