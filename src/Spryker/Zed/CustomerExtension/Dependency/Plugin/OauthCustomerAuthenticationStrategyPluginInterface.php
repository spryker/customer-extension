<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerTransfer;
use Generated\Shared\Transfer\ResourceOwnerTransfer;

/**
 * Use this plugin to provide a customer resolution strategy for OAuth login.
 *
 * Implement this interface to define how a customer is resolved or created
 * from the OAuth resource owner data. Strategies are tried in order; the first
 * one that returns a CustomerTransfer wins.
 */
interface OauthCustomerAuthenticationStrategyPluginInterface
{
    /**
     * Specification:
     * - Returns true if this strategy should handle the given resource owner.
     * - Called before resolveOauthCustomer() to allow conditional strategy selection.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerTransfer $resourceOwnerTransfer
     *
     * @return bool
     */
    public function isApplicable(ResourceOwnerTransfer $resourceOwnerTransfer): bool;

    /**
     * Specification:
     * - Resolves or creates a customer from the OAuth resource owner data.
     * - Returns null if the customer cannot be resolved by this strategy.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerTransfer $resourceOwnerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function resolveOauthCustomer(ResourceOwnerTransfer $resourceOwnerTransfer): ?CustomerTransfer;
}
