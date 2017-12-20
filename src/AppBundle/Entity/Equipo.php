<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo", indexes={@ORM\Index(name="fk_Equipo_Usuario_idx", columns={"Usuario_idUsuario"})})
 * @ORM\Entity
 */
class Equipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idequipo;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Usuario_idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $usuariousuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Mantenimiento", mappedBy="equipoequipo")
     */
    private $mantenimientomantenimiento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mantenimientomantenimiento = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idequipo
     *
     * @return integer
     */
    public function getIdequipo()
    {
        return $this->idequipo;
    }

    /**
     * Set usuariousuario
     *
     * @param \AppBundle\Entity\Usuario $usuariousuario
     *
     * @return Equipo
     */
    public function setUsuariousuario(\AppBundle\Entity\Usuario $usuariousuario = null)
    {
        $this->usuariousuario = $usuariousuario;

        return $this;
    }

    /**
     * Get usuariousuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuariousuario()
    {
        return $this->usuariousuario;
    }

    /**
     * Add mantenimientomantenimiento
     *
     * @param \AppBundle\Entity\Mantenimiento $mantenimientomantenimiento
     *
     * @return Equipo
     */
    public function addMantenimientomantenimiento(\AppBundle\Entity\Mantenimiento $mantenimientomantenimiento)
    {
        $this->mantenimientomantenimiento[] = $mantenimientomantenimiento;

        return $this;
    }

    /**
     * Remove mantenimientomantenimiento
     *
     * @param \AppBundle\Entity\Mantenimiento $mantenimientomantenimiento
     */
    public function removeMantenimientomantenimiento(\AppBundle\Entity\Mantenimiento $mantenimientomantenimiento)
    {
        $this->mantenimientomantenimiento->removeElement($mantenimientomantenimiento);
    }

    /**
     * Get mantenimientomantenimiento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMantenimientomantenimiento()
    {
        return $this->mantenimientomantenimiento;
    }

    public function getAlias(){
        return "Equipo ".$this->idequipo;
    }
    
}
