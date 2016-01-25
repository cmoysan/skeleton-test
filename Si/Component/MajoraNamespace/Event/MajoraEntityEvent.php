<?php

namespace Gesco\Si\Component\MajoraNamespace\Event;

use Gesco\Si\Component\MajoraNamespace\Entity\MajoraEntity;
use Majora\Framework\Event\BroadcastableEvent;

/**
 * MajoraEntity specific event class.
 */
class MajoraEntityEvent extends BroadcastableEvent
{
    protected $majoraEntity;

    /**
     * construct.
     *
     * @param MajoraEntity $majoraEntity
     */
    public function __construct(MajoraEntity $majoraEntity)
    {
        $this->majoraEntity = $majoraEntity;
    }

    /**
     * return related.
     *
     * @return MajoraEntity
     */
    public function getMajoraEntity()
    {
        return $this->majoraEntity;
    }

    /**
     * @see BroadcastableEventInterface::getData()
     */
    public function getData()
    {
        return array(
            'majora_entity_id' => $this->getMajoraEntity()->getId(),
        );
    }
}
