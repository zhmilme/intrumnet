<?php 
          
      //$url    = 'http://trial.intrumnet.com:81/sharedapi/worker/fields';  
      
     /* $post = array(  
        //'apikey' =>"11e7e2bc70df4edb0178ff274b5ac07a");  
          'apikey' =>"1f64ddc5d1fb0679c5fd1221ee738685");  
      $url='https://aires.astoria-tula.ru/sharedapi/worker/fields';  
  
      $params=array(  
                'id'=>$_GET["id"]);    
                //'name'=>'Ivan');    

      
      $post = array(  
        'apikey' =>"1f64ddc5d1fb0679c5fd1221ee738685",  
        'params'=>$params  
      );  
          
      $ch = curl_init();  
      curl_setopt($ch, CURLOPT_URL, $url);  
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
      curl_setopt($ch, CURLOPT_POST, 1);  
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));  
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
      $result = json_decode(curl_exec($ch));  
      //var_dump(json_encode(curl_exec($ch)=>data));
      curl_close ($ch);  
      //var_dump($result);
          */
      echo ("\n \n");
      //$post = array(  
          //'apikey' =>"11e7e2bc70df4edb0178ff274b5ac07a");  
          //'apikey' =>"1f64ddc5d1fb0679c5fd1221ee738685");  
      //$url='https://aires.astoria-tula.ru/sharedapi/worker/filter';  
      $url='https://trial.intrumnet.com/sharedapi/worker/filter';  
  
      $params=array(  
                'id'=>$_GET["id"]);    
                //'name'=>'Ivan');    

      
      $post = array(  
        //'apikey' =>"1f64ddc5d1fb0679c5fd1221ee738685", 
          'apikey' =>"11e7e2bc70df4edb0178ff274b5ac07a",
          'params'=>$params  
      );  
                    
      $ch = curl_init();  
      curl_setopt($ch, CURLOPT_URL, $url);  
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
      curl_setopt($ch, CURLOPT_POST, 1);  
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));  
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
      $result = json_decode(curl_exec($ch),true);  
      //$json = curl_exec($ch);
      //$encoded = json_encode(curl_exec($ch));
      //var_dump(json_encode(curl_exec($ch)=>data));
      curl_close ($ch);  
      //var_dump($json["data"]);
      //var_dump($encoded["data"]); 
      //var_dump($result["data"][$_GET["id"]]["fields"][9502062]);
      //var_dump($result["data"][$_GET["id"]]);
      //var_dump($result["data"][$_GET["id"]]["fields"][3644]["value"]);
      var_dump($result);
?> 
