<?php declare(strict_types = 1);

namespace WebChemistry\NetteInterfaces\Factories;

use Nette\Application\UI\Form;

interface SignInFormFactory {

	public function createSignInForm(): Form;

}
