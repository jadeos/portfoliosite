<?php
// system/application/controllers/hello.php

class Hello extends Controller {

	function world() {
		echo "Hello CodeIgniter!";
	}
	
	function crud_test() {

		// CREATE
		 $u = new User;
		 $u->username = 'waynem';
		 $u->password = 'password';
		 $u->first_name = 'Wayne';
		$u->last_name = 'Murphy';
		 $u->save();
		 echo "Added 1 user";


		// READ
		// $user_id = 4;
		// $u = Doctrine::getTable('User')->find($user_id);
		// echo "Username: ";
		// echo $u->username;
		// echo nl2br("\n Read one user");



		// UPDATE
		// $user_id = 13;
		// $u = Doctrine::getTable('User')->find($user_id);
		// $u->password = 'mynewpassword';
		// $u->save();
		// echo "Updated 1 user";


		// DELETE
		// $user_id = 12;
		// $u = Doctrine::getTable('User')->find($user_id);
		// $u->delete();
		// echo "Deleted 1 user";


	}}
