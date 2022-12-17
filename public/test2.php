<?php

$names = ['Eduardo', 'Paulo', 'Pedro'];

/*for($i = 0; $i < count($names); $i++)
{
    echo $names[$i].PHP_EOL;
}*/

foreach ($names as $key => $name)
{
    if($key == 1)
    {
        break;
    }
    echo $key . ' => ' . $name . PHP_EOL;
}