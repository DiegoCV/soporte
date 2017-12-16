<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perifericos
 *
 * @ORM\Table(name="perifericos", indexes={@ORM\Index(name="fk_Periféricos_Equipo1_idx", columns={"Equipo_idEquipo"}), @ORM\Index(name="fk_Periféricos_Departamento1_idx", columns={"Departamento_idDepartamento"})})
 * @ORM\Entity
 */
class Perifericos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPerifericos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idperifericos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isImpresora", type="boolean", nullable=true)
     */
    private $isimpresora;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Departamento_idDepartamento", referencedColumnName="idDepartamento")
     * })
     */
    private $departamentodepartamento;

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
     * Get idperifericos
     *
     * @return integer
     */
    public function getIdperifericos()
    {
        return $this->idperifericos;
    }

    /**
     * Set isimpresora
     *
     * @param boolean $isimpresora
     *
     * @return Perifericos
     */
    public function setIsimpresora($isimpresora)
    {
        $this->isimpresora = $isimpresora;

        return $this;
    }

    /**
     * Get isimpresora
     *
     * @return boolean
     */
    public function getIsimpresora()
    {
        return $this->isimpresora;
    }

    /**
     * Set departamentodepartamento
     *
     * @param \AppBundle\Entity\Departamento $departamentodepartamento
     *
     * @return Perifericos
     */
    public function setDepartamentodepartamento(\AppBundle\Entity\Departamento $departamentodepartamento = null)
    {
        $this->departamentodepartamento = $departamentodepartamento;

        return $this;
    }

    /**
     * Get departamentodepartamento
     *
     * @return \AppBundle\Entity\Departamento
     */
    public function getDepartamentodepartamento()
    {
        return $this->departamentodepartamento;
    }

    /**
     * Set equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     *
     * @return Perifericos
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
