<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subject StructType
 * @subpackage Structs
 */
class Subject extends AbstractStructBase
{
    /**
     * The national_id
     */
    public $national_id;
    /**
     * The first_name
     */
    public $first_name;
    /**
     * The last_name
     */
    public $last_name;
    /**
     * The mobile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mobile;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The username
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $username;
    /**
     * The attribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Signicat\DocumentServiceV3_API\StructType\Attribute[]
     */
    public $attribute;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * Constructor method for subject
     * @uses Subject::setNational_id()
     * @uses Subject::setFirst_name()
     * @uses Subject::setLast_name()
     * @uses Subject::setMobile()
     * @uses Subject::setEmail()
     * @uses Subject::setUsername()
     * @uses Subject::setAttribute()
     * @uses Subject::setId()
     * @param string $national_id
     * @param string $first_name
     * @param string $last_name
     * @param string $mobile
     * @param string $email
     * @param string $username
     * @param \Signicat\DocumentServiceV3_API\StructType\Attribute[] $attribute
     * @param string $id
     */
    public function __construct($national_id = null, $first_name = null, $last_name = null, $mobile = null, $email = null, $username = null, array $attribute = array(), $id = null)
    {
        $this
            ->setNational_id($national_id)
            ->setFirst_name($first_name)
            ->setLast_name($last_name)
            ->setMobile($mobile)
            ->setEmail($email)
            ->setUsername($username)
            ->setAttribute($attribute)
            ->setId($id);
    }
    /**
     * Get national_id value
     * @return national_id
     */
    public function getNational_id()
    {
        return $this->{'national-id'};
    }
    /**
     * Set national_id value
     * @param national_id $national_id
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setNational_id($national_id = null)
    {
        // validation for constraint: string
        if (!is_null($national_id) && !is_string($national_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($national_id)), __LINE__);
        }
        $this->national_id = $this->{'national-id'} = $national_id;
        return $this;
    }
    /**
     * Get first_name value
     * @return first_name
     */
    public function getFirst_name()
    {
        return $this->{'first-name'};
    }
    /**
     * Set first_name value
     * @param first_name $first_name
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $this->{'first-name'} = $first_name;
        return $this;
    }
    /**
     * Get last_name value
     * @return last_name
     */
    public function getLast_name()
    {
        return $this->{'last-name'};
    }
    /**
     * Set last_name value
     * @param last_name $last_name
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $this->{'last-name'} = $last_name;
        return $this;
    }
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
        }
        $this->username = $username;
        return $this;
    }
    /**
     * Get attribute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Signicat\DocumentServiceV3_API\StructType\Attribute[]|null
     */
    public function getAttribute()
    {
        return isset($this->attribute) ? $this->attribute : null;
    }
    /**
     * Set attribute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Attribute[] $attribute
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $subjectAttributeItem) {
            // validation for constraint: itemType
            if (!$subjectAttributeItem instanceof \Signicat\DocumentServiceV3_API\StructType\Attribute) {
                throw new \InvalidArgumentException(sprintf('The attribute property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Attribute, "%s" given', is_object($subjectAttributeItem) ? get_class($subjectAttributeItem) : gettype($subjectAttributeItem)), __LINE__);
            }
        }
        if (is_null($attribute) || (is_array($attribute) && empty($attribute))) {
            unset($this->attribute);
        } else {
            $this->attribute = $attribute;
        }
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws \InvalidArgumentException
     * @param \Signicat\DocumentServiceV3_API\StructType\Attribute $item
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function addToAttribute(\Signicat\DocumentServiceV3_API\StructType\Attribute $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Signicat\DocumentServiceV3_API\StructType\Attribute) {
            throw new \InvalidArgumentException(sprintf('The attribute property can only contain items of \Signicat\DocumentServiceV3_API\StructType\Attribute, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->attribute[] = $item;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Subject
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
