<?php

namespace ContainerJAXW2Kw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManifestationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ManifestationType' shared autowired service.
     *
     * @return \App\Form\ManifestationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ManifestationType.php';

        return $container->privates['App\\Form\\ManifestationType'] = new \App\Form\ManifestationType();
    }
}