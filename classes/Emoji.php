<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package     emoji
 * @author      anwender
 * @license     GNU/LGPL
 * @copyright   Gerhard Tilg
 */


namespace Null0815;

use Emojione\Client;
use Emojione\Ruleset;

class Emoji {

    public static $client;

    /**
     * Setup emoji client
     */
    public function __construct() {

        self::$client = new Client(new Ruleset());

        self::$client->imageType = 'svg';
        self::$client->ascii = true;

    }

    /**
     * Replace ASCII/shortnames with emoji
     *
     * @param $strBuffer
     * @param $strTemplate
     *
     * @return string
     */
    public function parseFrontendTemplate($strBuffer, $strTemplate) {

        return self::$client->toImage($strBuffer);

    }

    /**
     * Convert emoji to their appropriate shortname
     *
     * @param $arrPost
     * @param $arrForm
     * @param $arrFiles
     */
    public function processFormData($arrPost, $arrForm, $arrFiles) {

        foreach($arrPost as $data) {

            $arrPost[$data] = self::$client->toShort($data);

        }

    }

    /**
     * Replace {{emoji::*}} insert tags
     *
     * @param $strTag
     *
     * @return string
     */
    public function replaceInsertTags($strTag) {

        $arrSplit = explode('::', $strTag);

        if($arrSplit[0] != 'emoji')
            return;

        if(isset($arrSplit[1]))
            return self::$client->toImage(':' . $arrSplit[1] . ':');

    }

}