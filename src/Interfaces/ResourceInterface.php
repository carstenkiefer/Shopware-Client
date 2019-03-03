<?php
/**
 * Shopware Client
 * Copyright (c) 2019 ThemePoint
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 * @version 1.0.0
 * @package shopbase.shopware.client
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Shopbase\ShopwareClient\Interfaces;

interface ResourceInterface
{
    public function setValidTypes(array $validTypes): void;

    public function setValidType(string $type): void;

    public function getValidTypes(): array;

    public function setEndpoint(string $endpoint): void;

    public function getEndpoint(): string;
}
