<?php

namespace Simple\ProfileBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Simple\ProfileBundle\Entity\User;
use Simple\ProfileBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function searchCitiesAction() {
                         
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $state = $request->request->get('state');
        
        
        $em = $this->getDoctrine()->getManager();        
        $cities = $em->getRepository('SimpleProfileBundle:City')->getCitiesByState($state);

        $output = "";
        
        foreach($cities as $c)
        {           
            $output .= '<option value="' . $c->getId() . '">' . $c->getName() . '</option>';
        }
        
        return new Response($output);            
    }
    
    /**
     * Creates a new User entity.
     *
     * @Route("/register/user", name="user_create")
     * @Method("POST")
     * @Template("SimpleProfileBundle:Security:register.html.twig")
     */
    
    public function createAction(Request $request)
    {
        $user  = new User();            
        $em = $this->getDoctrine()->getManager();        
        $city = $em->getRepository('SimpleProfileBundle:City')->find($request->request->get('city'));
                       
        $user->setCity($city);
        $form = $this->createForm(new UserType(), $user);
        $form->bind($request);  
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword($user->getPassword(), $user->getSalt()));              
            
            $em->persist($user);
            $em->flush();
            
            return $this->redirect($this->generateUrl('login'));
        }
        
        $states = $em->getRepository('SimpleProfileBundle:State')->findAll();        
        $cities = $em->getRepository('SimpleProfileBundle:City')->getCitiesByState($states[0]->getId());
        
        return array(
                    'states' => $states,
                    'cities' => $cities,
                    'form'   => $form->createView(),
        );      
    }
    

    /**
     * Finds and displays a User entity.
     *
     * @Route("user/", name="user_edit")
     * @Method("GET")
     * @Template("SimpleProfileBundle:Security:edit.html.twig")
     */
    public function editAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id = $this->get('security.context')->getToken()->getUser()->getId();
        $user = $em->getRepository('SimpleProfileBundle:User')->find($id);     

        if (!$user) {
            throw $this->createNotFoundException('Unable to find User.');
        }        
                
        $form   = $this->createForm(new UserType(), $user);
        
        $em = $this->getDoctrine()->getManager();
        
        $states = $em->getRepository('SimpleProfileBundle:State')->findAll();             
        
        $cities = $em->getRepository('SimpleProfileBundle:City')->getCitiesByState($user->getCity()->getState()->getId());      
        
        $deleteForm = $this->createDeleteForm($id);
        
        return $this->render('SimpleProfileBundle:User:edit.html.twig', array(
            'error' => null,
            'success' => null,
            'message' => null,
            'states' => $states,
            'state' => $user->getCity()->getState()->getId(),            
            'cities' => $cities,            
            'city' => $user->getCity()->getId(),
            'form'   => $form->createView(),
            'delete_form' => $deleteForm->createView(),               
        ));         
    }    

    
    /**
     * Edits an existing User entity.
     *
     * @Route("/user/update", name="user_update")
     * @Method("POST")
     * @Template("SimpleProfileBundle:User:edit.html.twig")
     */
    public function updateAction(Request $request)
    {        
        $em = $this->getDoctrine()->getManager();
        $id = $this->get('security.context')->getToken()->getUser()->getId();
        $user = $em->getRepository('SimpleProfileBundle:User')->find($id);     

        if (!$user) {
            throw $this->createNotFoundException('Unable to find User.');
        }    
        
        $city = $em->getRepository('SimpleProfileBundle:City')->find($request->request->get('city'));
                       
        $user->setCity($city);
        $form = $this->createForm(new UserType(), $user);
        $form->bind($request);  
               
        $error = null;
        $success = null;
        $message = null;
                    
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword($user->getPassword(), $user->getSalt()));              
            
            $em->persist($user);
            $em->flush();  
            
            $success = true;
            $message = "Update done successfully!!!!";           
        }
        else
        {
            $error = true;
            $message = "Update failed, there are some errors!!!!";                         
        }
        
        $states = $em->getRepository('SimpleProfileBundle:State')->findAll();              
        
        $cities = $em->getRepository('SimpleProfileBundle:City')->getCitiesByState($city->getState()->getId());
        
        $deleteForm = $this->createDeleteForm($id);
        
        return array(
                    'error' => $error,
                    'success' => $success,
                    'message' => $message,            
                    'states' => $states,
                    'state' => $city->getState()->getId(),
                    'cities' => $cities,
                    'city' => $city->getId(),
                    'form'   => $form->createView(),
                    'delete_form' => $deleteForm->createView(),         
        );   
    }    

   
    /**
     * Deletes a User entity.
     *
     * @Route("/user/delete", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request)
    {
        $id = $this->get('security.context')->getToken()->getUser()->getId();        
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('SimpleProfileBundle:User')->find($id);

            if (!$user) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }
            
            $this->container->get('security.context')->setToken(NULL);            
            
            $em->remove($user);
            $em->flush();           
        }
        
        //return new Response('OK');
        
        return $this->redirect($this->generateUrl('login'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}