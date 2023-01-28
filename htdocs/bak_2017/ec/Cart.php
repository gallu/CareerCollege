<?php
// Cart.php

class Cart {
    //
    public function set(Books $obj, $num) {
		$id = $obj->getData()['id'];
        $this->data[$id] = [$obj, $num];
	}
	//
	public function getData() {
		$data = [];
		foreach($this->data as $datum) {
	        $wk = $datum[0]->getData();
	        $wk['num'] = $datum[1];
	        $data[] = $wk;
		}
		//
		return $data;
	}
	// XXX 「値段」の把握タイミングに注意
	public function getTotal() {
		//
		$totla = 0;
		foreach($this->getData() as $datum) {
			$total += $datum['price'] * $datum['num'];
		}
		return $total;
	}

//
private $data;
}
