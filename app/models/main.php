<?php defined('IN_APP') or die('Get out of here');

class Main_model {
    public function __construct() {
        echo 'test';
        echo $this->database->select('everything')->from('google')->fetch();
    }
}