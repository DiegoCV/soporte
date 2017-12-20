<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Departamento;
use AppBundle\Entity\Equipo;

class DepartamentoController extends Controller
{

	/**
     * @Route("/listar", name="listar")
     * Method({'GET'})
     */
	public function listar(Request $request){            
		$departamento = $this->getDoctrine()->getRepository('AppBundle:Departamento')->findAll();
		return $this->render('listado.html.twig', array('departamento' => $departamento));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarDepartamento','idDepartamento');
		$departamento = $this->getDoctrine()->getRepository('AppBundle:Departamento')->find($id);
		return $this->render('listado.html.twig', $departamento);
	}
        public function insertar(Request $request){
            $departamento=new Departamento();
            //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($departamento);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarDepartamento','idDepartamento');
            $departamento=$this->getDoctrine()->getRepository('AppBundle:Departamento')->find($id);                                   
           //insertar cosas
            $em = $this->getDoctrine()->getManager();
            $em->persist($departamento);
            $em->flush();            
        }
        public function elimiinar(Request $request){
            $id=$request->get('eliminarDepartamento','idDepartamento');
            $departamento=$this->getDoctrine()->getRepository('AppBundle:Departamento')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($departamento);
            $em->flush();            
        }
}
