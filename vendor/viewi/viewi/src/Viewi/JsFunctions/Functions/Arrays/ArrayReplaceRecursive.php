<?php

namespace Viewi\JsFunctions\Functions\Arrays;

use Viewi\JsFunctions\BaseFunctionConverter;
use Viewi\JsTranslator;

class ArrayReplaceRecursive extends BaseFunctionConverter
{
    public static string $name = 'array_replace_recursive';

    public static function convert(
        JsTranslator $translator,
        string $code,
        string $indentation
    ): string {
        $jsToInclude = __DIR__ . DIRECTORY_SEPARATOR . 'ArrayReplaceRecursive.js';
        $translator->includeJsFile(self::$name, $jsToInclude);
        return $code . '(';
    }
}
