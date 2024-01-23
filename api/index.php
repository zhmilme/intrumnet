    <?php 
        function makeRequest() {
            //echo "Making request";
            //$url='https://aires.astoria-tula.ru/sharedapi/worker/filter';  
            //$post = array('apikey' =>"1f64ddc5d1fb0679c5fd1221ee738685");
            $url='https://trial.intrumnet.com/sharedapi/worker/filter'; 
            $post = array('apikey' =>"11e7e2bc70df4edb0178ff274b5ac07a");
            $ch = curl_init();  
            curl_setopt($ch, CURLOPT_URL, $url);  
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
            curl_setopt($ch, CURLOPT_POST, 1);  
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
            $result = json_decode(curl_exec($ch),true);  
            curl_close ($ch);  
            return $result;
        }
      //$FILE = fopen("time.txt","w");
      //$timeleft = time() - intval(file_get_contents("./time.txt"));
      $timeleft = 121;
      if ($timeleft < 120) {
          var_dump(json_decode(file_get_contents("response.txt"),true));
      } else if ($_GET["key"] == 0){
            $response = makeRequest();
            //$FILE = fopen("./response.txt","w"); 
            //fputs($FILE,json_encode($response));
            //$FILE = fopen("./time.txt","w");
            //fputs($FILE,time());
            var_dump($response);
            var_dump($response["data"][$_GET["id"]]["fields"][3250]["value"]);
      }
    ?> 
