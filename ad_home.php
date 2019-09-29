<?php
include("connection.php");
require("functions.php");
if(isset($_POST["addQues"])){
  if(!empty($_POST)){
    insert($_POST);
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
</head>
<body>
  <h2>Admin home</h2>
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'add_qs')" id="defaultOpen">Add Question Paper</button>
    <button class="tablinks" onclick="openCity(event, 'view_qs')">View Question Papers</button>
    <button class="tablinks" onclick="openCity(event, 'candidate')">Candidate Details</button>
  </div>

  <div id="add_qs" class="tabcontent">
    <h3>Add Question Paper</h3>
    <form class="" action="" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Choose section</td>
          <td><select class="" name="section">
            <option value=1>Development</option>
            <option value=2>Testing</option>
            <option value=3>Human Resources</option>
          </select></td>
          <td><a href="#">Add section</a></td>
        </tr>
        <tr>
          <td>Enter question</td>
          <td> <textarea name="ques_desc" rows="5" cols="60"></textarea> </td>
        </tr>
        <tr>
          <td><button class="btn btn-danger" type="button" name="optBtn" onClick="appendRow()">Add options</button></td>
        </tr>
        <tr><td></td>
          <td id="div"></td>
        </tr>
        <tr>
          <td> <button  class="btn btn-lg btn-success" type="submit" name="addQues">Add</button> </td>
        </tr>
      </table>
    </form>
  </div>

  <div id="view_qs" class="tabcontent">
    <h3>View Question Papers</h3>
    <table>
      <tr>
        <td>Choose section</td>
        <td> <select class="" name="">
          <option value="">Development</option>
          <option value="">Testing</option>
          <option value="">Human Resources</option>
        </select> </td>
      </tr>
    </table>
    <nav aria-label="Page navigation example">

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Qs no.</th>
            <th>Question</th>
            <th>Marks</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
          </tr>
        </tbody>
      </table>
    </nav>
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </div>

  <div id="candidate" class="tabcontent">
    <h3>Candidate Details</h3>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hire the best</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


</body>
<script type="text/javascript">
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
var x=1
function appendRow()
{
   var d = document.getElementById('div');
   d.innerHTML += x+"<input type='text' name='ques_options[]' id='tst"+ x++ +"'><input type='checkbox'><br>";
}
</script>
</html>
