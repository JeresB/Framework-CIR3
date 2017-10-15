<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\AvisRepository")
 */
class Avis
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
     * @var \Internaute
     *
     * @ORM\ManyToOne(targetEntity="Internaute")
     * @ORM\JoinColumn(name="internauteId", referencedColumnName="id")
     */
    private $internauteId;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumn(name="annonceId", referencedColumnName="id")
     */
    private $annonceId;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="text")
     */
    private $avis;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;


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
     * Set internauteId
     *
     * @param integer $internauteId
     *
     * @return Avis
     */
    public function setInternauteId($internauteId)
    {
        $this->internauteId = $internauteId;

        return $this;
    }

    /**
     * Get internauteId
     *
     * @return int
     */
    public function getInternauteId()
    {
        return $this->internauteId;
    }

    /**
     * Set annonceId
     *
     * @param integer $annonceId
     *
     * @return Avis
     */
    public function setAnnonceId($annonceId)
    {
        $this->annonceId = $annonceId;

        return $this;
    }

    /**
     * Get annonceId
     *
     * @return int
     */
    public function getAnnonceId()
    {
        return $this->annonceId;
    }

    /**
     * Set avis
     *
     * @param string $avis
     *
     * @return Avis
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return Avis
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Avis
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}

