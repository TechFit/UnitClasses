<?php
/**
 * @author Maxym Barvinok <nempak@gmail.com>
 */
/**
 * @param $range array
 * @return       integer
 */
function mediana($range){
  $countArray = count($range);
  if ($countArray % 2 != 0){
      $averageNumber = (int)floor($countArray/2);
      return $range[$averageNumber];
  }else{
      $averageNumber = $countArray/2;
      return $range[$averageNumber - 1];
  }
};
/**
 * @param $number integer
 * @return        bool
 */
function isPrime($number){
    if ($number === 1){
        return false;
    }else {
        for ($divider = 2; $divider * $divider <= $number; $divider++) {
            if ($number % $divider === 0) {
                return false;
            }
        }
        return true;
    }
}
/**
 * @param $range    array
 * @param $mediana  integer
 * @return string
 */
function primeNumbers($range, $mediana){
    $firstPrimeNumber = 0;
    $lastPrimeNumber = 0;
    // Key of mediana in array
    $point = array_search($mediana, $range);
    // Key of last value in array
    $lastElement = array_search(end($range), $range);
    for ($i = $point; $i != 0; $i--) {
        if (isPrime($range[$i])) {
            $firstPrimeNumber = $range[$i];
            break;
        }
    }
    for ($i = $point; $i <= $lastElement; $i++){
        if (isPrime($range[$i])) {
            $lastPrimeNumber = $range[$i];
            break;
        }
    }
    return 'Prime numbers: ' . $firstPrimeNumber . " " . $lastPrimeNumber;
}
/**
 * Generate series from N to M (M > N)
 */
$numberSeries = range(100, 200);
echo mediana($numberSeries) . " - Mediana";
echo "<br>";
echo primeNumbers($numberSeries, mediana($numberSeries));
echo "<br>";	
?>
