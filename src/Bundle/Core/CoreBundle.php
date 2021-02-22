<?php


namespace Hestia\Bundle\Core;


use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CoreBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(DoctrineOrmMappingsPass::createAnnotationMappingDriver([__NAMESPACE__.'\\Entity'], [__DIR__.'/Entity'], []));
    }
}