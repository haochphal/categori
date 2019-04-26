<?php 
    class ShowURL{
        private $URL;
        public function __construct($url){
            $this->URL=$url; 
        }
        
        public function setData(){
            return $this->URL;
        }
    }
    $url1 = new ShowUrl("My project URL is : http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo $url1->setData();
?>