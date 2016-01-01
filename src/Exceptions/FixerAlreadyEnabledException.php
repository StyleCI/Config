<?php

declare(strict_types=1);

/*
 * This file is part of StyleCI.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace StyleCI\Config\Exceptions;

use InvalidArgumentException;

/**
 * This is the fixer already enabled exception class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class FixerAlreadyEnabledException extends InvalidArgumentException implements ConfigExceptionInterface
{
    /**
     * The fixer.
     *
     * @var string
     */
    protected $fixer;

    /**
     * Create a new fixer already enabled exception instance.
     *
     * @param string $fixer
     *
     * @return void
     */
    public function __construct(string $fixer)
    {
        $this->fixer = $fixer;

        parent::__construct("The provided fixer '$fixer' cannot be enabled again because it was already enabled by your preset.");
    }

    /**
     * Get the fixer.
     *
     * @return string
     */
    public function getFixer()
    {
        return $this->fixer;
    }
}
