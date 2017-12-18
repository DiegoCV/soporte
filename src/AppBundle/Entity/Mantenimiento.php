<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mantenimiento
 *
 * @ORM\Table(name="mantenimiento")
 * @ORM\Entity
 */
class Mantenimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMantenimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmantenimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="feha_mantenimiento", type="date", nullable=false)
     */
    private $fehaMantenimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=400, nullable=false)
     */
    private $observaciones;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipo", inversedBy="mantenimientomantenimiento")
     * @ORM\JoinTable(name="mantenimiento_has_equipo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Mantenimiento_idMantenimiento", referencedColumnName="idMantenimiento")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Equipo_idEquipo", referencedColumnName="idEquipo")
     *   }
     * )
     */
    private $equipoequipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipoequipo = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idmantenimiento
     *
     * @return integer
     */
    public function getIdmantenimiento()
    {
        return $this->idmantenimiento;
    }

    /**
     * Set fehaMantenimiento
     *
     * @param \DateTime $fehaMantenimiento
     *
     * @return Mantenimiento
     */
    public function setFehaMantenimiento($fehaMantenimiento)
    {
        $this->fehaMantenimiento = $fehaMantenimiento;

        return $this;
    }

    /**
     * Get fehaMantenimiento
     *
     * @return \DateTime
     */
    public function getFehaMantenimiento()
    {
        return $this->fehaMantenimiento;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Mantenimiento
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Add equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     *
     * @return Mantenimiento
     */
    public function addEquipoequipo(\AppBundle\Entity\Equipo $equipoequipo)
    {
        $this->equipoequipo[] = $equipoequipo;

        return $this;
    }

    /**
     * Remove equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     */
    public function removeEquipoequipo(\AppBundle\Entity\Equipo $equipoequipo)
    {
        $this->equipoequipo->removeElement($equipoequipo);
    }

    /**
     * Get equipoequipo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipoequipo()
    {
        return $this->equipoequipo;
    }
}
