<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RenameAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* RenameAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class RenameAction extends Entity
{
    /**
    * Gets the oldName
    *
    * @return string The oldName
    */
    public function getOldName()
    {
        if (array_key_exists("oldName", $this->_propDict)) {
            return $this->_propDict["oldName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oldName
    *
    * @param string $val The value of the oldName
    *
    * @return RenameAction
    */
    public function setOldName($val)
    {
        $this->_propDict["oldName"] = $val;
        return $this;
    }
}