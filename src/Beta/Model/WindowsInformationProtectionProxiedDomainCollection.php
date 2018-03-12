<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionProxiedDomainCollection File
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
* WindowsInformationProtectionProxiedDomainCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsInformationProtectionProxiedDomainCollection extends Entity
{
    /**
    * Gets the displayName
    * Display name
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsInformationProtectionProxiedDomainCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the proxiedDomains
    * Collection of proxied domains
    *
    * @return ProxiedDomain The proxiedDomains
    */
    public function getProxiedDomains()
    {
        if (array_key_exists("proxiedDomains", $this->_propDict)) {
            if (is_a($this->_propDict["proxiedDomains"], "Microsoft\Graph\Model\ProxiedDomain")) {
                return $this->_propDict["proxiedDomains"];
            } else {
                $this->_propDict["proxiedDomains"] = new ProxiedDomain($this->_propDict["proxiedDomains"]);
                return $this->_propDict["proxiedDomains"];
            }
        }
        return null;
    }

    /**
    * Sets the proxiedDomains
    * Collection of proxied domains
    *
    * @param ProxiedDomain $val The value to assign to the proxiedDomains
    *
    * @return WindowsInformationProtectionProxiedDomainCollection The WindowsInformationProtectionProxiedDomainCollection
    */
    public function setProxiedDomains($val)
    {
        $this->_propDict["proxiedDomains"] = $val;
         return $this;
    }
}