<?php 

class Vehiculo{

    private $pdo;

    private $ve_id;
    private $ve_placa;
    private $ve_tipo;
    private $ve_marca;
    private $ve_color;
    private $ve_entrada;
    private $ve_salida;
    private $ve_estado;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getVe_id() : ?int{ //'?int' indica que el valor es un int y no es nulo
        return $this->ve_id;
    }

    public function setVe_id(int $id){
        $this->ve_id=$id;
    }

    public function getVe_placa() : ?string{ 
        return $this->ve_placa;
    }

    public function setVe_placa(string $placa){
        $this->ve_placa=$placa;
    }

    public function getVe_tipo() : ?string{ 
        return $this->ve_tipo;
    }

    public function setVe_tipo(string $tipo){
        $this->ve_tipo=$tipo;
    }

    public function getVe_marca() : ?string{ 
        return $this->ve_marca;
    }

    public function setVe_marca(string $marca){
        $this->ve_marca=$marca;
    }

    public function getVe_color() : ?string{ 
        return $this->ve_color;
    }

    public function setVe_color(string $color){
        $this->ve_color=$color;
    }

    public function getVe_entrada() : ?string{ 
        return $this->ve_entrada;
    }

    public function setVe_entrada(string $entrada){
        $this->ve_entrada=$entrada;
    }

    public function getVe_salida() : ?DateTime{ 
        return $this->ve_salida;
    }

    public function setVe_salida(DateTime $salida){
        $this->ve_salida=$salida;
    }

    public function getVe_estado() : ?int{ 
        return $this->ve_estado;
    }

    public function setVe_estado(int $estado){
        $this->ve_estado=$estado;
    }

    public function Estado(){
        try{
            $consulta = $this->pdo->prepare("SELECT SUM(ve_estado) 
            as Estado FROM vehiculos;");

            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM
            vehiculos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM
            vehiculos WHERE ve_id=?;");
            $consulta->execute(array($id));            
            $r = $consulta->fetch(PDO::FETCH_OBJ);

            if ($r) {
                $v = new Vehiculo();
                $v->setVe_id($r->ve_id);
                $v->setVe_placa($r->ve_placa);
                $v->setVe_tipo($r->ve_tipo);
                $v->setVe_marca($r->ve_marca);
                $v->setVe_color($r->ve_color);
                $v->setVe_entrada($r->ve_entrada);
                $v->setVe_estado($r->ve_estado);

                return $v;
            } else {
                return null; // No se encontró ningún registro con el ID especificado
            }
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Vehiculo $v){
        try{
            $consulta="INSERT INTO vehiculos(ve_placa,ve_tipo,ve_marca,
            ve_color,ve_entrada, ve_estado) VALUES(?,?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $v->getVe_placa(),
                        $v->getVe_tipo(),
                        $v->getVe_marca(),
                        $v->getVe_color(),
                        $v->getVe_entrada(),
                        $v->getVe_estado()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Vehiculo $v){
        try {
            $consulta = "UPDATE vehiculos SET 
                ve_placa = ?,
                ve_tipo = ?,
                ve_marca = ?,
                ve_color = ?,
                ve_entrada = ?,
                ve_estado = ?
                WHERE ve_id = ?";
    
            $this->pdo->prepare($consulta)
                ->execute(array(
                    $v->getVe_placa(),
                    $v->getVe_tipo(),
                    $v->getVe_marca(),
                    $v->getVe_color(),
                    $v->getVe_entrada(),
                    $v->getVe_estado(),
                    $v->getVe_id()
                ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    


}