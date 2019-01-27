<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'serializer.normalizer.object' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\AbstractObjectNormalizer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\serializer\\Normalizer\\ObjectNormalizer.php';

return $this->privates['serializer.normalizer.object'] = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->load('getSerializer_Mapping_ClassMetadataFactoryService.php')), ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->load('getSerializer_NameConverter_MetadataAwareService.php')), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), ($this->privates['property_info'] ?? $this->load('getPropertyInfoService.php')), ($this->privates['serializer.mapping.class_discriminator_resolver'] ?? $this->load('getSerializer_Mapping_ClassDiscriminatorResolverService.php')));