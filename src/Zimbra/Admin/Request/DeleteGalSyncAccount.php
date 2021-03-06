<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Admin\Request;

use Zimbra\Struct\AccountSelector as Account;

/**
 * DeleteGalSyncAccount request class
 * Delete a Global Address List (GAL) Synchronisation account.
 * Remove its zimbraGalAccountId from the domain, then deletes the account.
 *
 * @package    Zimbra
 * @subpackage Admin
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class DeleteGalSyncAccount extends Base
{
    /**
     * Constructor method for DeleteGalSyncAccount
     * @param  Account $account Account
     * @return self
     */
    public function __construct(Account $account)
    {
        parent::__construct();
        $this->setChild('account', $account);
    }

    /**
     * Gets the account.
     *
     * @return Account
     */
    public function getAccount()
    {
        return $this->getChild('account');
    }

    /**
     * Sets the account.
     *
     * @param  Account $account
     * @return self
     */
    public function setAccount(Account $account)
    {
        return $this->setChild('account', $account);
    }
}
