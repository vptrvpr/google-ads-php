<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/extension_feed_item.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An extension feed item.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.ExtensionFeedItem</code>
 */
class ExtensionFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 13;</code>
     */
    private $extension_type = 0;
    /**
     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     */
    private $start_date_time = null;
    /**
     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     */
    private $end_date_time = null;
    /**
     * List of non-overlapping schedules specifying all time intervals
     * for which the feed item may serve. There can be a maximum of 6 schedules
     * per day.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.AdScheduleInfo ad_schedules = 16;</code>
     */
    private $ad_schedules;
    /**
     * The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 17;</code>
     */
    private $device = 0;
    /**
     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20;</code>
     */
    private $targeted_geo_target_constant = null;
    /**
     * Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemStatusEnum.FeedItemStatus status = 4;</code>
     */
    private $status = 0;
    protected $extension;
    protected $serving_resource_targeting;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the extension feed item.
     *           Extension feed item resource names have the form:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *     @type int $extension_type
     *           The extension type of the extension feed item.
     *           This field is read-only.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           Start time in which this feed item is effective and can begin serving.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           End time in which this feed item is no longer effective and will stop
     *           serving.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Ads\GoogleAds\V1\Common\AdScheduleInfo[]|\Google\Protobuf\Internal\RepeatedField $ad_schedules
     *           List of non-overlapping schedules specifying all time intervals
     *           for which the feed item may serve. There can be a maximum of 6 schedules
     *           per day.
     *     @type int $device
     *           The targeted device.
     *     @type \Google\Protobuf\StringValue $targeted_geo_target_constant
     *           The targeted geo target constant.
     *     @type int $status
     *           Status of the feed item.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem $sitelink_feed_item
     *           Sitelink extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem $structured_snippet_feed_item
     *           Structured snippet extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\AppFeedItem $app_feed_item
     *           App extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\CallFeedItem $call_feed_item
     *           Call extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem $callout_feed_item
     *           Callout extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem $text_message_feed_item
     *           Text message extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\PriceFeedItem $price_feed_item
     *           Price extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem $promotion_feed_item
     *           Promotion extension.
     *     @type \Google\Ads\GoogleAds\V1\Common\LocationFeedItem $location_feed_item
     *           Location extension. Locations are synced from a GMB account into a feed.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V1\Common\AffiliateLocationFeedItem $affiliate_location_feed_item
     *           Affiliate location extension. Feed locations are populated by Google Ads
     *           based on a chain ID.
     *           This field is read-only.
     *     @type \Google\Protobuf\StringValue $targeted_campaign
     *           The targeted campaign.
     *     @type \Google\Protobuf\StringValue $targeted_ad_group
     *           The targeted ad group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\ExtensionFeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 13;</code>
     * @return int
     */
    public function getExtensionType()
    {
        return $this->extension_type;
    }

    /**
     * The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setExtensionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\ExtensionTypeEnum_ExtensionType::class);
        $this->extension_type = $var;

        return $this;
    }

    /**
     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDateTime()
    {
        return $this->start_date_time;
    }

    /**
     * Returns the unboxed value from <code>getStartDateTime()</code>

     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @return string|null
     */
    public function getStartDateTimeValue()
    {
        $wrapper = $this->getStartDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Start time in which this feed item is effective and can begin serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStartDateTimeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setStartDateTime($wrappedVar);
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDateTime()
    {
        return $this->end_date_time;
    }

    /**
     * Returns the unboxed value from <code>getEndDateTime()</code>

     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @return string|null
     */
    public function getEndDateTimeValue()
    {
        $wrapper = $this->getEndDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->end_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * End time in which this feed item is no longer effective and will stop
     * serving.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setEndDateTimeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setEndDateTime($wrappedVar);
    }

    /**
     * List of non-overlapping schedules specifying all time intervals
     * for which the feed item may serve. There can be a maximum of 6 schedules
     * per day.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.AdScheduleInfo ad_schedules = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdSchedules()
    {
        return $this->ad_schedules;
    }

    /**
     * List of non-overlapping schedules specifying all time intervals
     * for which the feed item may serve. There can be a maximum of 6 schedules
     * per day.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.AdScheduleInfo ad_schedules = 16;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\AdScheduleInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdSchedules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\AdScheduleInfo::class);
        $this->ad_schedules = $arr;

        return $this;
    }

    /**
     * The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 17;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FeedItemTargetDeviceEnum_FeedItemTargetDevice::class);
        $this->device = $var;

        return $this;
    }

    /**
     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetedGeoTargetConstant()
    {
        return $this->targeted_geo_target_constant;
    }

    /**
     * Returns the unboxed value from <code>getTargetedGeoTargetConstant()</code>

     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20;</code>
     * @return string|null
     */
    public function getTargetedGeoTargetConstantValue()
    {
        $wrapper = $this->getTargetedGeoTargetConstant();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetedGeoTargetConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->targeted_geo_target_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetedGeoTargetConstantValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setTargetedGeoTargetConstant($wrappedVar);
    }

    /**
     * Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemStatusEnum.FeedItemStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.FeedItemStatusEnum.FeedItemStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\FeedItemStatusEnum_FeedItemStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Sitelink extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.SitelinkFeedItem sitelink_feed_item = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem
     */
    public function getSitelinkFeedItem()
    {
        return $this->readOneof(2);
    }

    /**
     * Sitelink extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.SitelinkFeedItem sitelink_feed_item = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem $var
     * @return $this
     */
    public function setSitelinkFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\SitelinkFeedItem::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Structured snippet extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.StructuredSnippetFeedItem structured_snippet_feed_item = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem
     */
    public function getStructuredSnippetFeedItem()
    {
        return $this->readOneof(3);
    }

    /**
     * Structured snippet extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.StructuredSnippetFeedItem structured_snippet_feed_item = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem $var
     * @return $this
     */
    public function setStructuredSnippetFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\StructuredSnippetFeedItem::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * App extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AppFeedItem app_feed_item = 7;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\AppFeedItem
     */
    public function getAppFeedItem()
    {
        return $this->readOneof(7);
    }

    /**
     * App extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AppFeedItem app_feed_item = 7;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\AppFeedItem $var
     * @return $this
     */
    public function setAppFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\AppFeedItem::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Call extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CallFeedItem call_feed_item = 8;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\CallFeedItem
     */
    public function getCallFeedItem()
    {
        return $this->readOneof(8);
    }

    /**
     * Call extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CallFeedItem call_feed_item = 8;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CallFeedItem $var
     * @return $this
     */
    public function setCallFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\CallFeedItem::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CalloutFeedItem callout_feed_item = 9;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem
     */
    public function getCalloutFeedItem()
    {
        return $this->readOneof(9);
    }

    /**
     * Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CalloutFeedItem callout_feed_item = 9;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem $var
     * @return $this
     */
    public function setCalloutFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\CalloutFeedItem::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Text message extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TextMessageFeedItem text_message_feed_item = 10;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem
     */
    public function getTextMessageFeedItem()
    {
        return $this->readOneof(10);
    }

    /**
     * Text message extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TextMessageFeedItem text_message_feed_item = 10;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem $var
     * @return $this
     */
    public function setTextMessageFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\TextMessageFeedItem::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PriceFeedItem price_feed_item = 11;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\PriceFeedItem
     */
    public function getPriceFeedItem()
    {
        return $this->readOneof(11);
    }

    /**
     * Price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PriceFeedItem price_feed_item = 11;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PriceFeedItem $var
     * @return $this
     */
    public function setPriceFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\PriceFeedItem::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Promotion extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PromotionFeedItem promotion_feed_item = 12;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem
     */
    public function getPromotionFeedItem()
    {
        return $this->readOneof(12);
    }

    /**
     * Promotion extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PromotionFeedItem promotion_feed_item = 12;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem $var
     * @return $this
     */
    public function setPromotionFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\PromotionFeedItem::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Location extension. Locations are synced from a GMB account into a feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LocationFeedItem location_feed_item = 14;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\LocationFeedItem
     */
    public function getLocationFeedItem()
    {
        return $this->readOneof(14);
    }

    /**
     * Location extension. Locations are synced from a GMB account into a feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LocationFeedItem location_feed_item = 14;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\LocationFeedItem $var
     * @return $this
     */
    public function setLocationFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\LocationFeedItem::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Affiliate location extension. Feed locations are populated by Google Ads
     * based on a chain ID.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AffiliateLocationFeedItem affiliate_location_feed_item = 15;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\AffiliateLocationFeedItem
     */
    public function getAffiliateLocationFeedItem()
    {
        return $this->readOneof(15);
    }

    /**
     * Affiliate location extension. Feed locations are populated by Google Ads
     * based on a chain ID.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AffiliateLocationFeedItem affiliate_location_feed_item = 15;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\AffiliateLocationFeedItem $var
     * @return $this
     */
    public function setAffiliateLocationFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\AffiliateLocationFeedItem::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetedCampaign()
    {
        return $this->readOneof(18);
    }

    /**
     * Returns the unboxed value from <code>getTargetedCampaign()</code>

     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18;</code>
     * @return string|null
     */
    public function getTargetedCampaignValue()
    {
        $wrapper = $this->getTargetedCampaign();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetedCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetedCampaignValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setTargetedCampaign($wrappedVar);
    }

    /**
     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetedAdGroup()
    {
        return $this->readOneof(19);
    }

    /**
     * Returns the unboxed value from <code>getTargetedAdGroup()</code>

     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19;</code>
     * @return string|null
     */
    public function getTargetedAdGroupValue()
    {
        $wrapper = $this->getTargetedAdGroup();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetedAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetedAdGroupValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setTargetedAdGroup($wrappedVar);
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->whichOneof("extension");
    }

    /**
     * @return string
     */
    public function getServingResourceTargeting()
    {
        return $this->whichOneof("serving_resource_targeting");
    }

}

