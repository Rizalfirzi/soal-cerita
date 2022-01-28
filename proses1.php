if(isset($_POST["kirim"])){
       $aa = $_POST["ulang"];
       $ua = $_POST["nomor"];
       if($aa == 1){
           echo "Perulangan while bilangan ganjil<br>";
        
        $x = 1; 
        while($x <= $ua) {
            echo "Bilangan ke - $x <br>";
            $x+=2;
        } 
       }
       elseif ($aa == 2){
           echo "Perulangan While genap<br>";
       $a= 2;
       while($a <= $ua){
           echo "Bilangan Ke - $a";
           $a+=2;
       }
    }
       elseif($aa == 3){
           echo "Perulangan while berurutan";

           $x = 1;
           while($x <= $ua){
               echo"Bilangan ke - $x";
               $x++;
           }
       }
       elseif($aa == 4){
           echo "Perulangan Dowhile berurutan<br>";
           $i = 1;
       do{
           echo $i . "<br> ";
           $i++;
       } 
       while($i <= $ua);
    }
    
       elseif ($aa == 5){
           echo "Perulangan Dowhile ganjil <br>";
           $i = 1;
           do{
               echo $i . "<br> ";
               $i+=2;;
           } 
           while($i <= $ua);
       }
       elseif ($aa == 6){
           echo "Perulangan Dowhile genap <br>";
           $i = 2;
           do{
               echo $i . "<br> ";
               $i+=2;
           } 
           while($i <= $ua);
    }