<?php
class VMware_VCloud_API_NetworkServiceInsertionType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Name = null;
    protected $Id = null;
    protected $Category = null;
    protected $CategoryType = null;
    protected $VendorTemplates = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Name - [optional] 
    * @param string $Id - [optional] 
    * @param string $Category - [optional] 
    * @param string $CategoryType - [optional] 
    * @param array $VendorTemplates - [optional] an array of VMware_VCloud_API_VendorTemplateType objects
    */
    public function __construct($VCloudExtension=null, $Name=null, $Id=null, $Category=null, $CategoryType=null, $VendorTemplates=null) {
        parent::__construct($VCloudExtension);
        $this->Name = $Name;
        $this->Id = $Id;
        $this->Category = $Category;
        $this->CategoryType = $CategoryType;
        if (!is_null($VendorTemplates)) {
            $this->VendorTemplates = $VendorTemplates;
        }
        $this->tagName = 'NetworkServiceInsertion';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getId() {
        return $this->Id;
    }
    public function setId($Id) { 
        $this->Id = $Id;
    }
    public function getCategory() {
        return $this->Category;
    }
    public function setCategory($Category) { 
        $this->Category = $Category;
    }
    public function getCategoryType() {
        return $this->CategoryType;
    }
    public function setCategoryType($CategoryType) { 
        $this->CategoryType = $CategoryType;
    }
    public function getVendorTemplates() {
        return $this->VendorTemplates;
    }
    public function setVendorTemplates($VendorTemplates) { 
        $this->VendorTemplates = $VendorTemplates;
    }
    public function addVendorTemplates($value) { array_push($this->VendorTemplates, $value); }
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
        if (!is_null($this->Name)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Name>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Name')) . "</" . $ns . "Name>\n");
        }
        if (!is_null($this->Id)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Id', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Id>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Id, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Id')) . "</" . $ns . "Id>\n");
        }
        if (!is_null($this->Category)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Category', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Category>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Category, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Category')) . "</" . $ns . "Category>\n");
        }
        if (!is_null($this->CategoryType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CategoryType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CategoryType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->CategoryType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='CategoryType')) . "</" . $ns . "CategoryType>\n");
        }
        if (isset($this->VendorTemplates)) {
            foreach ($this->VendorTemplates as $VendorTemplates) {
                $out = $VendorTemplates->export('VendorTemplates', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Name) ||
            !is_null($this->Id) ||
            !is_null($this->Category) ||
            !is_null($this->CategoryType) ||
            !empty($this->VendorTemplates) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Name') {
            $sval = $child->nodeValue;
            $this->Name = $sval;
            if (!empty($namespace)) {
                $this->namespace['Name'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Id') {
            $sval = $child->nodeValue;
            $this->Id = $sval;
            if (!empty($namespace)) {
                $this->namespace['Id'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Category') {
            $sval = $child->nodeValue;
            $this->Category = $sval;
            if (!empty($namespace)) {
                $this->namespace['Category'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CategoryType') {
            $sval = $child->nodeValue;
            $this->CategoryType = $sval;
            if (!empty($namespace)) {
                $this->namespace['CategoryType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VendorTemplates') {
            $obj = new VMware_VCloud_API_VendorTemplateType();
            $obj->build($child);
            $obj->set_tagName('VendorTemplates');
            array_push($this->VendorTemplates, $obj);
            if (!empty($namespace)) {
                $this->namespace['VendorTemplates'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}