<?php

namespace Signicat\DocumentServiceV3_API\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for task-filter-criteria StructType
 * @subpackage Structs
 */
class Task_filter_criteria extends AbstractStructBase
{
    /**
     * The field
     * @var string
     */
    public $field;
    /**
     * The value
     * @var mixed
     */
    public $value;
    /**
     * The operator
     * Meta informations extracted from the WSDL
     * - default: equals
     * - minOccurs: 0
     * @var string
     */
    public $operator;
    /**
     * The case_sensitive
     */
    public $case_sensitive;
    /**
     * Constructor method for task-filter-criteria
     * @uses Task_filter_criteria::setField()
     * @uses Task_filter_criteria::setValue()
     * @uses Task_filter_criteria::setOperator()
     * @uses Task_filter_criteria::setCase_sensitive()
     * @param string $field
     * @param mixed $value
     * @param string $operator
     * @param bool $case_sensitive
     */
    public function __construct($field = null, $value = null, $operator = 'equals', $case_sensitive = true)
    {
        $this
            ->setField($field)
            ->setValue($value)
            ->setOperator($operator)
            ->setCase_sensitive($case_sensitive);
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @uses \Signicat\DocumentServiceV3_API\EnumType\Task_filter_field::valueIsValid()
     * @uses \Signicat\DocumentServiceV3_API\EnumType\Task_filter_field::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $field
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria
     */
    public function setField($field = null)
    {
        // validation for constraint: enumeration
        if (!\Signicat\DocumentServiceV3_API\EnumType\Task_filter_field::valueIsValid($field)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $field, implode(', ', \Signicat\DocumentServiceV3_API\EnumType\Task_filter_field::getValidValues())), __LINE__);
        }
        $this->field = $field;
        return $this;
    }
    /**
     * Get value value
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param mixed $value
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Get operator value
     * @return string|null
     */
    public function getOperator()
    {
        return $this->operator;
    }
    /**
     * Set operator value
     * @uses \Signicat\DocumentServiceV3_API\EnumType\Logical_operator::valueIsValid()
     * @uses \Signicat\DocumentServiceV3_API\EnumType\Logical_operator::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operator
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria
     */
    public function setOperator($operator = 'equals')
    {
        // validation for constraint: enumeration
        if (!\Signicat\DocumentServiceV3_API\EnumType\Logical_operator::valueIsValid($operator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operator, implode(', ', \Signicat\DocumentServiceV3_API\EnumType\Logical_operator::getValidValues())), __LINE__);
        }
        $this->operator = $operator;
        return $this;
    }
    /**
     * Get case_sensitive value
     * @return case_sensitive
     */
    public function getCase_sensitive()
    {
        return $this->{'case-sensitive'};
    }
    /**
     * Set case_sensitive value
     * @param case_sensitive $case_sensitive
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria
     */
    public function setCase_sensitive($case_sensitive = true)
    {
        $this->case_sensitive = $this->{'case-sensitive'} = $case_sensitive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Signicat\DocumentServiceV3_API\StructType\Task_filter_criteria
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
