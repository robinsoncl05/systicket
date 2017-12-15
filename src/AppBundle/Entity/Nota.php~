<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 *
 * @ORM\Table(name="nota")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotaRepository")
 */
class Nota
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
     * @var int
     *
     * @ORM\Column(name="ticketId", type="integer")
     */
    private $ticketId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuarioId", type="integer")
     */
    private $usuarioId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionNota", type="text")
     */
    private $descripcionNota;


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
     * Set ticketId
     *
     * @param integer $ticketId
     *
     * @return Nota
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * Get ticketId
     *
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Nota
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return int
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Nota
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcionNota
     *
     * @param string $descripcionNota
     *
     * @return Nota
     */
    public function setDescripcionNota($descripcionNota)
    {
        $this->descripcionNota = $descripcionNota;

        return $this;
    }

    /**
     * Get descripcionNota
     *
     * @return string
     */
    public function getDescripcionNota()
    {
        return $this->descripcionNota;
    }
}

