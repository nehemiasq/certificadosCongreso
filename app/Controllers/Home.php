<?php namespace App\Controllers;
	use App\Models\Usuarios;
class Home extends BaseController
{
	public function index()
	{	
		return view('vistaLogin');
	}

	public function login_action()
	{
		$model = new Usuarios();

		$result = $model->where('dni_cliente', $this->request->getVar('dni_cliente'))->first(); 	

		if($result !=null){
			if($result['dni_cliente'] == $this->request->getVar('dni_cliente')){
				$data =  [
						'MaterialCongreso' => $result['mate_congreso'],
						'CertCongreso' => $result['cert_congreso'],
						'CertTutorial' => $result['cert_tutorial']
				];
				echo view('vistaMenu', $data);
			}
		}else{
			return 'Lo sentimos, no está registrado para ingresar!';
			//return view('vistaLogin');
			
		}
	}	
	
	
}
