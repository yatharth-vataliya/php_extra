<?php

function dataSet(&$target, string|array $dotString, $value, ?bool $overwrite = true)
{
    $target = $target ?? [];
    $dotVarArray = is_array($dotString) ? $dotString : (explode('.', $dotString) ?? []);
    $firstPoint = array_shift($dotVarArray);
    if ($dotVarArray) {
        if (! array_key_exists($firstPoint, $target)) {
            $target[$firstPoint] = [];
        }
        dataSet($target[$firstPoint], $dotVarArray, $value, $overwrite);
    } elseif ($overwrite) {
        $target[$firstPoint] = $value;
    }
}

function dataGet(string $dotString, array $mixedArray): mixed
{
    if (count($mixedArray) > 0 && $dotString) {

        $returnValue = null;
        foreach (explode('.', $dotString) as $dot) {
            if (! array_key_exists($dot, $mixedArray)) {
                $returnValue = null;
                break;
            }
            $returnValue = $returnValue ? $returnValue[$dot] : $mixedArray[$dot];
        }

        return $returnValue;
    }

    return null;
}

$dotString = 'userinfo.name.first_name';

dataSet($data, $dotString, 'Yatharth', false);

var_dump($data);

var_dump(dataGet($dotString, $data ?? []));

// both array declarations are identical
$data['userinfo']['name']['first_name'] = 'Yatharth';
$data = [
    'userinfo' => [
        'name' => [
            'first_name' => 'Yatharth',
        ],
    ],
];
