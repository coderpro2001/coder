# Coding Dojo - Javascript

## Challenges

# 1 - Reverse a string

Write a function that will accept a **string** as parameter and return a reversed string

> ex :
>
> > reverseString('hello')
>
> should return 'olleh'

# 2 - Validate a palindrome

Write a function that will accept a **string** as parameter and return true if string is a palindrome (ex : 'ici'), false otherwise

> ex :
>
> > isPalindrome('hello')
>
> should return false

# 3 - Reverse an integer

Write a function that will accept an **integer** as parameter and return a reversed integer (taking into account negative integers)

> ex :
>
> > reverseInt(-12345)
>
> should return -54321

# 4 - Capitalize letters

Write a function that will accept a **string** as parameter and return a string with only the first letter of each word capitalized

> ex :
>
> > capitalizeString('I love JavaScript')
>
> should return 'I Love Javascript'

# 5 - Max character

Write a function that will accept a **string** as parameter and return the character with the most occurences

> ex :
>
> > maxCharacter('Javascript')
>
> should return 'a'

# 6 - FizzBuzz

Write a function that will print all the integers between **1** and **100**. For multiples of **3** it should print **'Fizz'** instead of the actual integer, for multiples of **5** it should print **'Buzz'**, for multiples of **3** and **5** it should print **'Fizzbuzz'**

> ex :
>
> > fizzBuzz()
>
> should return
>
> 1
> 2
> 'Fizz'
> 4
> 'Buzz'
> 'Fizz'
> 7
> 8
> 'Fizz'
> 'Fizzbuzz'
> ...

# 7 - Longest word

Write a function that will accept a **string** as parameter and return the longest word in that string.
If more than one word are the same lenth and are longest, the function should return an array containing these words.
Returned word(s) should be lower case

> ex :
>
> > longestWord('I love coding')
>
> should return 'coding'
>
> > longestWord('Hello there, I love cakes')
>
> should return ['hello', 'there', 'cakes']

# 8 - Array chunking

Write a function that will accept an **array** (containing integers or strings) and an **integer** as parameters and split this array into arrays of the given integer length

> ex :
>
> > chunkArray([1, 2, 3, 4, 5, 6, 7], 2)
>
> should return [[1, 2], [3, 4], [5, 6], [7]]

# 9 - Flatten array

Write a function that will accept an **array** of arrays as parameter and return a single array

> ex :
>
> > flattenArray([[1, 2], [3, 4], [5, 6], [7]])
>
> should return [1, 2, 3, 4, 5, 6, 7]

# 10 - Anagram

Write a function that will accept 2 **strings** as parameters and return true if strings are anagrams, false otherwise.
Function should **ignore spaces** and **special characters**

> ex :
>
> > isAnagram('elbow', 'below')
>
> should return true
>
> > isAnagram('dormitory', 'Dirty rooms##')
>
> should return true
>
> > isAnagram('hello', 'There')
>
> should return false

# 11 - Letter changes

Write a function that will accept a **string** as paramater and return a lower case string in which each character of the original string will be replaced by the next character in the alphabet (ex: a will become b), and each vowel will be capitalized.
If there is a **z** in the original string, it should become **a**

> ex :
>
> > letterChanges('Hello there')
>
> should return 'Ifmmp Uifsf'
>
> > letterChanges('I love buzz')
>
> should return 'J mPwF cVAA'
