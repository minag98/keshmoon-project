<?php

include_once 'model.class.php';

class View extends Model
{
    public function showStore(){
        $this->getStore();
       //print_r($this->store_info);
       return $this->store_info;
    }
    public function showStoreWithProduct(){
        $this->leftjoin();
        return $this->leftJoin;
    }
    public function showProductWithStore(){
        $this->rightjoin();
        return $this->rightJoin;
    }
}