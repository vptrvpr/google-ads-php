<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/recommendation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Resources;

class Recommendation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Extensions::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\KeywordMatchType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\RecommendationType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\TargetCpaOptInRecommendationGoal::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Ad::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a982e0a36676f6f676c652f6164732f676f6f676c656164732f76312f72" .
            "65736f75726365732f7265636f6d6d656e646174696f6e2e70726f746f12" .
            "21676f6f676c652e6164732e676f6f676c656164732e76312e7265736f75" .
            "726365731a2f676f6f676c652f6164732f676f6f676c656164732f76312f" .
            "636f6d6d6f6e2f657874656e73696f6e732e70726f746f1a36676f6f676c" .
            "652f6164732f676f6f676c656164732f76312f656e756d732f6b6579776f" .
            "72645f6d617463685f747970652e70726f746f1a37676f6f676c652f6164" .
            "732f676f6f676c656164732f76312f656e756d732f7265636f6d6d656e64" .
            "6174696f6e5f747970652e70726f746f1a49676f6f676c652f6164732f67" .
            "6f6f676c656164732f76312f656e756d732f7461726765745f6370615f6f" .
            "70745f696e5f7265636f6d6d656e646174696f6e5f676f616c2e70726f74" .
            "6f1a2a676f6f676c652f6164732f676f6f676c656164732f76312f726573" .
            "6f75726365732f61642e70726f746f1a1e676f6f676c652f70726f746f62" .
            "75662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f" .
            "616e6e6f746174696f6e732e70726f746f22d8280a0e5265636f6d6d656e" .
            "646174696f6e12150a0d7265736f757263655f6e616d6518012001280912" .
            "560a047479706518022001280e32482e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e656e756d732e5265636f6d6d656e646174696f6e" .
            "54797065456e756d2e5265636f6d6d656e646174696f6e5479706512560a" .
            "06696d7061637418032001280b32462e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e7265736f75726365732e5265636f6d6d656e6461" .
            "74696f6e2e5265636f6d6d656e646174696f6e496d7061637412350a0f63" .
            "616d706169676e5f62756467657418052001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c7565122e0a0863616d706169" .
            "676e18062001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c7565122e0a0861645f67726f757018072001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c7565122d0a09" .
            "6469736d6973736564180d2001280b321a2e676f6f676c652e70726f746f" .
            "6275662e426f6f6c56616c756512780a1e63616d706169676e5f62756467" .
            "65745f7265636f6d6d656e646174696f6e18042001280b324e2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e7265736f75726365732e" .
            "5265636f6d6d656e646174696f6e2e43616d706169676e42756467657452" .
            "65636f6d6d656e646174696f6e480012690a166b6579776f72645f726563" .
            "6f6d6d656e646174696f6e18082001280b32472e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e7265736f75726365732e5265636f6d6d" .
            "656e646174696f6e2e4b6579776f72645265636f6d6d656e646174696f6e" .
            "480012680a16746578745f61645f7265636f6d6d656e646174696f6e1809" .
            "2001280b32462e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e7265736f75726365732e5265636f6d6d656e646174696f6e2e54657874" .
            "41645265636f6d6d656e646174696f6e4800127a0a207461726765745f63" .
            "70615f6f70745f696e5f7265636f6d6d656e646174696f6e180a2001280b" .
            "324e2e676f6f676c652e6164732e676f6f676c656164732e76312e726573" .
            "6f75726365732e5265636f6d6d656e646174696f6e2e5461726765744370" .
            "614f7074496e5265636f6d6d656e646174696f6e4800128e010a2a6d6178" .
            "696d697a655f636f6e76657273696f6e735f6f70745f696e5f7265636f6d" .
            "6d656e646174696f6e180b2001280b32582e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76312e7265736f75726365732e5265636f6d6d656e" .
            "646174696f6e2e4d6178696d697a65436f6e76657273696f6e734f707449" .
            "6e5265636f6d6d656e646174696f6e4800127e0a22656e68616e6365645f" .
            "6370635f6f70745f696e5f7265636f6d6d656e646174696f6e180c200128" .
            "0b32502e676f6f676c652e6164732e676f6f676c656164732e76312e7265" .
            "736f75726365732e5265636f6d6d656e646174696f6e2e456e68616e6365" .
            "644370634f7074496e5265636f6d6d656e646174696f6e48001284010a25" .
            "7365617263685f706172746e6572735f6f70745f696e5f7265636f6d6d65" .
            "6e646174696f6e180e2001280b32532e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e7265736f75726365732e5265636f6d6d656e6461" .
            "74696f6e2e536561726368506172746e6572734f7074496e5265636f6d6d" .
            "656e646174696f6e48001284010a256d6178696d697a655f636c69636b73" .
            "5f6f70745f696e5f7265636f6d6d656e646174696f6e180f2001280b3253" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e7265736f75" .
            "726365732e5265636f6d6d656e646174696f6e2e4d6178696d697a65436c" .
            "69636b734f7074496e5265636f6d6d656e646174696f6e48001281010a23" .
            "6f7074696d697a655f61645f726f746174696f6e5f7265636f6d6d656e64" .
            "6174696f6e18102001280b32522e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e7265736f75726365732e5265636f6d6d656e64617469" .
            "6f6e2e4f7074696d697a654164526f746174696f6e5265636f6d6d656e64" .
            "6174696f6e4800127c0a2063616c6c6f75745f657874656e73696f6e5f72" .
            "65636f6d6d656e646174696f6e18112001280b32502e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e7265736f75726365732e5265636f" .
            "6d6d656e646174696f6e2e43616c6c6f7574457874656e73696f6e526563" .
            "6f6d6d656e646174696f6e4800127e0a21736974656c696e6b5f65787465" .
            "6e73696f6e5f7265636f6d6d656e646174696f6e18122001280b32512e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e7265736f757263" .
            "65732e5265636f6d6d656e646174696f6e2e536974656c696e6b45787465" .
            "6e73696f6e5265636f6d6d656e646174696f6e480012760a1d63616c6c5f" .
            "657874656e73696f6e5f7265636f6d6d656e646174696f6e18132001280b" .
            "324d2e676f6f676c652e6164732e676f6f676c656164732e76312e726573" .
            "6f75726365732e5265636f6d6d656e646174696f6e2e43616c6c45787465" .
            "6e73696f6e5265636f6d6d656e646174696f6e4800127d0a216b6579776f" .
            "72645f6d617463685f747970655f7265636f6d6d656e646174696f6e1814" .
            "2001280b32502e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e7265736f75726365732e5265636f6d6d656e646174696f6e2e4b657977" .
            "6f72644d61746368547970655265636f6d6d656e646174696f6e4800127d" .
            "0a216d6f76655f756e757365645f6275646765745f7265636f6d6d656e64" .
            "6174696f6e18152001280b32502e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e7265736f75726365732e5265636f6d6d656e64617469" .
            "6f6e2e4d6f7665556e757365644275646765745265636f6d6d656e646174" .
            "696f6e48001ad9010a145265636f6d6d656e646174696f6e496d70616374" .
            "125d0a0c626173655f6d65747269637318012001280b32472e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e7265736f75726365732e52" .
            "65636f6d6d656e646174696f6e2e5265636f6d6d656e646174696f6e4d65" .
            "747269637312620a11706f74656e7469616c5f6d65747269637318022001" .
            "280b32472e676f6f676c652e6164732e676f6f676c656164732e76312e72" .
            "65736f75726365732e5265636f6d6d656e646174696f6e2e5265636f6d6d" .
            "656e646174696f6e4d6574726963731a90020a155265636f6d6d656e6461" .
            "74696f6e4d65747269637312310a0b696d7072657373696f6e7318012001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "7565122c0a06636c69636b7318022001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e446f75626c6556616c756512300a0b636f73745f6d6963" .
            "726f7318032001280b321b2e676f6f676c652e70726f746f6275662e496e" .
            "74363456616c756512310a0b636f6e76657273696f6e7318042001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512" .
            "310a0b766964656f5f766965777318052001280b321c2e676f6f676c652e" .
            "70726f746f6275662e446f75626c6556616c75651aee030a1c43616d7061" .
            "69676e4275646765745265636f6d6d656e646174696f6e12410a1c637572" .
            "72656e745f6275646765745f616d6f756e745f6d6963726f731801200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565" .
            "12450a207265636f6d6d656e6465645f6275646765745f616d6f756e745f" .
            "6d6963726f7318022001280b321b2e676f6f676c652e70726f746f627566" .
            "2e496e74363456616c75651289010a0e6275646765745f6f7074696f6e73" .
            "18032003280b32712e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e7265736f75726365732e5265636f6d6d656e646174696f6e2e4361" .
            "6d706169676e4275646765745265636f6d6d656e646174696f6e2e43616d" .
            "706169676e4275646765745265636f6d6d656e646174696f6e4f7074696f" .
            "6e1ab7010a2243616d706169676e4275646765745265636f6d6d656e6461" .
            "74696f6e4f7074696f6e12390a146275646765745f616d6f756e745f6d69" .
            "63726f7318012001280b321b2e676f6f676c652e70726f746f6275662e49" .
            "6e74363456616c756512560a06696d7061637418022001280b32462e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e7265736f75726365" .
            "732e5265636f6d6d656e646174696f6e2e5265636f6d6d656e646174696f" .
            "6e496d706163741a96010a154b6579776f72645265636f6d6d656e646174" .
            "696f6e123c0a076b6579776f726418012001280b322b2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e636f6d6d6f6e2e4b6579776f72" .
            "64496e666f123f0a1a7265636f6d6d656e6465645f6370635f6269645f6d" .
            "6963726f7318022001280b321b2e676f6f676c652e70726f746f6275662e" .
            "496e74363456616c75651ac4010a1e4b6579776f72644d61746368547970" .
            "655265636f6d6d656e646174696f6e123c0a076b6579776f726418012001" .
            "280b322b2e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e4b6579776f7264496e666f12640a167265636f6d6d656e64" .
            "65645f6d617463685f7479706518022001280e32442e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e656e756d732e4b6579776f72644d" .
            "6174636854797065456e756d2e4b6579776f72644d61746368547970651a" .
            "b5010a145465787441645265636f6d6d656e646174696f6e12310a026164" .
            "18012001280b32252e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e7265736f75726365732e416412330a0d6372656174696f6e5f6461" .
            "746518022001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512350a0f6175746f5f6170706c795f64617465180320" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c75651a230a21536561726368506172746e6572734f7074496e5265636f" .
            "6d6d656e646174696f6e1a6a0a214d6178696d697a65436c69636b734f70" .
            "74496e5265636f6d6d656e646174696f6e12450a207265636f6d6d656e64" .
            "65645f6275646765745f616d6f756e745f6d6963726f7318012001280b32" .
            "1b2e676f6f676c652e70726f746f6275662e496e74363456616c75651a71" .
            "0a1e43616c6c6f7574457874656e73696f6e5265636f6d6d656e64617469" .
            "6f6e124f0a167265636f6d6d656e6465645f657874656e73696f6e731801" .
            "2003280b322f2e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e636f6d6d6f6e2e43616c6c6f7574466565644974656d1adf040a1c5461" .
            "726765744370614f7074496e5265636f6d6d656e646174696f6e1282010a" .
            "076f7074696f6e7318012003280b32712e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e7265736f75726365732e5265636f6d6d656e64" .
            "6174696f6e2e5461726765744370614f7074496e5265636f6d6d656e6461" .
            "74696f6e2e5461726765744370614f7074496e5265636f6d6d656e646174" .
            "696f6e4f7074696f6e12420a1d7265636f6d6d656e6465645f7461726765" .
            "745f6370615f6d6963726f7318022001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c75651af5020a225461726765744370" .
            "614f7074496e5265636f6d6d656e646174696f6e4f7074696f6e12720a04" .
            "676f616c18012001280e32642e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76312e656e756d732e5461726765744370614f7074496e526563" .
            "6f6d6d656e646174696f6e476f616c456e756d2e5461726765744370614f" .
            "7074496e5265636f6d6d656e646174696f6e476f616c12360a1174617267" .
            "65745f6370615f6d6963726f7318022001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c7565124b0a267265717569726564" .
            "5f63616d706169676e5f6275646765745f616d6f756e745f6d6963726f73" .
            "18032001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c756512560a06696d7061637418042001280b32462e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e7265736f75726365732e5265" .
            "636f6d6d656e646174696f6e2e5265636f6d6d656e646174696f6e496d70" .
            "6163741a6f0a264d6178696d697a65436f6e76657273696f6e734f707449" .
            "6e5265636f6d6d656e646174696f6e12450a207265636f6d6d656e646564" .
            "5f6275646765745f616d6f756e745f6d6963726f7318012001280b321b2e" .
            "676f6f676c652e70726f746f6275662e496e74363456616c75651a200a1e" .
            "456e68616e6365644370634f7074496e5265636f6d6d656e646174696f6e" .
            "1a220a204f7074696d697a654164526f746174696f6e5265636f6d6d656e" .
            "646174696f6e1a730a1f536974656c696e6b457874656e73696f6e526563" .
            "6f6d6d656e646174696f6e12500a167265636f6d6d656e6465645f657874" .
            "656e73696f6e7318012003280b32302e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e636f6d6d6f6e2e536974656c696e6b4665656449" .
            "74656d1a6b0a1b43616c6c457874656e73696f6e5265636f6d6d656e6461" .
            "74696f6e124c0a167265636f6d6d656e6465645f657874656e73696f6e73" .
            "18012003280b322c2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e43616c6c466565644974656d1acd010a1e4d6f76" .
            "65556e757365644275646765745265636f6d6d656e646174696f6e123c0a" .
            "166578636573735f63616d706169676e5f62756467657418012001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "6d0a156275646765745f7265636f6d6d656e646174696f6e18022001280b" .
            "324e2e676f6f676c652e6164732e676f6f676c656164732e76312e726573" .
            "6f75726365732e5265636f6d6d656e646174696f6e2e43616d706169676e" .
            "4275646765745265636f6d6d656e646174696f6e42100a0e7265636f6d6d" .
            "656e646174696f6e4280020a25636f6d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e7265736f757263657342135265636f6d6d656e" .
            "646174696f6e50726f746f50015a4a676f6f676c652e676f6c616e672e6f" .
            "72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f" .
            "676c656164732f76312f7265736f75726365733b7265736f7572636573a2" .
            "0203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56" .
            "312e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c" .
            "654164735c56315c5265736f7572636573ea0225476f6f676c653a3a4164" .
            "733a3a476f6f676c654164733a3a56313a3a5265736f7572636573620670" .
            "726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

