<?php

namespace BundleLabs\StupindleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** @ORM\Entity(repositoryClass="BundleLabs\StupindleBundle\Entity\ItemRepository") */
class Item
{
    /**
    * @var integer $id
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    /**
    * @var string $item
    *
    * @ORM\Column(name="item", type="string", length=255)
    * @Assert\NotBlank()
    */
    private $item;
    /**
    * @var integer $codigo
    *
    * @ORM\Column(name="codigo", type="integer")
    * @Assert\NotBlank()
    */
    private $codigo;
    /**
    * @var float $precio
    *
    * @ORM\Column(name="precio", type="float")
    * @Assert\Min(0)
    */
    private $precio;
    /**
    * @var string $foto
    *
    * @ORM\Column(name="foto", type="string", length=255)
    */
    private $foto;
    /**
    * @var string $slug
    *
    * @ORM\Column(name="slug", type="string", length=255)
    * @Assert\NotBlank()
    */
    private $slug;
    /**
    * @var boolean $habilitado
    *
    * @ORM\Column(name="habilitado", type="boolean")
    * @Assert\NotBlank()
    */
    private $habilitado;
    /**
    * @var date $fecha_expira
    *
    * @ORM\Column(name="fecha_expira", type="date")
    */
    private $fecha_expira;
    /**
    * @var time $hora_expira
    *
    * @ORM\Column(name="hora_expira", type="time")
    */
    private $hora_expira;
    /**
    * @var datetime $created
    *
    * @ORM\Column(name="created", type="datetime")
    * @Assert\DateTime
    */
    private $created;
    /**
    * @var string $created_by
    *
    * @ORM\Column(name="created_by", type="string", length=255)
    * @Assert\NotBlank()
    */
    private $created_by;
    /**
    * @var datetime $updated
    *
    * @ORM\Column(name="updated", type="datetime")
    * @Assert\DateTime
    */
    private $updated;
    /**
    * @var string $updated_by
    *
    * @ORM\Column(name="updated_by", type="string", length=255)
    * @Assert\NotBlank()
    */
    private $updated_by;

    /**
    * @Assert\True(message = "La fecha de expiración debe ser mayor a la fecha de creación")
    */
    public function isFechaExpiraValida()
    {
        $retorno = false;

        if ($this->fecha_expira > $this->created){
            $retorno = true;
        }

        return $retorno;
    }

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
     * Set item
     *
     * @param string $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }

    /**
     * Get item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set codigo
     *
     * @param integer $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set precio
     *
     * @param float $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set foto
     *
     * @param string $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;
    }

    /**
     * Get habilitado
     *
     * @return boolean
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set fecha_expira
     *
     * @param date $fechaExpira
     */
    public function setFechaExpira($fechaExpira)
    {
        $this->fecha_expira = $fechaExpira;
    }

    /**
     * Get fecha_expira
     *
     * @return date
     */
    public function getFechaExpira()
    {
        return $this->fecha_expira;
    }

    /**
     * Set hora_expira
     *
     * @param time $horaExpira
     */
    public function setHoraExpira($horaExpira)
    {
        $this->hora_expira = $horaExpira;
    }

    /**
     * Get hora_expira
     *
     * @return time
     */
    public function getHoraExpira()
    {
        return $this->hora_expira;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set created_by
     *
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->created_by = $createdBy;
    }

    /**
     * Get created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set updated_by
     *
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updated_by = $updatedBy;
    }

    /**
     * Get updated_by
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }
}