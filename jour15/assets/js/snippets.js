// post data using formData
form.addEventListener("submit", function(e) {
  e.preventDefault();
  const formData = new FormData(form);
  // for (var entry of formData.entries()) {
  //   console.log(entry);
  // }
  try {
    fetch("lib/process.php", {
      method: "post",
      body: formData
    })
      .then(res => res.json())
      .then(data => console.log(data));
  } catch (error) {
    console.log(error);
  }
});

// get data from API and pass them to PHP as JSON object
fetch("https://jsonplaceholder.typicode.com/users")
  .then(res => res.json())
  .then(data => {
    fetch("lib/process.php", {
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json"
      },
      method: "POST",
      body: JSON.stringify(data)
    })
      .then(res => res.json())
      .then(data => console.log(data));
  });
