<?php
class Calculadora {
    private $v1;
    private $v2;
              
    public function set_v1($v1)
    {
        $this->v1 = $v1;
    }
    public function set_v2($v2)
    {
        $this->v2 = $v2;
    }
    public function soma()
    {
        return $this->v1 + $this->v2;
    }
    public function subtrair()
    {
        return $this->v1 - $this->v2;
    }
    public function multiplicar()
    {
        return $this->v1 * $this->v2;
    }
    public function divisao()
    {
        return $this->v1 / $this->v2;
    }
    public function get_v1()
    {
        return $this->v1;
    }
    public function get_v2()
    {
        return $this->v2;
    } 
}
$soma = new Calculadora();
$soma->set_v1(10);
$soma->set_v2(2);
echo "A Soma É: " . $soma->soma() . "<br>";
$subtrair = new Calculadora();
$subtrair->set_v1(10);
$subtrair->set_v2(2);
echo "A Subtração É: " . $subtrair->subtrair() . "<br>";
$multiplicar = new Calculadora();
$multiplicar->set_v1(10);
$multiplicar->set_v2(2);
echo "A Multiplicação É: " . $multiplicar->multiplicar() . "<br>";
$divisao = new Calculadora();
$divisao->set_v1(10);
$divisao->set_v2(2);
echo "A Divisão É: " . $divisao->divisao() . "<br>";
?>