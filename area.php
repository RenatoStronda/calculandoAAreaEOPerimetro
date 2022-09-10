<?php
class Area {
    private $l;
    private $c;
              
    public function set_l($l)
    {
        $this->l = $l;
    }
    public function set_c($c)
    {
        $this->c = $c;
    }
    public function area1()
    {
        return $this->l * $this->c;
    }
    public function perimetro()
    {
        return $this->l + $this->c + $this->l + $this->c; 
    }
    public function get_l()
    {
        return $this->l;
    }
    public function get_c()
    {
        return $this->c;
    } 
}

$area1 = new Area();
$area1->set_l(10);
$area1->set_c(2);
echo "A Área É: " . $area1->area1() . "<br>";
$perimetro = new Area();
$perimetro->set_l(10);
$perimetro->set_c(2);
echo "O Perímetro É: " . $perimetro->perimetro() . "<br>";
?>