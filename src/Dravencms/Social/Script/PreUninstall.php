<?php
namespace Dravencms\Social\Script;

use Dravencms\Model\User\Repository\AclResourceRepository;
use Dravencms\Packager\IPackage;
use Dravencms\Packager\IScript;
use Kdyby\Doctrine\EntityManager;

/**
 * Copyright (C) 2016 Adam Schubert <adam.schubert@sg1-game.net>.
 */
class PreUninstall implements IScript
{
    private $aclResourceRepository;

    private $entityManager;

    public function __construct(EntityManager $entityManager, AclResourceRepository $aclResourceRepository)
    {
        $this->entityManager = $entityManager;
        $this->aclResourceRepository = $aclResourceRepository;
    }

    public function run(IPackage $package)
    {
    }
}