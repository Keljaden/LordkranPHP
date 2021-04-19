<?php

function array_fill_rand($limit, $min=false, $max=false)
{
    $limit = (int)$limit;
    $array = array();

    if ($min !== false && $max !== false)
    {
        $min = (int)$min;
        $max = (int)$max;
        for ($i=0; $i<$limit; $i++)
        {
            $array[$i] = rand($min, $max);
        }
    }

    return $array;
}

echo '<pre>';

$rand_array = array_fill_rand(50, -100, 100);
print_r ($rand_array). "\n";
echo "минимальное значение " .(min($rand_array))  . "\n";
echo "максимальное значение " . (max($rand_array))  . "\n";
$average = array_sum($rand_array) / count($rand_array);
echo "Среднее по массиву " .$average . "\n";



echo '</pre>';

?>