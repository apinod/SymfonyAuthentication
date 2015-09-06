<?php

namespace Simple\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Simple\ProfileBundle\Entity\User;
use Simple\ProfileBundle\Form\UserType;
use \Simple\ProfileBundle\Entity\State;

class SecurityController extends Controller {

    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                    SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
                        'SimpleProfileBundle:Security:login.html.twig', array(
                    // last username entered by the user
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
                        )
        );
    }

    public function registerAction() {   
        
        $entity = new User();
        $form   = $this->createForm(new UserType(), $entity);
        
        $em = $this->getDoctrine()->getManager();
        
        $states = $em->getRepository('SimpleProfileBundle:State')->findAll();
        
        $cities = $em->getRepository('SimpleProfileBundle:City')->getCitiesByState($states[0]->getId());
        
        return $this->render('SimpleProfileBundle:Security:register.html.twig', array(
            'states' => $states,
            'cities' => $cities,
            'form'   => $form->createView(),
        ));                
    }
}

?>
