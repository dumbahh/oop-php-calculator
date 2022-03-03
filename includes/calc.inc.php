<?php

class Calculator {

  public $num1;
  public $num2;
  public $oper;
  public $result;




  public function Calc($num1in, $num2in, $operin) {
    $this->num1 = $num1in;
    $this->num2 = $num2in;
    $this->oper = $operin;

      switch ($this->oper) {
        case 'none':
          $this->result = "Please select method of calculating";
          break;

          case 'add':
            $this->result = $this->num1 + $this->num2;
            break;

            case 'sub':
              $this->result = $this->num1 - $this->num2;
              break;

              case 'mul':
                $this->result = $this->num1 * $this->num2;
                break;

                case 'div':
                  $this->result = $this->num1 / $this->num2;
                  break;

        default:
          echo "error";
          break;

      

      }

      return $this->result;


  }




}
