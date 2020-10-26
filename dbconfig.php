<?php
   require __DIR__.'/vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

   // This assumes that you have placed the Firebase credentials in the same directory
   // as this PHP file.
   $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/iotsy-cfb35-firebase-adminsdk-18z6d-b034001133.json');
   $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->withDatabaseUri('https://iotsy-cfb35.firebaseio.com')
      ->create();
      
   $database = $firebase->getDatabase();
?>