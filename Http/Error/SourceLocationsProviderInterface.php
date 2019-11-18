<?php

/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Railt\Contracts\Http\Error;

/**
 * Interface SourceLocationsProviderInterface
 */
interface SourceLocationsProviderInterface
{
    /**
     * @return iterable|SourceLocationInterface[]
     */
    public function getLocations(): iterable;

    /**
     * @return bool
     */
    public function hasLocations(): bool;
}
