<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace GRPC\Ping\GPBMetadata;

class Service
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            '0afe010a0d736572766963652e70726f746f120870696e672e64746f221a0a0b50696e6752657175657374120b0a0375726c180120012809224e0a0c50696e67526573706f6e7365120e0a06737461747573180120012805122e0a0a637265617465645f617418022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7032490a0b50696e6753657276696365123a0a0750696e6755726c12152e70696e672e64746f2e50696e67526571756573741a162e70696e672e64746f2e50696e67526573706f6e736522004224ca0209475250435c50696e67e20215475250435c50696e675c4750424d65746164617461620670726f746f33'
        ), true);

        static::$is_initialized = true;
    }
}
