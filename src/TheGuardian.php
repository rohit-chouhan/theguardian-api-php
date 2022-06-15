<?php
require_once 'Params.php';

//Main Class
class TheGuardian extends Params {
    public $api_key;
    public $param = array();
    public function __construct($api_key) {
       $this->api_key = $api_key;
    }

    //tags
    public function get_tags() {
        $url = "https://content.guardianapis.com/tags?".$this->determine();
        $response = file_get_contents($url);
        $json = json_decode($response);
        return $json->response->results;
    }

    //sections
    public function get_sections (){
        $url = "https://content.guardianapis.com/sections?".$this->determine();
        $response = file_get_contents($url);
        $json = json_decode($response);
        return $json->response->results;
    }

    //editions
    public function get_editions (){
        $url = "https://content.guardianapis.com/editions?".$this->determine();
        $response = file_get_contents($url);
        $json = json_decode($response);
        return $json->response->results;
    }

    //content
    public function get_articles() {
        $url = "https://content.guardianapis.com/search?".$this->determine();
        $response = file_get_contents($url);
        $json = json_decode($response);
        return $json->response->results;
    }

    //singetime
    public function get_article($id) {
        $url = "https://content.guardianapis.com/".$id."?".$this->determine();
        $response = file_get_contents($url);
        $json = json_decode($response);
        return $json->response->content;
    }

    //detemining quaries
    public function determine() {
        if(count($this->param) == 0){
             return http_build_query(array('api-key' => $this->api_key));
        } else {
            return http_build_query(array_merge($this->param, array('api-key' => $this->api_key)));
        }
    }
}
?>