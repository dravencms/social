<?php

namespace Dravencms\Social\Console;

use App\Model\Admin\Entities\Menu;
use App\Model\Admin\Repository\MenuRepository;
use App\Model\User\Entities\AclOperation;
use App\Model\User\Entities\AclResource;
use Kdyby\Doctrine\EntityManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Copyright (C) 2016 Adam Schubert <adam.schubert@sg1-game.net>.
 */

class InstallCommand extends Command
{
    protected function configure()
    {
        $this->setName('dravencms:social:install')
            ->setDescription('Installs dravencms module');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try
        {
            $output->writeLn('Module installed successfully');
            return 0; // zero return code means everything is ok

        } catch (\Exception $e) {
            $output->writeLn('<error>' . $e->getMessage() . '</error>');
            return 1; // non-zero return code means error
        }
    }
}