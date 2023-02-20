<?php
/**
 * 1. Write a PHP function to sort an array of strings by their length, in ascending order.
 * 
 */
function astring_sort($param1,$param2)
{
	$length1=strlen($param1);
    $length2=strlen($param2);
	if ($length1==$length2) return 0;
  	return ($length1<$length2)?-1:1;
}
//এখানে উদাহরণ সরূপ একটি অ্যারে নেওয়া হল। এটি চ্যাট জিপিটি থেকে সংগৃহীত
$fruits = array(
    "apple",
    "apricot",
    "avocado",
    "banana",
    "blackberry",
    "blueberry",
    "boysenberry",
    "cantaloupe",
    "cherry",
    "clementine",
    "coconut",
    "cranberry",
    "date",
    "dragonfruit",
    "durian",
    "elderberry",
    "fig",
    "grape",
    "grapefruit",
    "guava",
    "honeydew",
    "jackfruit",
    "kiwi",
    "kumquat",
    "lemon",
    "lime",
    "lychee",
    "mango",
    "mandarin",
    "marionberry",
    "nectarine",
    "orange",
    "papaya",
    "passionfruit",
    "peach",
    "pear",
    "persimmon",
    "pineapple",
    "plum",
    "pomegranate",
    "raspberry",
    "redcurrant",
    "strawberry",
    "tangerine",
    "watermelon"
  );

  usort($fruits,"astring_sort");
// সেম্পল আউটপুট। বুঝার সুবিধার জন্য স্ট্রিং এর পাশে লেন্থ দেওয়া হল
  foreach($fruits as $fruit)
  {
  	echo $fruit."(".strlen($fruit).")"; 
  	echo "<br>";
  }

  //////////////প্রথম প্রশ্নের উত্তর এখানেই শেষ
/**
 * 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
 */
  function concat_reverse($str1, $str2) 
  {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $result = '';
    for ($i = $len1 - 1; $i >= 0; $i--) 
    {
      $result = $str1[$i] . $result;
      if ($i == $len1 - $len2) {
        $result = $str2 . $result;
        break;
      }
    }
  
    return $result;
  }
  echo concat_reverse('Write a PHP I love ','Write a PHP');


  /**
   * 3 Write a PHP function to remove the first and last element from an array and return the 
   * remaining elements as a new array.
   */

function trim_array($array)
{
	array_shift($array);  //১ম অবজেক্ট চলে গেল
    array_pop($array);     //শেষ অবজেক্ট চলে গেল
    return $array;
}

$trimed_array=trim_array($fruits);
//print_r($trimed_array);

/**
 * 4 Write a PHP function to check if a string contains only letters and whitespace.
 */
function check_pattern(string $string,$pattern="/^[a-zA-Z\s]+$/") //রিটার্ন করবে শুধু ট্রু অথবা ফল্‌স
{
	if (preg_match($pattern, $string))  //রেগুলার এক্সপ্রেশন দিয়ে চেক করা হল
        return true;
    return false;
}
echo check_pattern("Hello world");

/**
 * 5.Write a PHP function to find the second largest number in an array of numbers.
 */

function second_max_number($array)
{
	if(count($array)==1) return false;  // যদি অবজেক্ট কেবল ১টি থাকে তাহলে ফাংশন অকার্যকর
	rsort($array);  //নাম্বারকে বড় থেকে ছোট আকারা সাজানো হল।
    return $array[1]; //এইবার ২য় অবজেক্ট রিটার্ন করে দিলাম।
}
$numbers = array(45,58,46,58,54,98,25,1,89);
echo second_max_number($numbers);