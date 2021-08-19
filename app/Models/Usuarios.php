<?php namespace App\Models;
use CodeIgniter\Model;

class Usuarios extends Model
{
	/*public function obtenerUsuario($data){
		$Usuario = $this->db->table('clientes');
		$Usuario->where('dni_cliente');
		return $Usuario->get()->getResultArray();
	}*/

	protected $table = 'clientes';
	protected $allowedFields= ['dni_cliente'];


}