<?php

class PhoneUse extends Notifier{
        public function __constract(){
                $this->notification = new PhoneNotify();
        }
}