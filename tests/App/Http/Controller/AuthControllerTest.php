<?php 

namespace App\Http\Controller;

class AuthControllerTest extends \TestCase
{
 public function testLogin()
 {
 	//Sets
 	$data=[
 	'username'=>'kovero',
 	'password'=>bcrypt('kovero123'),
 	];

 	$this->post('auth/login',$data);

 	//Asserts
 	$this->seeStatusCode(200);
 	$this->seeJson([
 		'username'=>'kovero',
 		]);
 }
}

