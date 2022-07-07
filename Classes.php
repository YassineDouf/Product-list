<?php

abstract class Product
{
   protected $sku;
   protected $name;
   protected $price;
   protected $type;
   public function __construct($skuu,$namee,$pricee)
   {
       $this->sku=$skuu;
       $this->name=$namee;
       $this->price=$pricee;
   }
    abstract function setType();
    abstract function getType(); 
     
     public function getSku()
    {
        return $this->sku;
    }
    
     public function getName()
    {
    return $this->name;
    }
    
    public function getPrice()
    {
    return $this->price;
    }
    
  }
   
   
   
   class BOOK extends Product
   {
        protected $weight;
        public function __construct($skuu,$namee,$pricee,$weightt)
        {
          $this->sku=$skuu;
          $this->name=$namee;
          $this->price=$pricee;
          $this->weight=$weightt;
        }
        public function setType()
        {
         $this->type="BOOK";
         }
         public function getType()
        {
            $res= "Weight: ".$this->weight."KG";
            return $res;
        }
         
   }
   
   class DVD extends Product
   {
      protected $size;
      public function __construct($skuu,$namee,$pricee,$sizee)
      {
         $this->sku=$skuu;
         $this->name=$namee;
         $this->price=$pricee;
         $this->size=$sizee;
      }
      public function setType()
      {
       $this->type="DVD";
      }
      
      public function getType()
      {
       $res="Size : ".$this->size."MB";
         return $res;
      }
      
   }
   
   
   
   class FURNITURE extends Product
   {
     protected $height;
     protected $width;
     protected $length;
     public function __construct($skuu,$namee,$pricee,$h,$w,$l)
     {
        $this->sku=$skuu;
        $this->name=$namee;
        $this->price=$pricee;
        $this->height=$h;
        $this->width=$w;
        $this->length=$l;
     }
     public function setType()
     {
        $this->type="FURNITURE";
     }
     
     public function getType()
     {
     $res= "Dimension : ".$this->height."×".$this->width."×".$this->length;
     return $res;
     }
  }
   