<?php



class App
{

    public function parseURL() {
        if(isset($_GET["url"])) {
            $url = rtrim($_GET["url"],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }


    public function __construct() {
        $url = $this->parseURL();
        var_dump($url);
        echo "hallo";
    }


}