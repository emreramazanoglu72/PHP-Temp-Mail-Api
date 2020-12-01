<?php

class TempMailApi
{
    public $BASE_API_PATH;
    public function __construct ()
    {
        $this->BASE_API_PATH = "https://api.priv8area.com/tempmail";
    }

    public function CURL( $_URL ){
        $useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; tr-TR; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13';
        $referer = 'http://www.google.com/';
        $ch = curl_init();
        $zaman = 0;
        curl_setopt ($ch, CURLOPT_URL, $this->BASE_API_PATH.$_URL);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $zaman);
        curl_setopt ($ch, CURLOPT_REFERER, $referer);
        curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
        $rmx = curl_exec($ch);
        curl_close($ch);
        return $rmx;
    }

    private function JSON($data,$type = false)
    {
        return $type ? json_decode ($data) : json_encode ($data);
    }

    /**
     * @param int $limit
     * get Random Mail List
     */
    public function getMail($limit = 10)
    {
        return $this->CURL ("/randomMail/{$limit}");
    }

    /**
     * @param $user
     * @param $mail
     *
     * get Mail List
     */
    public function getMailInfo($session)
    {
        return self::CURL ("/getMail/{$session}");
    }

    /**
     * @param $user
     * @param $mail
     * @param $id
     */
    public function MailDetail($session,$id)
    {
        return self::CURL ("/getMailDetail/{$session}/{$id}");
    }

    /**
     * @param $user
     * @param $mail
     * @param $id
     * @param $file
     */
    public function fileDownload($session,$id,$file)
    {
      return self::CURL ("/mailFileDownload/{$session}/{$id}/$file");
    }


}