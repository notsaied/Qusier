<?php

 class backend{

     const servername = 'localhost';
     const username = 'root';
     const password = '';
     const db = 'qusier';
     const charset = 'utf8';

     private $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
     ];

     protected function connection(){

        try {

          $conn = new PDO('mysql:host='.self::servername.';dbname='.self::db.';charset='.self::charset.'',self::username, self::password,$this->options);

          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          return $conn;

        } catch(PDOException $e) {

          return $e->getMessage();

        }

   }//end connection function

   public function insert($name,$email,$message){

     date_default_timezone_set('Africa/Cairo');

     $time = new DateTime();

     $created_at = $time->format("Y-m-d h:i:s A");

     $result = $this->connection()->prepare('INSERT INTO `messages` (`name`,`email`,`message`,`ip`,`created_at`) VALUES (:name,:email,:message,:ip,:created_at)');

      $result->execute([
    	':name' => $name,
    	':email' => $email,
    	':message' => $message,
    	':ip' => $this->userIP(),
    	':created_at' => $created_at
       ]);

       if($result){
           return 'success';
       }

   }

   public function userIP(){
     switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }

   }

   public function getRandMessage(){

       $sql = $this->connection()->prepare('SELECT id,name,message,created_at FROM messages ORDER BY rand() LIMIT 1');

       $sql->execute();

        if ($data = $sql->fetch()) {

        do {

            $output = ['name'=>$data['name'],'message'=>$data['message']];

            } while ($data = $sql->fetch());

        } else {

            $output = ['name'=>'غير متوفر','message'=>'غير متوفر'];

        }

        return $output;

   }


 } //end Backend Class


 //echo $b->insert('Ahmed Saied','ahmed@gmail.com','second message for lovley city','2020/02/20 18:22:11');

