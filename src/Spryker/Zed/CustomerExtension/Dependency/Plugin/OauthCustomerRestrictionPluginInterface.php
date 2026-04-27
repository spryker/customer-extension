<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\OauthCustomerRestrictionRequestTransfer;
use Generated\Shared\Transfer\OauthCustomerRestrictionResponseTransfer;

/**
 * Use this plugin to restrict customers from authenticating via OAuth.
 *
 * Implement this interface to add custom restrictions on OAuth customer login,
 * such as verifying email domain, checking customer status, or validating B2B permissions.
 */
interface OauthCustomerRestrictionPluginInterface
{
    /**
     * Specification:
     * - Checks if the OAuth customer is restricted from logging in.
     * - Returns a response indicating whether the customer is restricted with optional messages.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\OauthCustomerRestrictionRequestTransfer $oauthCustomerRestrictionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\OauthCustomerRestrictionResponseTransfer
     */
    public function isRestricted(
        OauthCustomerRestrictionRequestTransfer $oauthCustomerRestrictionRequestTransfer,
    ): OauthCustomerRestrictionResponseTransfer;
}
