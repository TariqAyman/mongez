<?php
namespace HZ\Illuminate\Organizer\Macros\Support;

class Arr
{
    /**
     * Remove from array by the given value 
     * 
     * @param  mixed $value
     * @param  array $array
     * @param  bool $removeFirstOnly
     * @return array
     */
    public static function remove()
    {
        return function (array $array, $value, bool $removeFirstOnly = false): array {
            foreach ($array as $key => $arrayValue) {
                if ($value == $arrayValue) {
                    unset($array[$key]);
                    if ($removeFirstOnly === true) break;
                }
            }

            return $array;
        };
    }
}
