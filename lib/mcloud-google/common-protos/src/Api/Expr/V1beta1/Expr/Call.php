<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/expr.proto

namespace MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * A call expression, including calls to predefined functions and operators.
 * For example, `value == 10`, `size(map_value)`.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.Expr.Call</code>
 */
class Call extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The target of an method call-style expression. For example, `x` in
     * `x.f()`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr target = 1;</code>
     */
    private $target = null;
    /**
     * Required. The name of the function or method being called.
     *
     * Generated from protobuf field <code>string function = 2;</code>
     */
    private $function = '';
    /**
     * The arguments.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr args = 3;</code>
     */
    private $args;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr $target
     *           The target of an method call-style expression. For example, `x` in
     *           `x.f()`.
     *     @type string $function
     *           Required. The name of the function or method being called.
     *     @type \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr[]|\Google\Protobuf\Internal\RepeatedField $args
     *           The arguments.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Expr\V1Beta1\Expr::initOnce();
        parent::__construct($data);
    }

    /**
     * The target of an method call-style expression. For example, `x` in
     * `x.f()`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr target = 1;</code>
     * @return \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The target of an method call-style expression. For example, `x` in
     * `x.f()`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1beta1.Expr target = 1;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr::class);
        $this->target = $var;

        return $this;
    }

    /**
     * Required. The name of the function or method being called.
     *
     * Generated from protobuf field <code>string function = 2;</code>
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Required. The name of the function or method being called.
     *
     * Generated from protobuf field <code>string function = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->function = $var;

        return $this;
    }

    /**
     * The arguments.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr args = 3;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * The arguments.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr args = 3;</code>
     * @param \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr::class);
        $this->args = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Call::class, \MediaCloud\Vendor\Google\Api\Expr\V1beta1\Expr_Call::class);

