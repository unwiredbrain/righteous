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
interface ValidatorInterface
{

    /**
     * Validate the data.
     *
     * @return bool Returns TRUE if the validation was successful, FALSE otherwise.
     */
    public static function validate();

}
