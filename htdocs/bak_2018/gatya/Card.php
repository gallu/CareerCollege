<?php  // Card.php

require_once('./DB.php');

class Card {
    //
    public function __construct($card_id) {
        //
        $dbh = DB::getHandle();
        //
        $sql = 'SELECT * FROM cards WHERE card_id = :card_id ;';
        $pre = $dbh->prepare($sql);
        //
        $pre->bindValue(':card_id', $card_id);
        //
        $r = $pre->execute();
        $this->data = $pre->fetch();
    }

    //
    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        // else
        return '';
        //throw new ErrorException($name . 'は存在しません');
    }

//
private $data;
}

