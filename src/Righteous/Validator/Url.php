<?php

/**
 * This file is part of the Righteous package.
 *
 * Copyright (c) Massimo Lombardo <unwiredbrain@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed along with this source code.
 *
 * @license https://github.com/unwiredbrain/righteous/blob/master/LICENSE MIT License
 */

namespace Righteous\Validator;

use Righteous\ValidatorInterface;

/**
 * @author Massimo Lombardo <unwiredbrain@gmail.com>
 */
class Url implements ValidatorInterface
{

    /**
     * @var string
     */
    protected $input = null;

    /**
     * Constructor.
     *
     * @param string $input The URL address to validate.
     */
    public function __construct ($input)
    {
        $this->input = $input;
    }

    /**
     * {@inheritdoc}
     */
    public static function validate()
    {
        return false !== filter_var($this->input, FILTER_VALIDATE_URL);
    }

}
