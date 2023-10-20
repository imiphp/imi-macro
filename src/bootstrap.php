<?php

declare(strict_types=1);

namespace Imi\Macro;

if (\PHP_VERSION_ID < 80000 && !\function_exists('Imi\Macro\str_starts_with'))
{
    function str_starts_with(?string $haystack, ?string $needle): bool
    {
        return str_starts_with($haystack, $needle);
    }
}

MacroComposerHook::hookComposer();
