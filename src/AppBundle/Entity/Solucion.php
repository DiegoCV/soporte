<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solucion
 *
 * @ORM\Table(name="solucion", indexes={@ORM\Index(name="fk_Solucion_Problema1_idx", columns={"Problema_idProblema"}), @ORM\Index(name="fk_Solucion_Perifericos1_idx", columns={"Perifericos_idPerifericos"}), @ORM\Index(name="fk_Solucion_Software1_idx", columns={"Software_idSoftware"}), @ORM\Index(name="fk_Solucion_Torre1_idx", columns={"Torre_idTorre"})})
 * @ORM\Entity
 */
class Solucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSolucion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolucion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_Solucion", type="datetime", nullable=true)
     */
    private $fechaSolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="Solucion", type="string", length=500, nullable=true)
     */
    private $solucion;

    /**
     * @var \Perifericos
     *
     * @ORM\ManyToOne(targetEntity="Perifericos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Perifericos_idPerifericos", referencedColumnName="id")
     * })
     */
    private $perifericosperifericos;

    /**
     * @var \Problema
     *
     * @ORM\ManyToOne(targetEntity="Problema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Problema_idProblema", referencedColumnName="idProblema")
     * })
     */
    private $problemaproblema;

    /**
     * @var \Software
     *
     * @ORM\ManyToOne(targetEntity="Software")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Software_idSoftware", referencedColumnName="idSoftware")
     * })
     */
    private $softwaresoftware;

    /**
     * @var \Torre
     *
     * @ORM\ManyToOne(targetEntity="Torre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Torre_idTorre", referencedColumnName="idTorre")
     * })
     */
    private $torretorre;



    /**
     * Get idsolucion
     *
     * @return integer
     */
    public function getIdsolucion()
    {
        return $this->idsolucion;
    }

    /**
     * Set fechaSolucion
     *
     * @param \DateTime $fechaSolucion
     *
     * @return Solucion
     */
    public function setFechaSolucion($fechaSolucion)
    {
        $this->fechaSolucion = $fechaSolucion;

        return $this;
    }

    /**
     * Get fechaSolucion
     *
     * @return \DateTime
     */
    public function getFechaSolucion()
    {
        return $this->fechaSolucion;
    }

    /**
     * Set solucion
     *
     * @param string $solucion
     *
     * @return Solucion
     */
    public function setSolucion($solucion)
    {
        $this->solucion = $solucion;

        return $this;
    }

    /**
     * Get solucion
     *
     * @return string
     */
    public function getSolucion()
    {
        return $this->solucion;
    }

    /**
     * Set perifericosperifericos
     *
     * @param \AppBundle\Entity\Perifericos $perifericosperifericos
     *
     * @return Solucion
     */
    public function setPerifericosperifericos(\AppBundle\Entity\Perifericos $perifericosperifericos = null)
    {
        $this->perifericosperifericos = $perifericosperifericos;

        return $this;
    }

    /**
     * Get perifericosperifericos
     *
     * @return \AppBundle\Entity\Perifericos
     */
    public function getPerifericosperifericos()
    {
        return $this->perifericosperifericos;
    }

    /**
     * Set problemaproblema
     *
     * @param \AppBundle\Entity\Problema $problemaproblema
     *
     * @return Solucion
     */
    public function setProblemaproblema(\AppBundle\Entity\Problema $problemaproblema = null)
    {
        $this->problemaproblema = $problemaproblema;

        return $this;
    }

    /**
     * Get problemaproblema
     *
     * @return \AppBundle\Entity\Problema
     */
    public function getProblemaproblema()
    {
        return $this->problemaproblema;
    }

    /**
     * Set softwaresoftware
     *
     * @param \AppBundle\Entity\Software $softwaresoftware
     *
     * @return Solucion
     */
    public function setSoftwaresoftware(\AppBundle\Entity\Software $softwaresoftware = null)
    {
        $this->softwaresoftware = $softwaresoftware;

        return $this;
    }

    /**
     * Get softwaresoftware
     *
     * @return \AppBundle\Entity\Software
     */
    public function getSoftwaresoftware()
    {
        return $this->softwaresoftware;
    }

    /**
     * Set torretorre
     *
     * @param \AppBundle\Entity\Torre $torretorre
     *
     * @return Solucion
     */
    public function setTorretorre(\AppBundle\Entity\Torre $torretorre = null)
    {
        $this->torretorre = $torretorre;

        return $this;
    }

    /**
     * Get torretorre
     *
     * @return \AppBundle\Entity\Torre
     */
    public function getTorretorre()
    {
        return $this->torretorre;
    }
}
