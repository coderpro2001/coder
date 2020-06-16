// #4 - Capitalize letters

/*
 * Write a function that will accept a string as parameter and return a string with only the first letter of each word capitalized
 *
 * ex :
 *
 * capitalizeString('i am a dev')
 *
 * should return 'I Am A Dev'
 *
 */

/*
 *
 * classic way using javascript built in methods
 *
 */
function capitalizeString1(str) {
  // remove empty spaces before and after string using trim() method
  // turn string to array of words using space delimitor
  var wordsArray = str.trim().split(" ");
  // create empty string
  var capitalizedString = "";

  // replace first letter of each word by capitalized letter using replace() method
  wordsArray.forEach(function (word) {
    capitalizedWord = word.replace(word[0], word[0].toUpperCase());
    capitalizedString += capitalizedWord + " ";
  });

  return capitalizedString;
}

/*
 *
 * ES6 way
 *
 */
const capitalizeString2 = (str) => {
  // chain methods trim(), split(), map(), join() to create a new string
  // the map() method is a higher order function that returns a new array
  return str
    .trim()
    .split(" ")
    .map((word) => word.replace(word[0], word[0].toUpperCase()))
    .join(" ");
};

// pass the function to test
console.log(capitalizeString1(" i am a dev"));
