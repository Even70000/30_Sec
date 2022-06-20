<?php
class Headers{
    function getHeader(){
        $header = "
                 <link rel='stylesheet' href='".STYLE."'/>
                 <link rel='stylesheet' type='text/css' href=''>
                 <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
                 <title>30 SECS</title>
            ";
        return $header;
    }
}