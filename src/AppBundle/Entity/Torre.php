<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Torre
 *
 * @ORM\Table(name="torre", indexes={@ORM\Index(name="fk_Torre_Equipo1_idx", columns={"Equipo_idEquipo"})})
 * @ORM\Entity
 */
class Torre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTorre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtorre;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=45, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=45, nullable=true)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=45, nullable=true)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="stiker_activo", type="string", length=45, nullable=true)
     */
    private $stikerActivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_compra", type="date", nullable=true)
     */
    private $fechaCompra;

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
     * Get idtorre
     *
     * @return integer
     */
    public function getIdtorre()
    {
        return $this->idtorre;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Torre
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Torre
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set serial
     *
     * @param string $serial
     *
     * @return Torre
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set stikerActivo
     *
     * @param string $stikerActivo
     *
     * @return Torre
     */
    public function setStikerActivo($stikerActivo)
    {
        $this->stikerActivo = $stikerActivo;

        return $this;
    }

    /**
     * Get stikerActivo
     *
     * @return string
     */
    public function getStikerActivo()
    {
        return $this->stikerActivo;
    }

    /**
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     *
     * @return Torre
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     *
     * @return Torre
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
