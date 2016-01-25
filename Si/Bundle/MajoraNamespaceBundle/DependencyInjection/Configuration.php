<?php

namespace Gesco\Si\Bundle\MajoraNamespaceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * MajoraNamespaceSdkBundle semantical configuration class.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     *
     * @see http://symfony.com/doc/current/components/config/definition.html
     *
     * @example to create configuration tree, use theses lines :
     *      $treeBuilder = new TreeBuilder();
     *      $treeBuilder->root('gesco_si_majora_namespace')
     *          ->children()
     *              ->scalarNode('...')
     *                  ->isRequired()
     *              ->end()
     *              ->arrayNode()
     *                  ->addDefaultsIfNotSet()
     *                  ->children()
     *                       // more nodes here
     *                  ->end()
     *              ->end()
     *          ->end()
     *      ;
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('gesco_si_majora_namespace');

        return $treeBuilder;
    }
}
