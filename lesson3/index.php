<?php 
    class User{
       public $username = "chris";
       public $email = "chris@chrisemail.com";

       public function addFriend(){
           return "$this->username added a new friend.";
       }
    }

    $userOne = new User();
    $userTwo = new User();

    echo $userOne->username . "<br>";
    echo $userOne->email . "<br>";
    echo $userOne->addFriend() . "<br>";

    $userTwo->username = "pete";
    $userTwo->email = "pete@chrisemail.com";

    echo $userTwo->username . "<br>";
    echo $userTwo->email . "<br>";
    echo $userTwo->addFriend() . "<br>";

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