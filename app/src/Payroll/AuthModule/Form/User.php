<?php

namespace Payroll\AuthModule\Form;

class User extends \Strukt\Contract\Form{
	
	protected function validation(){

		$service = $this->getValidatorService();

		$this->setMessage("username", $service->getNew($this->get("username"))->isNotEmpty());
		$this->setMessage("password", $service->getNew($this->get("password"))->isNotEmpty());
	}
}