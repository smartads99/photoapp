<pre>
    <?php
   include 'libs/load.php';


   //print("_SERVER \n");
   //print_r($_SERVER);
   //print("_GET \n");
   //print_r($_GET);
   //print("_POST \n");
   //print_r($_POST);
   //print("_FILES");
   //print_r($_FILES);
   //print("_COOKIE");
   //print_r($_COOKIE);
    


$mic1 = new Mic("Roda"); //constructing the object
$mic2 = new Mic("HyperX"); //constructing the object


 $mic1->setLight("White");
 $mic2->setLight("Green");

 print(ucwords("hyper quad cast"));
 $mic1->setModel("hyper quad cast");
 print("Model of 1st mic is ".$mic1->getModelProxy());
 print("\n".$mic1->getBrand());
 print("\n".$mic2->getBrand());

?>
</pre>