<?php

namespace Gesco\Si\Component\MajoraNamespace\Event;

/**
 * MajoraEntity event reference class.
 */
final class MajoraEntityEvents
{
    /**
     * event fired when a majora_entity is created.
     */
    const GESCO_MAJORA_ENTITY_CREATED = 'gesco.majora_entity.created';

    /**
     * event fired when a majora_entity is updated.
     */
    const GESCO_MAJORA_ENTITY_EDITED = 'gesco.majora_entity.edited';

    /**
     * event fired when a majora_entity is deleted.
     */
    const GESCO_MAJORA_ENTITY_DELETED = 'gesco.majora_entity.deleted';
}
