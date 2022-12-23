<?php

class EmailUser extends Notifier{
        public function __constract(){
                $this->notification = new EmailNotify();
        }
}