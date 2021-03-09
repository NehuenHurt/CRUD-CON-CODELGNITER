<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		$crud=new CrudModel();
		$datos=$crud->listarnombres();
		$data=[
			'datos'=>$datos
		];
		return view('listado',$data);
	}
	public function crear(){
		$datos=[
			
			"nombre"=>$_POST['nombre'],
			"paterno"=>$_POST['paterno'],
			"materno"=>$_POST['materno'],
		];
		$crud=new CrudModel();
		echo $crud->insertar($datos);
		return redirect()->to(base_url().'/');

	}
	public function actualizar(){
		$datos=[
			
			"nombre"=>$_POST['nombre'],
			"paterno"=>$_POST['paterno'],
			"materno"=>$_POST['materno'],
		];
		$idnombre=$_POST['idNombre'];
		$crud= new CrudModel();
		$respuesta=$crud->actualizar($datos,$idnombre);
		return redirect()->to(base_url().'/');

	}
	public function obtenernombre($idnombre){
		$data=['id_nombre'=>$idnombre];
		$crud=new CrudModel();
		$respuesta=$crud->obtenernombre($data);
		$datos=['datos'=>$respuesta];
		return view('actualizar',$datos);

		
	}
	public function eliminar($idnombre){
		$crud= new CrudModel();
		$data=["id_nombre"=>$idnombre];
		
		$respuesta=$crud->eliminar($data);
		return redirect()->to(base_url().'/');


	}
}
