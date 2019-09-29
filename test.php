<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="jquery.js"></script>
    <script type="text/javascript">
    function add(){
      var newtextbox = '<tr><td><input type="text"></tr></td>';
      document.getElementById('new').append(document.getElementById('new').innerHTML = newtextbox);
    }
    </script>
  </head>
  <body>
    <button type="button" name="btn" onClick="add()">test</button>
    <div id="new"></div>
  </body>
</html>
