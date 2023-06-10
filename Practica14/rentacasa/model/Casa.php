<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Casa
 *
 * @author eliud
 */
class Casa {

    private $db;
    private $casas;
    private $casa;

    public function __construct() {
        $this->db = Conecta::conexion();
        $this->casas = array();
    }

    public function getCasas() {
        $consulta=$this->db->query("SELECT CONCAT(p.nombre,'
',p.apellidop,' ', p.apellidom) f_nombre, p.email f_email,
CONCAT(c.estado,' ',c.municipio,' ',c.cp,' ',c.colonia, '
',c.calle,' ',c.numero) c_direccion, c.habitaciones,
c.descripcion , c.costo, c.idcasa, c.idanfitrion, c.foto c_foto,
TIMESTAMPDIFF(YEAR, a.fechamayor, CURDATE()) hijomayor,
TIMESTAMPDIFF(YEAR, a.fechamenor, CURDATE()) hijomenor,
a.numerohijos, a.foto a_foto FROM casa c INNER JOIN anfitrion a ON
c.idanfitrion = a.idanfitrion INNER JOIN persona p ON p.idpersona =
a.idpersona;");
        while ($filas = $consulta->fetch_assoc()) {
            $this->casas[] = $filas;
        }
        return $this->casas;
    }

    public function getCasaById($idcasa) {
        $consulta = $this->db->query("select * from casa where idcasa =$idcasa");
        if ($filas = $consulta->fetch_assoc()) {
            $this->casa = $filas;
        }
        return $this->casa;
    }

}
