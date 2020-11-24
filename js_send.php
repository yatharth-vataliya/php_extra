<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css" media="screen">
    .button{
      border-radius: 4px;
      background-color: blue;
      padding: 1em;
      color: white;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div id="nothing">
    <h1>Nothing</h1>
  </div>
  <button type="button" onclick="deletediv();" class="button">Delete Div</button>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $.ajax({
      url: 'js_response.php',
      type: 'POST',
      data: {name: 'just name'},
      success: function(response){
        console.log(response);
        // document.querySelector("#nothing").innerHTML = JSON.parse(response).name;
        document.querySelector("#nothing").innerHTML = response.name; // we can use this when the response page mentioned header("Content-Type: application/json; charset=UTF-8"); line in php code. Otherwise we have to use above to syntax and convert normal string line to json object;
      },
    })
    .done(function() {
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    function deletediv(){
      alert("deletediv called");
    let div =  document.querySelector("#nothing");
    div.remove();
    }
  </script>
</body>
</html>