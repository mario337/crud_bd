
<?php
class usuario{
    private $db;

    public function_construct($conexao) {
        this->db = $conexao;
    }

    public function listarusuario(){
        $usuarios = array();

        //prepare a consulta SQL para listar todos os usuarios
        $sql = "SELECT * FROM usuarios";

        // preparar e executar a consulta 
        $result = $this->db->query($sql);

        if ($result){
            while ($row = $result->fetch_assoc()){
                $usuarios[] = $row;
            }
            $result->close();
        }
        return $usuarios;
    }
}
?>