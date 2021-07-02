<?php 
    class User{
       public $username;
       private $email;
       public $role = "member";

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

    class AdminUser extends User{
        public $level;

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }
    }



    $userOne = new User("brian", "brian@chrisemail.com");
    $userTwo = new User("pete", "pete@chrisemail.com");
    $userThree = new AdminUser("chris", "owner@chrisemail.com", 3);

    echo $userThree->username . "<br>";
    echo $userThree->getEmail() . "<br>";
    echo $userThree->level . "<br>";

    
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