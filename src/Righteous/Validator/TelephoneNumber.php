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
class TelephoneNumber implements ValidatorInterface
{

    /**
     * @var string
     */
    protected $input = null;

    /**
     * Constructor.
     *
     * @param string $input The telephone number to validate.
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
        $input = filter_var($this->input, FILTER_SANITIZE_NUMBER_INT);
        $input = str_replace('-', '', $input);
        return $input === $this->input;
    }

}
