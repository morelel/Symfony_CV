<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * @ORM\Entity
 * @ORM\Table(name="experience")
 */
class Experience {
    
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue 
     **/
    private $id;
    /** 
     * @ORM\Column(type="string")
     **/
    private $name;
    /** 
     * @ORM\Column(type="string")
     **/
    private $desc;
    /** 
     * @ORM\Column(type="date")
     **/
    private $dateDebut;
    /** 
     * @ORM\Column(type="date")
     **/
    private $dateFin;
    /** 
     * @ORM\Column(type="string")
     **/
    private $lieu;
}