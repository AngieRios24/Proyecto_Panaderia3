<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SingleCommandApplication extends Command
{
    private $version = 'UNKNOWN';
<<<<<<< HEAD
    private $autoExit = true;
=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    private $running = false;

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @final
     */
    public function setAutoExit(bool $autoExit): self
    {
        $this->autoExit = $autoExit;

        return $this;
    }

=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    public function run(InputInterface $input = null, OutputInterface $output = null): int
    {
        if ($this->running) {
            return parent::run($input, $output);
        }

        // We use the command name as the application name
        $application = new Application($this->getName() ?: 'UNKNOWN', $this->version);
<<<<<<< HEAD
        $application->setAutoExit($this->autoExit);
=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
        // Fix the usage of the command displayed with "--help"
        $this->setName($_SERVER['argv'][0]);
        $application->add($this);
        $application->setDefaultCommand($this->getName(), true);

        $this->running = true;
        try {
            $ret = $application->run($input, $output);
        } finally {
            $this->running = false;
        }

        return $ret ?? 1;
    }
}
