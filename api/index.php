    <?php 
        function makeRequest() {
            echo "Making request";
            $url='https://aires.astoria-tula.ru/sharedapi/worker/filter';  
            $post = array('apikey' =>"1f64ddc5d1fb0679c5fd1221ee738685");
          
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
      $timeleft = time() - intval(file_get_contents("time.txt"));
      if ($timeleft < 120) {
          var_dump(json_decode(file_get_contents("response.txt"),true));
      } else {
            $response = makeRequest();
            $FILE = fopen("./response.txt","w"); 
            fputs($FILE,json_encode($response));
            $FILE = fopen("./time.txt","w");
            fputs($FILE,time());
            var_dump($response["data"][$_GET["id"]]["fields"][3644]["value"]);
      }
    ?> 
