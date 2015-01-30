<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;


class SecurityController extends Controller
{


	public function loginAction(Request $request)
	{
		$session = $request->getSession();

		// login error als er error is
		if($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {

			$error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR
				);
		} elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {

			$error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
			$session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
		} else {
			$error ='';
		}

		return $this->render(
			'ShopBundle:Security:login.html.twig',
			array(
				'error' => $error,
				)
			);
	}

}