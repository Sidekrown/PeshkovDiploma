<!DOCTYPE HTML>
<html>
<head>
<meta  http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- http-equiv="Content-Type" content="text/html; -->
<link href="main.css" rel="stylesheet">
</head>

<body>





<table class="table">

  <tr>
<td rowspan="7">
<form enctype="multipart/form-data" method="post">
<img src="Penguins.jpg" width="300px" height="400px">
</form>
</td>
<td >
<form method="post">
  <label for="123">LastName</br></label>
<input id="123" type="text" name="LastName">
</form>
<?php
echo LastName = $_GET['LastName'];
?>
</td>
  </tr>

    <tr>
    <td colspan="2">
      <form method="post">
    <label>Name</br><input type="text" name="Name"></label>
    </form>
  </td>


    </tr>

    <tr>
  <td colspan="2">
    <form method="post">
  <label>FirstName</br><input type="text" name="FirstName"></label>
  </form>
</td>


    </tr>

    <tr>
    <td colspan="2">
      <form method="post">
      <label>Advanced Info</br><textarea name="Info" rows="6" cols="30"></textarea></label>
      </form>
    </td>


    </tr>

    <tr>
    <td colspan="2">
       <form method="post">
      <label>Department</br><input type="text" name="Department"></label>
      </form>
    </td>


    </tr>

    <tr>
    <td colspan="2">
      <form method="post">
     <label>Position</br><input type="text" name="Position"></label>
     </form>
      </td>


    </tr>
<tr>
<td>
  <form method="post">
 <label>Id detector</br><input type="text" name="Id detector"></label>
 </form></td>
</tr>
<tr>
<td>
  <form enctype="multipart/form-data" method="post">

<input type="file" name="photo" accept="image/jpeg,image/x-png">

</form>
</td>
<td colspan="2">
  <form method="post">
 <label>Connection</br><input type="checkbox" name="Connection"></label>
 </form>
</td>


</tr>

<tr>
<td>
  <form method="post">
 <label>Current Doze</br><input type="text" name="Current Doze"></label>
 </form>
</td>
<td>
  <form method="post">
 <label>Doze last day</br><input type="text" name="Doze last day"></label>
 </form>
</td>
<td>
  <form method="post">
 <label>Max Doze last day</br><input type="text" name="Max Doze last day"></label>
 </form>
</td>

</tr>

<tr>
<td colspan="3"> <a href="graf.html">More info</a></td>
</tr>
</table>
</body>


</html>
