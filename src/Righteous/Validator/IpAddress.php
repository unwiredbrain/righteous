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

use Righteous\AbstractValidator;

/**
 * @author Massimo Lombardo <unwiredbrain@gmail.com>
 */
class IpAddress extends AbstractValidator
{

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        return false !== filter_var($this->input, FILTER_VALIDATE_IP);
    }

}
