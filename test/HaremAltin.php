<?php
/** Eyüp Eminoğlu **/

class HaremAltin {
    private $url = "https://www.haremaltin.com/dashboard/ajax/doviz";
    private $headers = array(
        'accept: */*',
        'content-type: application/x-www-form-urlencoded; charset=UTF-8',
        'x-requested-with: XMLHttpRequest'
    );
    private $referrer = "https://www.haremaltin.com/canli-piyasalar/";
    private $data;
    
    public function __construct() {
        $fields = array(
            'dil_kodu' => urlencode('tr'),
        );
        $ch = $this->createCurlHandler($fields);
        $response = curl_exec($ch);
        if(curl_error($ch)) {
            echo 'Error: '.curl_error($ch);
        } else {
            $this->data = json_decode($response)->data;
        }
        curl_close($ch);
    }
    
    public function getAllCurrency() {
        return $this->data;
    }
    
    public function getCurrency($currencyCode) {
        return $this->data->$currencyCode;
    }
    
    private function createCurlHandler($fields) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_REFERER, $this->referrer);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        return $ch;
    }
}
?>