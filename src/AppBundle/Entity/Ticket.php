<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreado", type="datetime")
     */
    private $fechaCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEstado", type="datetime")
     */
    private $fechaEstado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCierre", type="datetime")
     */
    private $fechaCierre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="categoriaId", type="integer")
     */
    private $categoriaId;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=50)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridad", type="string", length=50)
     */
    private $prioridad;

    /**
     * @var int
     *
     * @ORM\Column(name="usuarioSolicitanteId", type="integer")
     */
    private $usuarioSolicitanteId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuarioAsignadoId", type="integer")
     */
    private $usuarioAsignadoId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaCreado
     *
     * @param \DateTime $fechaCreado
     *
     * @return Ticket
     */
    public function setFechaCreado($fechaCreado)
    {
        $this->fechaCreado = $fechaCreado;

        return $this;
    }

    /**
     * Get fechaCreado
     *
     * @return \DateTime
     */
    public function getFechaCreado()
    {
        return $this->fechaCreado;
    }

    /**
     * Set fechaEstado
     *
     * @param \DateTime $fechaEstado
     *
     * @return Ticket
     */
    public function setFechaEstado($fechaEstado)
    {
        $this->fechaEstado = $fechaEstado;

        return $this;
    }

    /**
     * Get fechaEstado
     *
     * @return \DateTime
     */
    public function getFechaEstado()
    {
        return $this->fechaEstado;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     *
     * @return Ticket
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Ticket
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set categoriaId
     *
     * @param integer $categoriaId
     *
     * @return Ticket
     */
    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return int
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Ticket
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set prioridad
     *
     * @param string $prioridad
     *
     * @return Ticket
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set usuarioSolicitanteId
     *
     * @param integer $usuarioSolicitanteId
     *
     * @return Ticket
     */
    public function setUsuarioSolicitanteId($usuarioSolicitanteId)
    {
        $this->usuarioSolicitanteId = $usuarioSolicitanteId;

        return $this;
    }

    /**
     * Get usuarioSolicitanteId
     *
     * @return int
     */
    public function getUsuarioSolicitanteId()
    {
        return $this->usuarioSolicitanteId;
    }

    /**
     * Set usuarioAsignadoId
     *
     * @param integer $usuarioAsignadoId
     *
     * @return Ticket
     */
    public function setUsuarioAsignadoId($usuarioAsignadoId)
    {
        $this->usuarioAsignadoId = $usuarioAsignadoId;

        return $this;
    }

    /**
     * Get usuarioAsignadoId
     *
     * @return int
     */
    public function getUsuarioAsignadoId()
    {
        return $this->usuarioAsignadoId;
    }
}
