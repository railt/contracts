<?php

/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Contracts\Pipeline\Http;

use Railt\Contracts\Http\RequestInterface;
use Railt\Contracts\Http\ResponseInterface;
use Railt\Contracts\Pipeline\MiddlewareInterface as BaseMiddlewareInterface;

/**
 * Interface MiddlewareInterface
 */
interface HttpMiddlewareInterface extends BaseMiddlewareInterface
{
    /**
     * @param RequestInterface $payload
     * @param HandlerInterface $next
     * @return ResponseInterface
     */
    public function handle(RequestInterface $payload, HandlerInterface $next): ResponseInterface;
}
