<?php 
    class User{
       public $username;
       private $email;

       public function __construct($username, $email){
           $this->username = $username;
           $this->email = $email;
       }

       public function addFriend(){
           return "$this->username added a new friend.";
       }

       public function getEmail(){
           return $this->email;
       }

       public function setEmail($email){
           if(strpos($email, '@') > -1){
               $this->email = $email;
           }
       }
    }

    $userOne = new User("chris", "owner@chrisemail.com");
    $userTwo = new User("pete", "pete@chrisemail.com");

    $userOne->setEmail("chris@chrisemail.com");
    echo $userOne->getEmail() . "<br>";

    echo $userTwo->getEmail() . "<br>";

    // print_r(get_class_vars('User'));
    // echo "<br>";
    // print_r(get_class_methods('User'));

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>