<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['email', 'password','address'];

//     public function registerForm($auth)
// {
//     $this->insert([
            
//             'email'=>$student['email'],
//             'password'=>$student['password'],
//             'address'=>$student['address'],  
        
//     ]);
// }

// function validate()
// 	{
// 		$arr['email'] = $this->input->post('email');
// 		$arr['password'] = md5($this->input->post('password'));
// 		$arr['address'] = ($this->input->post('address'));
// 		return $this->db->get_where('admins',$arr)->row();
// 	}

}

