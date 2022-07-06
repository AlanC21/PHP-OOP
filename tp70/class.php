<html>
<head>
<title>PHP OOP/title>
</head>
<body>
<?php
class cEmpleado {
  private $nombre;
  private $horas;
  private $sueldoHoras;
  function __construct($nom,$hrs,$sueldo){
    $this->nombre = $nom;
    $this->horas = $hrs;
    $this->sueldoHoras = $sueldo;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
  public function getHoras()
  {
    return $this->horas;
  }
  public function getSueldoH()
  {
    return $this->sueldoH;
  }
 
  public function calcularSueldo()
  {
    return $this->horas * $this->sueldoHoras;
  }
}
$empleado = new Empleado($_POST['nombre'], $_POST['horas'], $_POST['salario']);
echo "Nombre: " . $empleado->getNombre() . "<br>";
echo "Horas: " . $empleado->getHoras() . "<br>";
echo "Sueldo por hora: " . $empleado->getSueldoH() . "<br>";
echo "Sueldo total: " . $empleado->calcularSueldo() . "<br>";
?>
</body>
</html>
