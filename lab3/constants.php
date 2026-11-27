<?php
header('Content-Type: text/plain; charset=UTF-8');
$allConstants = get_defined_constants(true);

echo "Массив\n(\n";

foreach ($allConstants as $category => $constants) {
    echo " [" . $category . "] => Array\n (\n";
    ksort($constants, SORT_STRING);

    foreach ($constants as $name => $value) {
        echo "  [" . $name . "] => " . formatValue($value) . "\n";
    }

    echo " )\n\n";
}

echo ")\n";

function formatValue(mixed $value): string
{
    if ($value === null) {
        return '';
    }
    if ($value === true) {
        return '1';
    }
    if ($value === false) {
        return '';
    }
    if (is_float($value)) {
        if (is_nan($value)) {
            return 'NAN';
        }
        if (is_infinite($value)) {
            return $value > 0 ? 'INF' : '-INF';
        }
        return rtrim(rtrim(str_replace('.', ',', (string) $value), '0'), ',');
    }
    if (is_int($value)) {
        return (string) $value;
    }
    if (is_string($value)) {
        return $value;
    }
    if (is_array($value)) {
        return 'Array';
    }
    return (string) $value;
}
