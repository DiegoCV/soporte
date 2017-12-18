<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perifericos
 *
 * @ORM\Table(name="perifericos", indexes={@ORM\Index(name="fk_Periféricos_Equipo1_idx", columns={"Equipo_idEquipo"}), @ORM\Index(name="fk_Periféricos_Departamento1_idx", columns={"Departamento_idDepartamento"}), @ORM\Index(name="fk_Periféricos_Tipo_Periferico1_idx", columns={"Tipo_Periferico_id"}), @ORM\Index(name="fk_Periféricos_Tipo_Pantalla1_idx", columns={"Tipo_Pantalla_idTipo_Pantalla"})})
 * @ORM\Entity
 */
class Perifericos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isImpresora", type="boolean", nullable=true)
     */
    private $isimpresora;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=45, nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=45, nullable=false)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=45, nullable=false)
     */
    private $serial;

    /**
     * @var string
     *
     * @ORM\Column(name="pulgadas", type="string", length=45, nullable=true)
     */
    private $pulgadas;

    /**
     * @var string
     *
     * @ORM\Column(name="stiker_activo", type="string", length=45, nullable=true)
     */
    private $stikerActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_compra", type="string", length=45, nullable=true)
     */
    private $fechaCompra;

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
     * @var \TipoPantalla
     *
     * @ORM\ManyToOne(targetEntity="TipoPantalla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipo_Pantalla_idTipo_Pantalla", referencedColumnName="idTipo_Pantalla")
     * })
     */
    private $tipoPantallatipoPantalla;

    /**
     * @var \TipoPeriferico
     *
     * @ORM\ManyToOne(targetEntity="TipoPeriferico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipo_Periferico_id", referencedColumnName="id")
     * })
     */
    private $tipoPeriferico;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Set marca
     *
     * @param string $marca
     *
     * @return Perifericos
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
     * @return Perifericos
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
     * @return Perifericos
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
     * Set pulgadas
     *
     * @param string $pulgadas
     *
     * @return Perifericos
     */
    public function setPulgadas($pulgadas)
    {
        $this->pulgadas = $pulgadas;

        return $this;
    }

    /**
     * Get pulgadas
     *
     * @return string
     */
    public function getPulgadas()
    {
        return $this->pulgadas;
    }

    /**
     * Set stikerActivo
     *
     * @param string $stikerActivo
     *
     * @return Perifericos
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
     * @param string $fechaCompra
     *
     * @return Perifericos
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return string
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
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

    /**
     * Set tipoPantallatipoPantalla
     *
     * @param \AppBundle\Entity\TipoPantalla $tipoPantallatipoPantalla
     *
     * @return Perifericos
     */
    public function setTipoPantallatipoPantalla(\AppBundle\Entity\TipoPantalla $tipoPantallatipoPantalla = null)
    {
        $this->tipoPantallatipoPantalla = $tipoPantallatipoPantalla;

        return $this;
    }

    /**
     * Get tipoPantallatipoPantalla
     *
     * @return \AppBundle\Entity\TipoPantalla
     */
    public function getTipoPantallatipoPantalla()
    {
        return $this->tipoPantallatipoPantalla;
    }

    /**
     * Set tipoPeriferico
     *
     * @param \AppBundle\Entity\TipoPeriferico $tipoPeriferico
     *
     * @return Perifericos
     */
    public function setTipoPeriferico(\AppBundle\Entity\TipoPeriferico $tipoPeriferico = null)
    {
        $this->tipoPeriferico = $tipoPeriferico;

        return $this;
    }

    /**
     * Get tipoPeriferico
     *
     * @return \AppBundle\Entity\TipoPeriferico
     */
    public function getTipoPeriferico()
    {
        return $this->tipoPeriferico;
    }
}
