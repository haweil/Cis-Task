<?php
 /* lesson 12 
 // scope resolution
    class FirstClass
    {
     const EXAMPLE="You Can't Change this";

     public static function test ()
      {
        echo self ::EXAMPLE;
      }
    }
    FirstClass::test();
   class SecondClass extends FirstClass
   {
    public static $StaticProperty = "This is a static property";

    public static function anothertest()
        {
        echo parent::EXAMPLE;
        echo self::$StaticProperty;
        }
   }
  echo SecondClass::anothertest()
  */
// lesson 13 
// interface

interface PaymentInterface 
  {
    public function paynow();
  }

 interface LoginInterface 
  {
    public function loginfirst();

  }
 class Paypal implements PaymentInterface , LoginInterface
    {
      public function paynow(){}
      public function loginfirst(){}
      public function makeSecurePayment()
        {
            $this->paynow();
            $this->loginfirst();

        }
    }

 class BankTransfer implements PaymentInterface , LoginInterface
    {
      public function paynow(){}
      public function loginfirst(){}
      public function makeSecurePayment()
        {
            $this->paynow();
            $this->loginfirst();

        }
    }

  class Visa implements PaymentInterface
   {
     public function paynow(){}
     public function makePayment()
      {
        $this->paynow();
      }
   }
  class Cash implements PaymentInterface
   {
     public function paynow(){}
     public function makePayment()
      {
        $this->paynow();
      }
   }

  class BuyProduct
   {
     public function pay  (PaymentInterface $paymenttype)
     {
        $paymenttype->makePayment();
     }
     
     public function makeSecurePayment (LoginInterface $paymenttype)
     {
        $paymenttype->makeSecurePayment();
     }
   }
   $VisaPayment =new Visa();

   $CashPayment =new Cash();

   $paypalPayment=new paypal();

   $BankPayment =new BankTransfer();
   
   $buyproduct = new BuyProduct();

   $buyproduct->pay($VisaPayment);

   $buyproduct->pay($CashPayment);

   $buyproduct->makeSecurePayment($paypalPayment);

   $buyproduct->makeSecurePayment($BankPayment);
?>