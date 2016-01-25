<?php

namespace Gesco\Si\Component\MajoraNamespace\Repository;

use Gesco\Si\Component\MajoraNamespace\Entity\MajoraEntity;
use Gesco\Si\Component\MajoraNamespace\Entity\MajoraEntityCollection;

/**
 * Interface to implement on all MajoraEntity repositories.
 */
interface MajoraEntityRepositoryInterface
{
    /**
     * update or create given MajoraEntitys into persistence layer.
     *
     * @param MajoraEntity|MajoraEntityCollection $majoraEntitys
     */
    public function save($majoraEntitys);

    /**
     * delete given MajoraEntitys into persistence layer.
     *
     * @param MajoraEntity|MajoraEntityCollection $majoraEntitys
     */
    public function delete($majoraEntitys);
}
