<?php

namespace JuliaDima\PhotoGalleryWidgetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Widget
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="JuliaDima\PhotoGalleryWidgetBundle\Entity\WidgetRepository")
 */
class Widget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="config", type="object")
     */
    private $config;


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
     * Set config
     *
     * @param \stdClass $config
     * @return Widget
     */
    public function setConfig($config)
    {
        $this->config = $config;
    
        return $this;
    }

    /**
     * Get config
     *
     * @return \stdClass 
     */
    public function getConfig()
    {
        return $this->config;
    }
}
