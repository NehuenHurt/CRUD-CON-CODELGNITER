<?php namespace App\Models;
use CodeIgniter\Model;
class CrudModel extends Model {
    public function listarnombres(){
        $registro = $this->db->query("SELECT * FROM t_personas");
        return $registro->getResult();
    }
    public function insertar($datos){
        $nombres=$this->db->table('t_personas');
        $nombres->insert($datos);

        return $this->db->insertid();

    }
    public function obtenernombre($data){
        $nombre=$this->db->table('t_personas');
        $nombre->where($data);
        return $nombre->get()->getResultArray();
    }
    public function actualizar($data,$idnombre){
        $nombre=$this->db->table('t_personas');
        $nombre->set($data);
        $nombre->where('id_nombre',$idnombre);
        return $nombre->update();


    }
    public function eliminar($data){
        $nombre=$this->db->table('t_personas');
        $nombre->where($data);
        return $nombre->delete();
        
    }

}