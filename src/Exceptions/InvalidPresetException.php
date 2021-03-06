<?php

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
 * This is the invalid preset exception class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class InvalidPresetException extends InvalidArgumentException implements ConfigExceptionInterface
{
    /**
     * The invalid preset.
     *
     * @var mixed
     */
    protected $preset;

    /**
     * Create a new invalid preset exception instance.
     *
     * @param mixed $preset
     *
     * @return void
     */
    public function __construct($preset)
    {
        $this->preset = $preset;

        if (is_string($preset) || is_numeric($preset)) {
            parent::__construct("The provided preset '$preset' was not valid.");
        } else {
            parent::__construct('A provided preset was not valid.');
        }
    }

    /**
     * Get the invalid preset.
     *
     * @return mixed
     */
    public function getPreset()
    {
        return $this->preset;
    }
}
