<?php
class VMware_VCloud_API_AdminOrgType extends VMware_VCloud_API_OrgType {
    protected $Settings = null;
    protected $Users = null;
    protected $Groups = null;
    protected $Catalogs = null;
    protected $Vdcs = null;
    protected $Networks = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    protected $RoleReferences = null;

    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param string $FullName - [required] 
    * @param boolean $IsEnabled - [optional] 
    * @param VMware_VCloud_API_OrgSettingsType $Settings - [required]
    * @param VMware_VCloud_API_UsersListType $Users - [optional]
    * @param VMware_VCloud_API_GroupsListType $Groups - [optional]
    * @param VMware_VCloud_API_CatalogsListType $Catalogs - [optional]
    * @param VMware_VCloud_API_VdcsType $Vdcs - [optional]
    * @param VMware_VCloud_API_NetworksType $Networks - [optional]
    * @param VMware_VCloud_API_RoleReferencesType $RoleReferences - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $FullName=null, $IsEnabled=null, $Settings=null, $Users=null, $Groups=null, $Catalogs=null, $Vdcs=null, $Networks=null, $RoleReferences = null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $FullName, $IsEnabled);
        $this->Settings = $Settings;
        $this->Users = $Users;
        $this->Groups = $Groups;
        $this->Catalogs = $Catalogs;
        $this->Vdcs = $Vdcs;
        $this->Networks = $Networks;
        $this->RoleReferences = $RoleReferences;
        $this->tagName = 'AdminOrg';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSettings() {
        return $this->Settings;
    }
    public function setSettings($Settings) { 
        $this->Settings = $Settings;
    }
    public function getUsers() {
        return $this->Users;
    }
    public function setUsers($Users) { 
        $this->Users = $Users;
    }
    public function getGroups() {
        return $this->Groups;
    }
    public function setGroups($Groups) { 
        $this->Groups = $Groups;
    }
    public function getCatalogs() {
        return $this->Catalogs;
    }
    public function setCatalogs($Catalogs) { 
        $this->Catalogs = $Catalogs;
    }
    public function getVdcs() {
        return $this->Vdcs;
    }
    public function setVdcs($Vdcs) { 
        $this->Vdcs = $Vdcs;
    }
    public function getNetworks() {
        return $this->Networks;
    }
    public function getRoleReferences() {
        return $this->RoleReferences;
    }
    public function setNetworks($Networks) { 
        $this->Networks = $Networks;
    }
    public function setRoleReferences($RoleReferences) {
        $this->RoleReferences = $RoleReferences;
    }
    public function get_tagName() { return $this->tagName; }
    public function set_tagName($tagName) { $this->tagName = $tagName; }
    public function export($name=null, $out='', $level=0, $namespacedef=null, $namespace=null, $rootNS=null) {
        if (!isset($name)) {
            $name = $this->tagName;
        }
        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
        if (is_null($namespace)) {
            $namespace = self::$defaultNS;
        }
        if (is_null($rootNS)) {
            $rootNS = self::$defaultNS;
        }
        if (NULL === $namespacedef) {
            $namespacedef = $this->namespacedef;
            if (0 >= strpos($namespacedef, 'xmlns=')) {
                $namespacedef = ' xmlns="' . self::$defaultNS . '"' . $namespacedef;
            }
        }
        $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, $name, self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, '<' . $ns . $name . $namespacedef);
        $out = $this->exportAttributes($out, $level, $name, $namespacedef, $namespace, $rootNS);
        if ($this->hasContent()) {
            $out = VMware_VCloud_API_Helper::addString($out, ">\n");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportAttributes($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Settings)) {
            $out = $this->Settings->export('Settings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Users)) {
            $out = $this->Users->export('Users', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Groups)) {
            $out = $this->Groups->export('Groups', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Catalogs)) {
            $out = $this->Catalogs->export('Catalogs', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Vdcs)) {
            $out = $this->Vdcs->export('Vdcs', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Networks)) {
            $out = $this->Networks->export('Networks', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->RoleReferences)) {
            $out = $this->RoleReferences->export('RoleReferences', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Settings) ||
            !is_null($this->Users) ||
            !is_null($this->Groups) ||
            !is_null($this->Catalogs) ||
            !is_null($this->Vdcs) ||
            !is_null($this->Networks) ||
            !is_null($this->RoleReferences) ||
            parent::hasContent()
            ) {
            return true;
        } else {
            return false;
        }
    }
    public function build($node, $namespaces='') {
        $tagName = $node->tagName;
        $this->tagName = $tagName;
        if (strpos($tagName, ':') > 0) {
            list($namespace, $tagName) = explode(':', $tagName);
            $this->tagName = $tagName;
            $this->namespace[$tagName] = $namespace;
        }
        $this->buildAttributes($node, $namespaces);
        $children = $node->childNodes;
        foreach ($children as $child) {
            if ($child->nodeType == XML_ELEMENT_NODE || $child->nodeType == XML_TEXT_NODE) {
                $namespace = '';
                $nodeName = $child->nodeName;
                if (strpos($nodeName, ':') > 0) {
                    list($namespace, $nodeName) = explode(':', $nodeName);
                }
                $this->buildChildren($child, $nodeName, $namespace);
            }
        }
    }
    protected function buildAttributes($node, $namespaces='') {
        $attrs = $node->attributes;
        if (!empty($namespaces)) {
            $this->namespacedef = VMware_VCloud_API_Helper::constructNS($attrs, $namespaces, $this->namespacedef) . $this->namespacedef;
        }
        $nsUri = self::$defaultNS;
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Settings') {
            $obj = new VMware_VCloud_API_OrgSettingsType();
            $obj->build($child);
            $obj->set_tagName('Settings');
            $this->setSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['Settings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Users') {
            $obj = new VMware_VCloud_API_UsersListType();
            $obj->build($child);
            $obj->set_tagName('Users');
            $this->setUsers($obj);
            if (!empty($namespace)) {
                $this->namespace['Users'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Groups') {
            $obj = new VMware_VCloud_API_GroupsListType();
            $obj->build($child);
            $obj->set_tagName('Groups');
            $this->setGroups($obj);
            if (!empty($namespace)) {
                $this->namespace['Groups'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Catalogs') {
            $obj = new VMware_VCloud_API_CatalogsListType();
            $obj->build($child);
            $obj->set_tagName('Catalogs');
            $this->setCatalogs($obj);
            if (!empty($namespace)) {
                $this->namespace['Catalogs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Vdcs') {
            $obj = new VMware_VCloud_API_VdcsType();
            $obj->build($child);
            $obj->set_tagName('Vdcs');
            $this->setVdcs($obj);
            if (!empty($namespace)) {
                $this->namespace['Vdcs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RoleReferences') {
            $obj = new VMware_VCloud_API_RoleReferencesType();
            $obj->build($child);
            $obj->set_tagName('RoleReferences');
            $this->setRoleReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['RoleReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Networks') {
            $obj = new VMware_VCloud_API_NetworksType();
            $obj->build($child);
            $obj->set_tagName('Networks');
            $this->setNetworks($obj);
            if (!empty($namespace)) {
                $this->namespace['Networks'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}