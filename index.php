<?php 

//$var = "my name is solomon keen";
//$var5 =5;
//$var51 =5;

//echo $var;
//echo $var5 + $var51;



//echo "<br>";

//if ($var51==6) {
   // echo $var;
//}elseif($var51>10) {
  //  echo "This is the second ans";
//}else{
 //       echo "This is your final answer";
//}


if (isset($_POST["name"])) {
    $var=$_POST["name"];
}
else{
    $var= ["Tony", "John", "Solomon", "Daniel"];
}


$varform="<html>
                <head></head>
                <body>
                    <h1> welcome to my php code</h1>
                    <form action='http://localhost/lessons/index.php' method='POST'>
                        <input type='text'  name='name'/>
                        <input type='submit' name='submit'/>
                    </form>
                </body>
            </html>";

            foreach ($var as $prm) {
                echo $prm;
                echo "<br>";
            }

            array_push($var, "Smart");
            array_pop($var);
            $var[1] = "Omada";
            print_r($var)
            
?>
                
                
