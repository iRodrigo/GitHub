<?php

class UsersController extends AppController
{

	public $helpers = array ('Html', 'Form');

	public $name = 'Users';

	public $scaffold = 'admin'; 

	public function admin_login() 
	{
		if ($this->Auth->login()) 
		{ 
		  $this->redirect($this->Auth->redirect()); 
		}
		else 
		{ 
		   //$this->Session->setFlash('Dados incorretos!'); 
		}
	}

	public function admin_logout()
	{ 
      $this->redirect($this->Auth->logout()); 
    } 

}
