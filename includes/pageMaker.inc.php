<?php
session_start(); 
class PageMaker {
    public function __construct() {
       
        include('includes/header.inc.php');
        

    }
   
    public function getPage($page){
        include($page);
        $html = "<!DOCTYPE html>";
        $html .= "<html lg='en'>";

        $html .= "<head>";
            $header = new Headers();
            $html .= $header->getHeader();
        $html .= "</head>";
        

            $html .= "<body>";

  
            
                $html .= $body;
            
                
            $html .= "</body>";
        $html .= "</html>";
        
        return $html;
    }
}