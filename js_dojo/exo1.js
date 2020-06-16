// #1 - Reverse a string

/*
 * Write a function that will accept a string as parameter and return a reversed string
 *
 * ex :
 *
 * reverseString('hello')
 *
 * should return 'olleh'
 *
 */

/*
 *
 * classic way using javascript built in methods
 *
 */
function reverseString1(str) {
  // turn string into array using the split() method
  var strArray = str.trim().split("");

  // reverse array using the reverse() method
  const reverse = strArray.reverse();
  // turn array back to string using the join() method
  var newString = strArray.join("");
  // return new string
  return newString;

  // Notice : this could be written on one line since we can chain methods in javascript
  // const strArray = str.split("").reverse().join("")
}

/*
 *
 * ES6 way
 *
 */
const reverseString2 = (str) => str.trim().split("").reverse().join("");

/*
 *
 * classic way using only for() loop
 *
 */
function reverseString3(str) {
  var newString = "";
  for (i = str.trim().length; i >= 0; i--) {
    newString += str[i];
  }
  return newString;
}

// pass the function to test
console.log(reverseString3(" hello "));
