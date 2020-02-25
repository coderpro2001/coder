///////////////////////////////////////////
// AJAX (Asynchronous Javascript And Xml //
///////////////////////////////////////////

// AJAX syntax
// more about AJAX : https://developer.mozilla.org/fr/docs/Apprendre/JavaScript/Client-side_web_APIs/Fetching_data

// XMLHttpRequest : https://developer.mozilla.org/fr/docs/Web/Guide/AJAX/Premiers_pas

// XMLHttpRequest by Pierre Giraud [fr] : https://www.pierre-giraud.com/javascript-apprendre-coder-cours/ajax-xmlhttprequest/

// fetch API : https://developer.mozilla.org/fr/docs/Web/API/Fetch_API/Using_Fetch

// support de fetch : https://caniuse.com/#search=fetch

// get text content from a PHP file
fetch("lib/process.php")
  .then(function(response) {
    return response.text();
  })
  .then(function(data) {
    console.log(data);
  });

// get object from PHP file
fetch("lib/process.php")
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    console.log(data);
  });

// get JSON from distant URL
function getRandomCocktail() {
  fetch("https://www.thecocktaildb.com/api/json/v1/1/random.php")
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      console.log(data);
    });
}

//////////////
// examples //
//////////////

// DOM element
const btn = document.querySelector("#ajax");

// add listener to button and call function to execute when button clicked
btn.addEventListener("click", makeRequest);

// AJAX call using XMLHttpRequest
function makeRequest() {
  // Steps
  // Instanciate object XMLHttpRequest
  const xml = new XMLHttpRequest();

  // open request
  xml.open("get", "https://api.le-systeme-solaire.net/rest/bodies/");

  // Check for onload event (status)
  xml.onload = function() {
    if (xml.status == 200) {
      console.log(JSON.parse(xml.responseText));
    }
  };
  // Send request
  xml.send();
}

// Fetch API
// AJAX call using XMLHttpRequest
function makeFetchRequest() {
  fetch("lib/process.php")
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      console.log(data);
    })
    .catch(function(error) {
      console.log(error);
    });
}

// AJAX example with API call
function getRandomCocktail() {
  fetch("https://www.thecocktaildb.com/api/json/v1/1/random.php")
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      console.log(data);
    });
}
