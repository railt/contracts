<?php

/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Railt\Contracts\Common;

/**
 * Interface StringableInterface
 */
interface StringableInterface
{
    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function toString(): string;
}
