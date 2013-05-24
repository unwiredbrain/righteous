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

namespace Righteous\Validator\Url;

use Righteous\Validator\Url;

/**
 * @author Massimo Lombardo <unwiredbrain@gmail.com>
 */
class WithQuery extends Url
{

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        return false !== filter_var($this->input, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED);
    }

}
