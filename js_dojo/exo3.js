// #3 - Reverse an integer

/*
 * Write a function that will accept an integer as parameter and return a reversed integer (taking into account negative integers)
 *
 * ex :
 *
 * reverseInt(-12345)
 *
 * should return -54321
 *
 */

/*
 *
 * classic way using javascript built in methods
 *
 */
function reverseInteger1(number) {
  // turn integer to string
  // turn string to array
  // reverse array
  // turn array back to string
  const reversedInteger = number.toString().split("").reverse().join("");

  // turn string to number and add sign
  return parseInt(reversedInteger) * Math.sign(number);
}

/*
 *
 * ES6 way
 *
 */
const reverseInteger2 = (number) =>
  parseInt(number.toString().split("").reverse().join("")) * Math.sign(number);

// pass the function to test
console.log(reverseInteger2(-123456));
