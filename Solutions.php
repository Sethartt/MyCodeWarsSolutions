
//Which are in?
function inArray($array1, $array2) {
    $s = implode(" ",$array2);
        $r = array();
    foreach ($array1 as $value){
        substr_count($s, $value)>0?array_push($r,$value):null;
    }
    sort($r);
    return $r;
}

//Bit Counting
function countBits($n) 
{
   while($n>0){
     $binary .= $n%2;
     $n = $n/2;
   }
   return substr_count($binary, "1");
}

//Where my anagrams at?
function anagrams(string $word, array $words): array {
  $result = array();
  foreach($words as $value){
    if(countChars($word)==countChars($value))array_push($result, $value);
  }
  return $result;
}
  function countChars($data) {
    foreach (count_chars($data,1) as $i => $val) {
        $result[$i] = $val.chr($i);
    }
     sort($result);
     return $result;
  }
  
//Split Strings
  function solution($str) {
    strlen($str)%2!=0? $str.="_":null;
    return str_split($str, 2); 
}

//Build Tower
function tower_builder(int $n): array {
    $result = array();
    for($i=0 ; $i<$n  ; $i++){
    $floor = "";
      for($j=0 ; $j<2*$n-1 ; $j++){
        $j<$n-1-$i||$j>$n-1+$i ? $floor .= " " : $floor .= "*";
      }
      array_push($result, $floor);
    }
    return $result;
}

//Jaden Casing Strings
function toJadenCase($string) 
{
   $string = explode(" ", $string);
   foreach($string as $value){
   $result .= ucfirst($value)." ";
   }
   
   
   return rtrim($result);
}

//Odd or Even?
function odd_or_even(array $a): string {
  return (array_sum($a)%2 != 0) ? 'odd' : 'even';
}

//Printer Errors
function printerError($s) {
    $givenArray = str_split($s);
    $goodChars = str_split('abcdefghijklm');
    $wrongChars = 0;
    foreach($givenArray as $value){
        if(!in_array($value, $goodChars)){
            $wrongChars++;
        }
    }
    return $wrongChars."/".strlen($s);
}

//Vowel Count
function getCount($str) {
  $vowelsCount = 0;
  
  $arr1 = str_split($str);
  
  foreach($arr1 as $key){
  if($key == "a" || $key == "e" || $key == "i" || $key == "o" || $key == "u"){ 
    $vowelsCount++;
    }
    }
  return $vowelsCount;
}


