<?php
class Headers{
    function getHeader(){
        $header = "
                 <link rel='stylesheet' href='".STYLE."'/>
            ";
        return $header;
    }
}