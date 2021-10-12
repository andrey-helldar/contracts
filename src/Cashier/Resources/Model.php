<?php

/*
 * This file is part of the "andrey-helldar/contracts" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 *
 * @copyright 2021 Andrey Helldar
 *
 * @license MIT
 *
 * @see https://github.com/andrey-helldar/contracts
 */

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\Cashier\Config\Driver;
use Helldar\Contracts\Cashier\Http\Request;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @method static Request make(EloquentModel $model, Driver $config)
 */
interface Model
{
    public function __construct(EloquentModel $model, Driver $config);

    /**
     * @return \Helldar\Cashier\Concerns\Casheable|\Illuminate\Database\Eloquent\Model
     */
    public function getPaymentModel(): EloquentModel;

    public function getClientId(): string;

    public function getClientSecret(): string;

    public function getUniqueId(bool $every = false): string;

    public function getPaymentId(): string;

    public function getSum(): int;

    public function getCurrency(): string;

    public function getCreatedAt(): string;

    public function getExternalId(): ?string;

    public function getOperationId(): ?string;

    public function getConfig(): Driver;

    public function getExtra(): ?array;
}
