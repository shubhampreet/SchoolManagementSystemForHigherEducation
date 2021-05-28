<head>
<style>
@media print{
	#printbtn{
		display : none;
	}
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style></head>
<div class="card">
  <img src="<?php echo $student_passport; ?>" alt="<?php echo $surname ." " .$lastname; ?>" style="width:100%">
  <h1><?php echo $surname ." " .$lastname; ?></h1>
  <p><h3>Registration No</h3><h5><?php echo $student_reg_number; ?></h5></p>
  <p class="title"><h3>Term</h3><h5><?php echo $current_term; ?></h5></p>
  <p><h3>Emergency Contact</h3><h5><?php echo $nearest_contact1." , " .$nearest_contact2." , " .$nearest_contact3; ?></h5></p>
  <p><input id ="printbtn" type="button" value="Print ICard" onclick="window.print();" ></p>
  <!--<p><button onClick="window.print()">Print</button></p>-->
</div>