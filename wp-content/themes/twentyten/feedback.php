<?php

if(isset($_POST[Button1]))
{
	
	// question Student Name
	$name =$_POST[TextBox1];
	
	// question Experiment Name
	
	$expiname= $_POST[DropDownList1];

		
	// question 1a
	
	$selected_radio1a = $_POST[first];

	if ($selected_radio1a == RadioButton1) {
	$ques1a = $_POST[first]; 
	}
	else if ($selected_radio1a == RadioButton2) {
	$ques1a = $_POST[first];
	}
	else if ($selected_radio1a == RadioButton3) {
	$ques1a = $_POST[first];
	}
	else if ($selected_radio1a == RadioButton4) {
	$ques1a = $_POST[first];
	}
	else
	{
	$ques1a = $_POST[first];
	}	
	
	
		
	// question 1b
	$selected_radio1b = $_POST[second];

	if ($selected_radio1b == RadioButton6) {
	$ques1b = $_POST[second];
	}
	else if ($selected_radio1b == RadioButton7) {
	$ques1b = $_POST[second];
	}
	else if ($selected_radio1b == RadioButton8) {
	$ques1b = $_POST[second];
	}
	else if ($selected_radio1b == RadioButton9) {
	$ques1b = $_POST[second];
	}
	else
	{
	$ques1b = $_POST[second];
	}	
	
	
		
	// question 1c
	$selected_radio1c = $_POST[third];

	if ($selected_radio1c == RadioButton11) {
	$ques1c = $_POST[third];
	}
	else if ($selected_radio1c == RadioButton12) {
	$ques1c = $_POST[third];
	}
	else if ($selected_radio1c == RadioButton13) {
	$ques1c = $_POST[third];
	}
	else if ($selected_radio1c == RadioButton14) {
	$ques1c = $_POST[third];
	}
	else
	{
	$ques1c = $_POST[third];
	}	
	
		
	// question 1d
	$selected_radio1d = $_POST[fourth];

	if ($selected_radio1d == RadioButton16) {
	$ques1d = $_POST[fourth];
	}
	else if ($selected_radio1d == RadioButton17) {
	$ques1d = $_POST[fourth];
	}
	else if ($selected_radio1d == RadioButton18) {
	$ques1d = $_POST[fourth];
	}
	else if ($selected_radio1d == RadioButton19) {
	$ques1d = $_POST[fourth];
	}
	else
	{
	$ques1d = $_POST[fourth];
	}	
		
	// question 1e
	$selected_radio1e = $_POST[five];

	if ($selected_radio1e == RadioButton21) {
	$ques1e = $_POST[five];
	}
	else if ($selected_radio1e == RadioButton22) {
	$ques1e = $_POST[five];
	}
	else if ($selected_radio1e == RadioButton23) {
	$ques1e = $_POST[five];
	}
	else if ($selected_radio1e == RadioButton24) {
	$ques1e = $_POST[five];
	}
	else
	{
	$ques1e = $_POST[five];
	}	
		
	// question 1f
	$selected_radio1f = $_POST[six];

	if ($selected_radio1f == RadioButton26) {
	$ques1f = $_POST[six];
	}
	else if ($selected_radio1f == RadioButton27) {
	$ques1f = $_POST[six];
	}
	else if ($selected_radio1f == RadioButton28) {
	$ques1f = $_POST[six];
	}
	else if ($selected_radio1f == RadioButton29) {
	$ques1f = $_POST[six];
	}
	else
	{
	$ques1f = $_POST[six];
	}	
		
	// question 1g
	$selected_radio1g = $_POST[seven];

	if ($selected_radio1g == RadioButton31) {
	$ques1g = $_POST[seven];
	}
	else if ($selected_radio1g == RadioButton32) {
	$ques1g = $_POST[seven];
	}
	else if ($selected_radio1g == RadioButton33) {
	$ques1g = $_POST[seven];
	}
	else if ($selected_radio1g == RadioButton34) {
	$ques1g = $_POST[seven];
	}
	else
	{
	$ques1g = $_POST[seven];
	}	
	
	// question 1h
	$selected_radio1h = $_POST[eight];

	if ($selected_radio1h == RadioButton36) {
	$ques1h = $_POST[eight];
	}
	else if ($selected_radio1h == RadioButton37) {
	$ques1h = $_POST[eight];
	}
	else if ($selected_radio1h == RadioButton38) {
	$ques1h = $_POST[eight];
	}
	else if ($selected_radio1h == RadioButton39) {
	$ques1h = $_POST[eight];
	}
	else
	{
	$ques1h = $_POST[eight];
	}	
	
	
	// question 2
	
	$ques2 = $_POST[TextBox5];
	
	// question 3
	$ques3 = $_POST[TextBox6];
	
	// question 4
	$selected_radio9 = $_POST[nine];

	if ($selected_radio9 == RadioButton41) {
	$ques4 = $_POST[nine];
	}
	else if ($selected_radio9 == RadioButton42) {
	$ques4 = $_POST[nine];
	}
	else
	{
	$ques4 = $_POST[nine];
	}


	// question 5
	$selected_radio10 = $_POST[ten];

	if ($selected_radio10 == RadioButton44) {
	$ques5 = $_POST[ten];
	}
	else if ($selected_radio10 == RadioButton45) {
	$ques5 = $_POST[ten];
	}
	else
	{
	$ques5 = $_POST[ten];
	}	
	
	// question 6
	$selected_radio11 = $_POST[eleven];

	if ($selected_radio11 == RadioButton47) {
	$ques6 = $_POST[eleven];
	}
	else if ($selected_radio11 == RadioButton48) {
	$ques6 = $_POST[eleven];
	}
	else
	{
	$ques6 = $_POST[eleven];
	}	
	
	
	 
	$comment = $_POST[TextBox4];
	$emailid = $_POST[TextBox3];
	
	
mysql_query("insert into feedback values ('$name','$expiname','$ques1a','$ques1b','$ques1c','$ques1d','$ques1e','$ques1f','$ques1g','$ques1h','$ques2','$ques3','$ques4','$ques5','$ques6','$comment','$emailid')");
		
		header("Location: feed.php?action=do");
	}
	?>