<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\CustomInfoType\Dictionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message defining a list of words or phrases to search for in the data.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CustomInfoType.Dictionary.WordList</code>
 */
class WordList extends \Google\Protobuf\Internal\Message
{
    /**
     * Words or phrases defining the dictionary. The dictionary must contain
     * at least one phrase and every phrase must contain at least 2 characters
     * that are letters or digits. [required]
     *
     * Generated from protobuf field <code>repeated string words = 1;</code>
     */
    private $words;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $words
     *           Words or phrases defining the dictionary. The dictionary must contain
     *           at least one phrase and every phrase must contain at least 2 characters
     *           that are letters or digits. [required]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Words or phrases defining the dictionary. The dictionary must contain
     * at least one phrase and every phrase must contain at least 2 characters
     * that are letters or digits. [required]
     *
     * Generated from protobuf field <code>repeated string words = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Words or phrases defining the dictionary. The dictionary must contain
     * at least one phrase and every phrase must contain at least 2 characters
     * that are letters or digits. [required]
     *
     * Generated from protobuf field <code>repeated string words = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->words = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WordList::class, \Google\Cloud\Dlp\V2\CustomInfoType_Dictionary_WordList::class);

