<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Software
 *
 * @ORM\Table(name="software", indexes={@ORM\Index(name="fk_Software_Equipo1_idx", columns={"Equipo_idEquipo"})})
 * @ORM\Entity
 */
class Software
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSoftware", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsoftware;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Software_idTipo_Software", type="integer", nullable=false)
     */
    private $tipoSoftwareIdtipoSoftware;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_vencimiento", type="string", length=45, nullable=true)
     */
    private $fechaVencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=45, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

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
     * Get idsoftware
     *
     * @return integer
     */
    public function getIdsoftware()
    {
        return $this->idsoftware;
    }

    /**
     * Set tipoSoftwareIdtipoSoftware
     *
     * @param integer $tipoSoftwareIdtipoSoftware
     *
     * @return Software
     */
    public function setTipoSoftwareIdtipoSoftware($tipoSoftwareIdtipoSoftware)
    {
        $this->tipoSoftwareIdtipoSoftware = $tipoSoftwareIdtipoSoftware;

        return $this;
    }

    /**
     * Get tipoSoftwareIdtipoSoftware
     *
     * @return integer
     */
    public function getTipoSoftwareIdtipoSoftware()
    {
        return $this->tipoSoftwareIdtipoSoftware;
    }

    /**
     * Set fechaVencimiento
     *
     * @param string $fechaVencimiento
     *
     * @return Software
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return string
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return Software
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Software
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     *
     * @return Software
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
