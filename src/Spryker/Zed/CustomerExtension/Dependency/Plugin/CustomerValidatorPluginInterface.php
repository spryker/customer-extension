<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerResponseTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

interface CustomerValidatorPluginInterface
{
    /**
     * Specification:
     * - Validates the customer before it is created or updated.
     * - Executes on {@link \Spryker\Zed\Customer\Business\CustomerFacadeInterface::registerCustomer()},
     *   {@link \Spryker\Zed\Customer\Business\CustomerFacadeInterface::addCustomer()} and
     *   {@link \Spryker\Zed\Customer\Business\CustomerFacadeInterface::updateCustomer()}, before anything is persisted.
     * - Returns `CustomerResponseTransfer` with `isSuccess = true` when the customer is acceptable.
     * - Returns `CustomerResponseTransfer` with `isSuccess = false` and `CustomerError` entries holding
     *   glossary keys as messages otherwise.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerResponseTransfer
     */
    public function validate(CustomerTransfer $customerTransfer): CustomerResponseTransfer;
}
