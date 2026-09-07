<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AddressResponseTransfer;
use Generated\Shared\Transfer\AddressTransfer;

interface AddressValidatorPluginInterface
{
    /**
     * Specification:
     * - Validates a customer address before it is created or updated.
     * - Executes on {@link \Spryker\Zed\Customer\Business\CustomerFacadeInterface::validateAddress()}.
     * - Returns `AddressResponseTransfer` with `isSuccess = true` when the address is acceptable.
     * - Returns `AddressResponseTransfer` with `isSuccess = false` and `CustomerError` entries holding
     *   glossary keys as messages otherwise.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $addressTransfer
     *
     * @return \Generated\Shared\Transfer\AddressResponseTransfer
     */
    public function validate(AddressTransfer $addressTransfer): AddressResponseTransfer;
}
