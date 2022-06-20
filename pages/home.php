<?php
if(isset($_POST['fout'])){
    
}elseif(isset($_POST['goed'])){
    
}
$body = "

     <div>
          <div>
              <p>Socenden:".time()."</p>
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
            <button type='submit' name='goed'>Goed</button>
            <button type='submit' name='fout'>Fout</button>
         </form>
         
         </div>
     
     </div>



";

