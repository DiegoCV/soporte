<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // Permite definir que tipo de metodo vamos a usar EJM(POST GET DELETE PUT)
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\Perifericos;
use AppBundle\Entity\Departamento;
use AppBundle\Entity\Equipo;

class PerifericoController extends Controller
{

	/**
     * @Route("/listar", name="listar")
     * Method({'GET'})
     */
	public function listar(Request $request){            
		$perifericos = $this->getDoctrine()->getRepository('AppBundle:Perifericos')->findAll();
		return $this->render('listado.html.twig', array('perifericos' => $perifericos));
	}
        public function buscar(Request $request){
            $id=$request->get('buscarPerifericos','idPeriferico');
		$periferico = $this->getDoctrine()->getRepository('AppBundle:Perifericos')->find($id);
		return $this->render('listado.html.twig', $periferico);
	}
        public function insertar(Request $request){
            $perifericos=new Perifericos();
            $perifericos->setIsimpresora($request->get('insertarPerifericos','isImpresora'));            
            $idDep=$request->get('insertarPerifericos','idDepartamento');
            if($idDep!=NULL){
                $dep=new Departamento();
               $dep->setIddepartamento($idDep) ;
            }else{
                $dep=null;
            }            
            $perifericos->setDepartamentodepartamento($dep);
            
            $idEquipo=$request->get('insertarPerifericos','idDepartamento');
            if($idEquipo!=NULL){
                $equipo=new Equipo();
               $equipo->setIdEquipo($idDep) ;
            }else{
                $equipo=null;
            }            
            $perifericos->setEquipoequipo($equipo);
            $em = $this->getDoctrine()->getManager();
            $em->persist($perifericos);
            $em->flush();            
        }
        public function modificar(Request $request){
            $id=$request->get('modificarPerifericos','idPeriferico');
            $perifericos=$this->getDoctrine()->getRepository('AppBundle:Perifericos')->find($id);                                   
            $idDep=$request->get('modificarPerifericos','idDepartamento');
            if($idDep!=NULL){
                $dep=new Departamento();
               $dep->setIddepartamento($idDep) ;
            }else{
                $dep=null;
            }            
            $perifericos->setDepartamentodepartamento($dep);            
            $idEquipo=$request->get('modificarPerifericos','idDepartamento');
            if($idEquipo!=NULL){
                $equipo=new Equipo();
               $equipo->setIdEquipo($idDep) ;
            }else{
                $equipo=null;
            }            
            $perifericos->setEquipoequipo($equipo);
            $em = $this->getDoctrine()->getManager();
            $em->persist($perifericos);
            $em->flush();            
        }
        public function elimiinar(Request $request){
            $id=$request->get('eliminarPerifericos','idPeriferico');
            $perifericos=$this->getDoctrine()->getRepository('AppBundle:Perifericos')->find($id);                             
            $em = $this->getDoctrine()->getManager();
            $em->remove($perifericos);
            $em->flush();            
        }
}
