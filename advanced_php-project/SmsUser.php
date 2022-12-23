<?php

class SmsUser extends Notifier{
        public function __constract(){
                $this->notification = new SmsNotify();
        }
}