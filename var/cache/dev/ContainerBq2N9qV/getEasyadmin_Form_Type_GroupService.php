<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.form.type.group' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminGroupType.php';

return $this->privates['easyadmin.form.type.group'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminGroupType();