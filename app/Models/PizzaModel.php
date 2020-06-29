<?php namespace App\Models;
use CodeIgniter\Model;

class PizzaModel extends Model
{
    protected $table      = 'peperoni';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'ingradient ','price'];

    // public function listPizza($user)
    // {
    //     $this->insert([
    //             'name'=>$user['name'],
    //             'ingradient'=>$user['ingradient'],
    //             'price'=>$user['price'],
               
            
    //     ]);
    // }

}

