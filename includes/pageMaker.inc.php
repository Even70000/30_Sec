<?php
session_start(); 
class PageMaker {
    public function __construct() {

        

    }
   
    public function getPage($page){
        include($page);
        $html = "<!DOCTYPE html>";
        $html .= "<html lg='en'>";

 
        

            $html .= "<body>";

  
            
                $html .= $body;
            
                
            $html .= "</body>";
        $html .= "</html>";
        
        return $html;
    }
}