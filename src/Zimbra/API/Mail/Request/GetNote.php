<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\API\Mail\Request;

use Zimbra\Soap\Request;
use Zimbra\Soap\Struct\Id;

/**
 * GetNote request class
 *
 * @package   Zimbra
 * @category  API
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class GetNote extends Request
{
    /**
     * Specification for note.
     * @var Id
     */
    private $_note;

    /**
     * Constructor method for GetNote
     * @param  Id $note
     * @return self
     */
    public function __construct(Id $note)
    {
        parent::__construct();
        $this->_note = $note;
    }

    /**
     * Get or set note
     *
     * @param  Id $note
     * @return Id|self
     */
    public function note(Id $note = null)
    {
        if(null === $note)
        {
            return $this->_note;
        }
        $this->_note = $note;
        return $this;
    }

    /**
     * Returns the array representation of this class 
     *
     * @return array
     */
    public function toArray()
    {
        $this->array += $this->_note->toArray('note');
        return parent::toArray();
    }

    /**
     * Method returning the xml representation of this class
     *
     * @return SimpleXML
     */
    public function toXml()
    {
        $this->xml->append($this->_note->toXml('note'));
        return parent::toXml();
    }
}
