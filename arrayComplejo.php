// Array simple: solo valores y keys predeterminados
$courses = ['JS', 'Laravel', 'PHP', 'Vuejs'];

echo "<pre>";
var_dump($courses);

// Array complejo
$coursesKey = [
    'frontend' => 'JS',
    'framework' => 'Laravel',
    'backend' => 'PHP', 'framework2' => 'Vuejs'
];

foreach($coursesKey as $key => $value)
{
    echo "$key: $value <br>";
}


//funciones de php para arrays
function upperStringCourse($course)
{
    echo strtoupper($course). "<br>";
}

//Recorre toda la colección y llama a la función con cada elemento
array_walk($coursesKey,'upperStringCourse');

echo "array_key_exists <br>";
$existCourse = array_key_exists('framework', $coursesKey);
var_dump($existCourse);
echo "<br>";

echo "in_array <br>";
$inArrayCourse = in_array('JS', $coursesKey);
var_dump($inArrayCourse);
echo "<br>";

echo "array_values <br>";
$arrayValues = array_values($coursesKey);
var_dump($arrayValues);
echo "<br>";

echo "array_keys <br>";
$arrayKeys = array_keys($coursesKey);
var_dump($arrayKeys);