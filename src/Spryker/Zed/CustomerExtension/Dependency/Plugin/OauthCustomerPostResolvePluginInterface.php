<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\CustomerTransfer;
use Generated\Shared\Transfer\ResourceOwnerTransfer;

/**
 * Use this plugin to execute actions after a customer has been successfully resolved via OAuth login.
 *
 * Implement this interface to add post-resolution side effects such as identity persistence,
 * company assignment, or welcome notifications. All registered plugins are executed regardless
 * of which authentication strategy resolved the customer.
 */
interface OauthCustomerPostResolvePluginInterface
{
    /**
     * Specification:
     * - Called after a customer has been successfully resolved or created during OAuth login.
     * - Receives the resolved customer and the original resource owner data.
     * - Executed for every successful resolution regardless of which strategy was used.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     * @param \Generated\Shared\Transfer\ResourceOwnerTransfer $resourceOwnerTransfer
     *
     * @return void
     */
    public function postResolve(CustomerTransfer $customerTransfer, ResourceOwnerTransfer $resourceOwnerTransfer): void;
}
