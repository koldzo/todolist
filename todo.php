<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>To Do List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body>

  <div class=container>
    <div class="jumbotron">
      <h1>To Do List</h1>
        <div class="input-group input-group-lg" id="myDIV">
          <span class="input-group-addon" id="sizing-addon1">Do</span>
          <input type="text" class="form-control add-todo" placeholder="Type your task" aria-describedby="sizing-addon1" id="myInput">
        </div>
      <br>
      <button type="button" class="btn btn-primary btn-lg" onclick="newElement()">ADD TASK</button>
    </div>
    <ul class="list-group" id="myUL">

    </ul>
</div>


<script>
// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

/*/ Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false); */

// Create a new list item when clicking on the "Add" button
function newElement() {
  var inputValue = document.getElementById("myInput").value;
  var markup = '<li class="list-group-item list-group-item-warning">'+ inputValue +'</div><span class="close"><img src="img/red-x.png" height="16" width="16" align="middle"></span></li>';
  $('#myUL').append(markup);
  if (inputValue === '') {
    alert("You must write something!");
  }

   for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

</body>
</html>
