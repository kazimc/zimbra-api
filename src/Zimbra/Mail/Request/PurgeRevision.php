<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Mail\Request;

use Zimbra\Mail\Struct\PurgeRevisionSpec;
use Zimbra\Soap\Request;

/**
 * PurgeRevision request class
 * Purge revision
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class PurgeRevision extends Request
{
    /**
     * Constructor method for PurgeRevision
     * @param  PurgeRevisionSpec $revision
     * @return self
     */
    public function __construct(PurgeRevisionSpec $revision)
    {
        parent::__construct();
        $this->child('revision', $revision);
    }

    /**
     * Get or set revision
     *
     * @param  PurgeRevisionSpec $revision
     * @return PurgeRevisionSpec|self
     */
    public function revision(PurgeRevisionSpec $revision = null)
    {
        if(null === $revision)
        {
            return $this->child('revision');
        }
        return $this->child('revision', $revision);
    }
}