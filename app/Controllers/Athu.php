<?php namespace App\Controllers;
use App\Models\PizzaModel;
class Athu extends BaseController
{
	public function index() 
	
	{
		return view('auths/login');
	
}

	public function signinAcc() {
		
	
		{
		return view('auths/register');
		}

	}
	

	public function registerAcc() {
		
		helper(['form']);
		$data = [];
		if($this->request->getMethod() =="post"){
			$rules = [
				'email' =>'required',
				'password'=>'required',
				'address'=>'required'
			];
			if($this->validate($rules)){
				$auth = new UserModel();
				$email = $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$address = $this->request->getVar('address');
				$userData = array(
			  		'email'=>$email,
			  		'password'=>$password,
			  		'address'=>$address
				);
				$auth->register($userData);
				return redirect()->to("/pizza");
				// echo "success";

			}else{
				$data['validation'] = $this->validator;
				return view('auths/register',$data);
			}
		}
	}

	



	//--------------------------------------------------------------------

}





