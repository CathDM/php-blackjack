<!doctype html>
<?php
//but first some general exercises to understand OOB better also because i find cardgames boring & i know zip about black jack

///set properties & methods

class User{
    //properties
    public $username = 'Cath';
    public $email = 'catherinedm82@gmail.com';
    //method
    //2 creating a constructor 

    public function addFriend(){
        //(1.)output the value from dinamic property
       
        return " $this->username added a frend";

}
}

    //objects
    $userOne = new User();
    $userTwo = new User();
 //1.to access the value of the property
    echo $userOne ->username .'<br>';
    echo $userOne ->email .'<br>';
    echo $userOne ->addFriend().'<br>';
 //2.to access the value of the property but set it equal to a value
    //this part gets confusing because the code follows a serten flow 
    //but here the function wil be repeted by default with that new info 
    $userTwo->username = 'Joske';
    $userTwo->email = 'Joskeboske@gmail.com';

 echo $userTwo ->username .'<br>';
 echo $userTwo->email .'<br>';
 echo $userTwo ->addFriend().'<br>';


// to get an overview of the properties and values available
// print_r(get_class_vars('User')); //output the value out of properties
// print_r(get_class_methods('User'));//output method info used with in the property 

    ?>
<!--voorb 2 http://www.sitemasters.be/tutorials/1/1/607/PHP/OOP_(Object_Oriented_Programming)-->

 <?php
//property
class Auto {

    
    //method
    public $sKleur ="";
    public function rijden(){
        return "De auto die " .$this->getKleur()." is rijdt!";
    }
    //method om kleur te benoemen # what the fuck is dees eigenlijk
    public function setKleur($sKleur){
        $this->sKleur = $sKleur;
        return;
    }
    //methode om kleur op te halen (echt makes no sense at all ma kom)
    public function getKleur(){
        return $this->sKleur;
    }
}



$oAuto = new Auto;
$oAuto->setKleur("groen");
echo $oAuto->rijden().'<br>';

?>
<?php

class Auto {
    
    private $sKleur = "";
    public function setKleuren(){
       $aValideKleuren = array('groen, rood, blauw, paars, wit , geel, zwart');
       if(! in_array(strtolower($sKleur),($aValideKleuren)){
           die("kleur is niet bekend:" .$sKleur");
       });
}  
$this->skleur = $sKleur;
return

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/> -->
    <title>OOP Blackjack </title>
</head>

<body>


</body>
</html>