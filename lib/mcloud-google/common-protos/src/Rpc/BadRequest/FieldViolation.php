<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace MediaCloud\Vendor\Google\Rpc\BadRequest;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * A message type used to describe a single bad request field.
 *
 * Generated from protobuf message <code>google.rpc.BadRequest.FieldViolation</code>
 */
class FieldViolation extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * A path leading to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field. E.g., "field_violations.field" would identify this field.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    /**
     * A description of why the request element is bad.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           A path leading to a field in the request body. The value will be a
     *           sequence of dot-separated identifiers that identify a protocol buffer
     *           field. E.g., "field_violations.field" would identify this field.
     *     @type string $description
     *           A description of why the request element is bad.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * A path leading to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field. E.g., "field_violations.field" would identify this field.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * A path leading to a field in the request body. The value will be a
     * sequence of dot-separated identifiers that identify a protocol buffer
     * field. E.g., "field_violations.field" would identify this field.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * A description of why the request element is bad.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of why the request element is bad.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldViolation::class, \MediaCloud\Vendor\Google\Rpc\BadRequest_FieldViolation::class);

