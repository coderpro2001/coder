// #2 - Validate a Palindrome

/*
 * Write a function that will accept a string as parameter and return true if string is a palindrome (ex : 'ici'), false otherwise
 *
 * ex :
 *
 * isPalindrome('hello')
 *
 * should return false
 *
 */

/*
 *
 * classic way using javascript built in methods
 *
 */
function isPalindrome1(str) {
  // turn str to array
  // reverse array
  // turn array back to string
  // turn string to lower case
  const reversedString = str.trim().split("").reverse().join("").toLowerCase();

  // check if string is same that reversed string
  /*
	if (str.toLowerCase() === reversedString)
	{
		return true
	}

	// alternative syntax for condition
	// if(str.toLowerCase() === reversedString) return true

	return false
	*/
  return str.toLowerCase() === reversedString;
}

// ES6 way
const isPalindrome2 = (str) => {
  const reversedString = str.trim().split("").reverse().join("").toLowerCase();

  return str.toLowerCase() === reversedString;
};

// pass the function to test
console.log(isPalindrome2("Ici"));
