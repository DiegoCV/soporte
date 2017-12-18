<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Problema
 *
 * @ORM\Table(name="problema", indexes={@ORM\Index(name="fk_Problema_Equipo1_idx", columns={"Equipo_idEquipo"})})
 * @ORM\Entity
 */
class Problema
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProblema", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproblema;

    /**
     * @var string
     *
     * @ORM\Column(name="problema", type="string", length=500, nullable=true)
     */
    private $problema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Equipo_idEquipo", referencedColumnName="idEquipo")
     * })
     */
    private $equipoequipo;



    /**
     * Get idproblema
     *
     * @return integer
     */
    public function getIdproblema()
    {
        return $this->idproblema;
    }

    /**
     * Set problema
     *
     * @param string $problema
     *
     * @return Problema
     */
    public function setProblema($problema)
    {
        $this->problema = $problema;

        return $this;
    }

    /**
     * Get problema
     *
     * @return string
     */
    public function getProblema()
    {
        return $this->problema;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return Problema
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     *
     * @return Problema
     */
    public function setEquipoequipo(\AppBundle\Entity\Equipo $equipoequipo = null)
    {
        $this->equipoequipo = $equipoequipo;

        return $this;
    }

    /**
     * Get equipoequipo
     *
     * @return \AppBundle\Entity\Equipo
     */
    public function getEquipoequipo()
    {
        return $this->equipoequipo;
    }
}
