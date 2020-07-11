<?php declare(strict_types=1);

class MediaInfo extends ExtensionInfo
{
    public const KEY = "media";

    public $key = self::KEY;
    public $name = "Media";
    public $url = self::SHIMMIE_URL;
    public $authors = ["Matthew Barbour"=>"matthew@darkholme.net"];
    public $license = self::LICENSE_WTFPL;
    public $description = "Provides common functions and settings used for media operations.";
    public $core = true;
    public $visibility = self::VISIBLE_HIDDEN;
}
