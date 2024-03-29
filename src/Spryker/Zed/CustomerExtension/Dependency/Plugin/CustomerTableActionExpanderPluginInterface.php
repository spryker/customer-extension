<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerExtension\Dependency\Plugin;

interface CustomerTableActionExpanderPluginInterface
{
    /**
     * Specification:
     *  - This plugin allows to execute additional actions for customer table.
     *
     * @api
     *
     * @param int $idCustomer
     * @param array<\Generated\Shared\Transfer\ButtonTransfer> $buttonTransfers
     *
     * @return array<\Generated\Shared\Transfer\ButtonTransfer>
     */
    public function execute(int $idCustomer, array $buttonTransfers): array;
}
