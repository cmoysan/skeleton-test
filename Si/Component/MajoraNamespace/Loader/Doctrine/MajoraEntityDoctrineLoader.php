<?php

namespace Gesco\Si\Component\MajoraNamespace\Loader\Doctrine;

use Gesco\Si\Component\MajoraNamespace\Loader\Doctrine\Auto\MajoraEntityDoctrineLoaderTrait;
use Gesco\Si\Component\MajoraNamespace\Loader\MajoraEntityLoaderInterface;
use Majora\Framework\Loader\AbstractLoader;
use Majora\Framework\Loader\Bridge\Doctrine\DoctrineLoaderInterface;

/**
 * MajoraEntity loader implementation using Doctrine.
 */
class MajoraEntityDoctrineLoader extends AbstractLoader
    implements DoctrineLoaderInterface, MajoraEntityLoaderInterface
{
    use MajoraEntityDoctrineLoaderTrait;
}
