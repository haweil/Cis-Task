<?php

    class calc 
    {
        public $operator;
        public $num1;
        public $num2;
    
    public function __construct(string $op ,int $one,int $two)
    {
        $this->operator=$op;
        $this->num1=$one;
        $this->num2=$two;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this-> num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result =$this-> num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result =$this->num1 / $this->num2;
                return $result;
                break ;
            case 'mul':
                $result =$this->num1 * $this->num2;
                return $result;
                break;
            case 'mod':
                $result =$this->num1 % $this->num2;
                return $result;
                break;
            default:
                echo "Error!";
                break;
        }
    }
    }

?>