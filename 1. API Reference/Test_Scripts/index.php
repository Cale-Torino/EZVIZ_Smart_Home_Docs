<!DOCTYPE html>
<html>
<head>
<title>EZVIZ API TEST</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<h1>EZVIZ API TEST</h1>
<p>This is the testing API for the EZVIZ interface</p>
<br>
<p>C:\Software\xampp\htdocs\EZVIZ\API_TEST</p>
<br>
<p>EndPoint: /api/lapp/token/get</p>

<div id="data"><div>

<script>
//https://open.ys7.com/doc/en/HTTP/user-en.html
//https://www.freecodecamp.org/news/javascript-fetch-api-tutorial-with-js-fetch-post-and-header-examples/

var username = "jk06c8";
var appKey = "9mqitppidgce4y8n54ranvyqc9fjtsrl";
var appSecret = "096e76501644989b63ba0016ec5776";

// function to handle success
function success() {
    var data = JSON.parse(this.responseText); //parse the string to JSON
    console.log(data);
    $("#data").html(JSON.stringify(data));//show data on page
}

// function to handle error
function error(err) {
    console.log('Request Failed', err); //error details will be in the "err" object
    $("#data").html(JSON.stringify(err));//show data on page
}

var xhr = new XMLHttpRequest(); //invoke a new instance of the XMLHttpRequest
xhr.onload = success; // call success function if request is successful
xhr.onerror = error;  // call error function if request failed
xhr.open('POST', 'https://open.ezvizlife.com/api/lapp/token/get?username='+username+'&appKey='+appKey+'&appSecret='+appSecret+''); // open a GET request
xhr.send(); // send the request to the server.
</script>
</body>
</html>
