<?php

declare(strict_types=1);

class WordFilterInfo extends ExtensionInfo
{
    public const KEY = "word_filter";

    public string $key = self::KEY;
    public string $name = "Word Filter";
    public string $url = self::SHIMMIE_URL;
    public array $authors = self::SHISH_AUTHOR;
    public string $license = self::LICENSE_GPLV2;
    public string $description = "Simple search and replace";
}
