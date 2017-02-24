<?php

namespace UltimoBundle\Entity;

/**
 * Usuario
 */
class Usuario 
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apePaterno;

    /**
     * @var string
     */
    private $apeMaterno;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var \UltimoBundle\Entity\Direccion
     */
    private $direccion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
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
     * Set apePaterno
     *
     * @param string $apePaterno
     *
     * @return Usuario
     */
    public function setApePaterno($apePaterno)
    {
        $this->apePaterno = $apePaterno;

        return $this;
    }

    /**
     * Get apePaterno
     *
     * @return string
     */
    public function getApePaterno()
    {
        return $this->apePaterno;
    }

    /**
     * Set apeMaterno
     *
     * @param string $apeMaterno
     *
     * @return Usuario
     */
    public function setApeMaterno($apeMaterno)
    {
        $this->apeMaterno = $apeMaterno;

        return $this;
    }

    /**
     * Get apeMaterno
     *
     * @return string
     */
    public function getApeMaterno()
    {
        return $this->apeMaterno;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set direccion
     *
     * @param \UltimoBundle\Entity\Direccion $direccion
     *
     * @return Usuario
     */
    public function setDireccion(\UltimoBundle\Entity\Direccion $direccion = null)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return \UltimoBundle\Entity\Direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}
