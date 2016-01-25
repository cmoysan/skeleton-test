<?php

namespace Gesco\Si\Component\MajoraNamespace\Entity;

use Gedmo\Timestampable\Traits\Timestampable;
use Majora\Framework\Model\CollectionableInterface;
use Majora\Framework\Model\CollectionableTrait;
use Majora\Framework\Serializer\Model\SerializableTrait;

/**
 * MajoraEntity model class.
 */
class MajoraEntity implements CollectionableInterface
{
    use CollectionableTrait, SerializableTrait, Timestampable;

    /**
     * @var int
     */
    protected $id;

    /**
     * return MajoraEntity id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * define MajoraEntity id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    // *************************************************
    //
    // Class auto generated by MajoraGeneratorBundle
    // Implement your own logic here !
    //
    // *************************************************

    /**
     * @see ScopableInterface::getScopes()
     */
    public function getScopes()
    {
        return array(
            'default' => array('id'),
            'id' => 'id',
        );
    }
}
