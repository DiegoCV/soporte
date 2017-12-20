<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Problema;

use AppBundle\EquipoController;
use AppBundle\Entity\Equipo;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProblemaController extends Controller
{

	public function listar(Request $request){            
		$problema = $this->getDoctrine()->getRepository('AppBundle:Problema')->findAll();
		return $this->render('listado.html.twig', array('problema' => $problema));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarProblema','idProblema');
		$problema = $this->getDoctrine()->getRepository('AppBundle:Problema')->find($id);
		return $this->render('listado.html.twig', $problema);
	}
        public function insertar(Request $request){
            $problema=new Problema();
            //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($problema);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarProblema','idProblema');
            $problema=$this->getDoctrine()->getRepository('AppBundle:Problema')->find($id);                                   
           //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($problema);
            $em->flush();            
        }
        public function eliminar(Request $request){
            $id=$request->get('eliminarProblema','idProblema');
            $problema=$this->getDoctrine()->getRepository('AppBundle:Problema')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($problema);
            $em->flush();            
        }

        /**
        * @Route("/crearFormProblema", name="fProblema")
        */
        public function crearFormulario(Request $request){
        $problema = new Problema();
        $problema->setFechaRegistro(new \DateTime());

        $equipos = $this->getDoctrine()->getRepository('AppBundle:Equipo')->findAll();
    
       // var_dump(count($equipos));  
 
        $form = $this->createFormBuilder($problema)
            ->add('problema', TextType::class)
            ->add('fechaRegistro', DateType::class)
            ->add('equipoequipo', ChoiceType::class, array(
                'choices'   => $equipos,
                'required'  => true,
            ),array('label' => 'Equipos'))
            ->add('save', SubmitType::class, array('label' => 'Enviar'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $problema = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($problema);
                $em->flush();
               return  $this->render('login2.html.twig');
            }
        }
 
        return $this->render('login.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
        public function filtrarArray($equipos){
            
            $a=array();
            
            for ($i=0; $i < count($equipos) ; $i++) { 
                array_push($a,$equipos[$i]->getAlias(),$equipos[$i]->getIdequipo());
            }

            return $a;

        }

}
