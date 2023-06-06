document.getElementById("feedbackForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form data
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var rating = document.getElementById("rating").value;
    var recommend = document.getElementById("recommend").value;
    var knowledge = document.getElementById("knowledge").value;
    var content = document.getElementById("content").value;
    var layout = document.getElementById("layout").value;
    var improvements = document.getElementById("improvements").value;
    var comments = document.getElementById("comments").value;
  
    // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "submit.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Request successful, do something if needed
        console.log(xhr.responseText);
      }
    };
  
    // Prepare the form data to be sent
    var formData =
      "name=" +
      encodeURIComponent(name) +
      "&email=" +
      encodeURIComponent(email) +
      "&rating=" +
      encodeURIComponent(rating) +
      "&recommend=" +
      encodeURIComponent(recommend) +
      "&knowledge=" +
      encodeURIComponent(knowledge) +
      "&content=" +
      encodeURIComponent(content) +
      "&layout=" +
      encodeURIComponent(layout) +
      "&improvements=" +
      encodeURIComponent(improvements) +
      "&comments=" +
      encodeURIComponent(comments);
  
    // Send the request
    xhr.send(formData);
  });