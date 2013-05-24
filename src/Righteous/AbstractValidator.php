<?php

/**
 * This file is part of the Righteous package.
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed along with this source code.
 *
 * @license https://github.com/unwiredbrain/righteous/blob/master/LICENSE MIT License
 */

namespace Righteous;

/**
 * @author Massimo Lombardo <unwiredbrain@gmail.com>
 */
abstract class AbstractValidator implements ValidatorInterface
{

    /**
     * @var mixed
     */
    protected $input = null;

    /**
     * Constructor.
     *
     * @param mixed $input The input to validate.
     */
    public function __construct ($input)
    {
        $this->input = $input;
    }

}
