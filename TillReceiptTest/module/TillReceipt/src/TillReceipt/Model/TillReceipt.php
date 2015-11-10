<?php

namespace TillReceipt\Model;

 class TillReceipt
 {
     public $data;
     public $subTotal = 0;
     public $discountsTotal = 0;
     public $total = 0;

     public function loadData($path = null){
         //echo getcwd();
        if($path == null){
            $path = getcwd().'/data/data.json';
        }
        //echo $path;
        $data_file = file_get_contents($path);
        //print_r($data_file);
        //die;
        $data = json_decode($data_file);
        // print_r($data);
        $this->data = $data->data;
     }

     public function countSubtotal($data = null)
     {
        if(!empty($data)){
            $this->data = $data;
        }

        foreach($this->data->items as $rec){
            $this->subTotal += (float)$rec;
        }
     }
     public function countTotal($data = null)
     {
        if(!empty($data)){
            $this->data = $data;
        }

        $this->total = $this->subTotal - $this->discountsTotal;

     }
     public function countDiscounts(){

//*
        foreach ( $this->data->discounts as $rec){
            $this->discountsTotal += (float)$rec;
        }
        //*/
     }
     public function getResult(){
         //die('trigered');
         $this->loadData();
         $this->countDiscounts();
         $this->countSubtotal();
         $this->countTotal();

         //$this->countSubtotal();

        return $this;
     }
 }

 ?>
