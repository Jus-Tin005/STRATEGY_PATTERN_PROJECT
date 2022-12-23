<?php

require_once "./Notify.php";
require_once "./EmailNotify.php";
require_once "./PhoneNotify.php";
require_once "./SmsNotify.php";
require_once "./Notifier.php";
require_once "./EmailUser.php";
require_once "./PhoneUser.php";
require_once "./SmsUser.php";



class User{
        public function __constract($type){
               /*  $obj = new EmailNotify();
                $obj->send(); */



        /*
        $obj = null;

        switch($type){
                case "Email" : $obj = new EmailNotify(); break;
                case "Phone" : $obj = new PhoneNotify(); break;
                case "Sms" : $obj = new  SmsNotify(); break;
                default :
                echo "Email, Phone and Sms are set to be here !";
        }
        $obj->send();
        */


        /*
        $obj = null;
        $obj->send();
        */


        /*
        $notifier = new Notifier();
        $notifier->changeNotiType(new EmailNotify());
        $notifier->sendNow();
        */


        /*

        $notifier = new  Notifier();
        $obj = null;
        switch($type){
                case "Email" :  $obj =  new EmailNotify(); break;
                case "Phone" :  $obj = new PhoneNotify(); break;
                case "Sms" :    $obj = new SmsNotify(); break;
                default :
                echo "Email Phone and Sms are set to be here !!!";
        }

        $notifier->changeNotiType($obj);
        $notifier->sendNow();

        */


        /*

        $obj = new EmailNotify();
        $obj->sendNow();


        echo "<br/>";

        $dd = new PhoneNotify();
        $dd->sendNow();

        echo "<br/>";

        $obj->sendNow();

        echo "<br/>";

        $obj->changeNotiType(new EmailNotify());
        $obj->sendNow();

        echo "<br/>";

        $obj->changeNotiType(new PhoneNotify());
        $obj->sendNow();

        */

        $obj = new EmailUser();
        $obj->changeNotiType(new PhoneNotify());
        $obj->sendNow();



        }
}

/*
new User("Email");
echo "<br>";
new User("Phone");
echo "<br>";
new User("Sms");
*/


new User;



