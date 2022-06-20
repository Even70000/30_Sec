<?php
$body = "

     <div>
          <div>
              <p>Socenden: </p>
              <p>Score: </p>
          </div>
         <div>"; 
   $vragen = new Vragen();
   foreach($vragen->getVragen() as $vraag){
      $body .= $vraag['name'] . '<br />';
   }  
         
   $body.= " </div>
         <div>
         
         <form action='' method='POST'>
            <button>Goed</button>
            <button>Fout</button>
         </form>
         
         </div>
     
     </div>



";

