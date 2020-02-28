<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/criteria.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A keyword criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.KeywordInfo</code>
 */
class KeywordInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The text of the keyword (at most 80 characters and 10 words).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     */
    protected $text = null;
    /**
     * The match type of the keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 2;</code>
     */
    protected $match_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $text
     *           The text of the keyword (at most 80 characters and 10 words).
     *     @type int $match_type
     *           The match type of the keyword.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The text of the keyword (at most 80 characters and 10 words).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * The text of the keyword (at most 80 characters and 10 words).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * The text of the keyword (at most 80 characters and 10 words).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The text of the keyword (at most 80 characters and 10 words).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

    /**
     * The match type of the keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 2;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The match type of the keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\KeywordMatchTypeEnum_KeywordMatchType::class);
        $this->match_type = $var;

        return $this;
    }

}
