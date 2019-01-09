<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CustomerExtension\Dependency\Plugin;

interface CustomerSecuredPatternPermissionPluginInterface
{
    /**
     * Specification:
     * - Checks if plugin applicable.
     *
     * @api
     *
     * @return bool
     */
    public function isApplicable(): bool;

    /**
     * Specification:
     * - Modifies customer secured pattern before setting of security access rules.
     *
     * @api
     *
     * @param string $securedPattern
     *
     * @return string
     */
    public function execute(string $securedPattern): string;
}
