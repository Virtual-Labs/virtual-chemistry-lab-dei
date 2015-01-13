<?php


include "config.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
</head>
<body>
    <form id="form1" method="post" name="form1" action="feedback.php">
    <table cellpadding="10">
        <tbody>
        <tr>
        	<td colspan="2">
            	<?php 
		if($_GET['action'] == 'do')
		{?>
		 <font color="red"><b>&nbsp;&nbsp;Your Feedback sucessfully submited!<b></font>
		<?php }
		?>
            </td>
        </tr>
        
            <tr>
                <td style="width: 300px">
                    Name of the Student/Deptt.
                </td>
                <td>
                    <input style="width: 273px; height: 20px" id="TextBox1" type="text" name="TextBox1">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr>
                <td style="width: 300px">
                    Email ID
                </td>
                <td>
                    <input onblur="return ValidateForm()" style="width: 277px; height: 22px" id="TextBox3"
                        type="text" name="TextBox3">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr>
                <td style="width: 300px">
                    Type of Virtual Lab
                </td>
                <td>
                    <input style="width: 329px; height: 20px; margin-left: 0px" id="TextBox2" disabled
                        value="Analytical &amp; Virtual Instrumentation Applications Lab" type="text"
                        name="TextBox2">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr>
                <td style="width: 300px">
                    Which Experiment did you perform?
                </td>
                <td>
                    <select style="width: 211px; height: 19px" id="DropDownList1" name="DropDownList1">
                        <option selected value="Determination of Caffeine">Determination of Caffeine</option>
                        <option value="Synthesis of Polyaniline">Synthesis of Polyaniline</option>
                        <option value="Yamuna water Analysis">Yamuna water Analysis</option>
                        <option value="Colorimeter (Sugar)">Colorimeter (Sugar)</option>
                        <option value="Colorimeter(Simulation)">Colorimeter(Simulation)</option>
                        <option value="Cyclic Voltammetry(Simulation)">Cyclic Voltammetry(Simulation)</option>
                        <option value="Polarography (Simulation)">Polarography (Simulation)</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table cellpadding="10">
        <tbody>
            <tr>
                <th align="left">
                    1) Please tell your rating with the following statements
                </th>
                <th class="space">
                    Excellent
                </th>
                <th class="space">
                    Very Good
                </th>
                <th class="space">
                    Good
                </th>
                <th class="space">
                    Average
                </th>
                <th class="space">
                    Poor
                </th>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    a) How do you rate the online performance of the experiment
                </td>
                <td class="space">
                    <input id="RadioButton1" value="1" checked type="radio" name="first">
                </td>
                <td class="space">
                    <input id="RadioButton2" value="2" type="radio" name="first">
                </td>
                <td class="space">
                    <input id="RadioButton3" value="3"  type="radio" name="first">
                </td>
                <td class="space">
                    <input id="RadioButton4" value="4"  type="radio" name="first">
                </td>
                <td class="space">
                    <input id="RadioButton5" value="5" type="radio" name="first">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    b) To what extent did you have control over interactions?
                </td>
                <td>
                    <input id="RadioButton6" value="1" checked type="radio" name="second">
                </td>
                <td>
                    <input id="RadioButton7" value="2" type="radio" name="second">
                </td>
                <td>
                    <input id="RadioButton8" value="3" type="radio" name="second">
                </td>
                <td>
                    <input id="RadioButton9" value="4"  type="radio" name="second">
                </td>
                <td>
                    <input id="RadioButton10" value="5" type="radio" name="second">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    c) To what degree was the actual lab environment simulated?
                </td>
                <td>
                    <input id="RadioButton11" value="1" checked type="radio" name="third">
                </td>
                <td>
                    <input id="RadioButton12" value="2" type="radio" name="third">
                </td>
                <td>
                    <input id="RadioButton13" value="3" type="radio" name="third">
                </td>
                <td>
                    <input id="RadioButton14" value="4" type="radio" name="third">
                </td>
                <td>
                    <input id="RadioButton15" value="5" type="radio" name="third">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    d) The manuals were found to be helpful
                </td>
                <td>
                    <input id="RadioButton16" value="1" checked type="radio" name="fourth">
                </td>
                <td>
                    <input id="RadioButton17" value="2" type="radio" name="fourth">
                </td>
                <td>
                    <input id="RadioButton18" value="3" type="radio" name="fourth">
                </td>
                <td>
                    <input id="RadioButton19" value="4" type="radio" name="fourth">
                </td>
                <td>
                    <input id="RadioButton20" value="5" type="radio" name="fourth">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    e) The results of experiment were easily interpretable
                </td>
                <td>
                    <input id="RadioButton21" value="1" checked type="radio" name="five">
                </td>
                <td>
                    <input id="RadioButton22" value="2" type="radio" name="five">
                </td>
                <td>
                    <input id="RadioButton23" value="3" type="radio" name="five">
                </td>
                <td>
                    <input id="RadioButton24" value="4" type="radio" name="five">
                </td>
                <td>
                    <input id="RadioButton25" value="5" type="radio" name="five">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    f) The measurement and analysis of data was found to be easy
                </td>
                <td>
                    <input id="RadioButton26" value="1" checked type="radio" name="six">
                </td>
                <td>
                    <input id="RadioButton27" value="2" type="radio" name="six">
                </td>
                <td>
                    <input id="RadioButton28" value="3" type="radio" name="six">
                </td>
                <td>
                    <input id="RadioButton29" value="4" type="radio" name="six">
                </td>
                <td>
                    <input id="RadioButton30" value="5" type="radio" name="six">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    g) The links provided were consistent with the objectives of the experiment?
                </td>
                <td>
                    <input id="RadioButton31" value="1" checked type="radio" name="seven">
                </td>
                <td>
                    <input id="RadioButton32" value="2" type="radio" name="seven">
                </td>
                <td>
                    <input id="RadioButton33" value="3" type="radio" name="seven">
                </td>
                <td>
                    <input id="RadioButton34" value="4" type="radio" name="seven">
                </td>
                <td>
                    <input id="RadioButton35" value="5" type="radio" name="seven">
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr align="middle">
                <td style="padding-left: 40px" align="left">
                    h) A clear understanding of the experiment and related topics was gained?
                </td>
                <td>
                    <input id="RadioButton36" value="1" checked type="radio" name="eight">
                </td>
                <td>
                    <input id="RadioButton37" value="2" type="radio" name="eight">
                </td>
                <td>
                    <input id="RadioButton38" value="3" type="radio" name="eight">
                </td>
                <td>
                    <input id="RadioButton39" value="4" type="radio" name="eight">
                </td>
                <td>
                    <input id="RadioButton40" value="5" type="radio" name="eight">
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <p>
        2)&nbsp; How helpful you feel the system is?</p>
    <br>
    <textarea id="TextBox5" rows="5" cols="60" name="TextBox5"></textarea><br>
    <br>
    <p>
        <br>
        3)&nbsp; Did you experience any problem?</p>
    <br>
    <textarea id="TextBox6" rows="5" cols="60" name="TextBox6"></textarea><br>
    <br>
    <table cellpadding="15">
        <tbody>
            <tr>
                <td style="padding-left: 0px">
                    4) Did you feel confident enough while performing the experiment?
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton41" value="1" checked type="radio" name="nine"><label
                        for="RadioButton41">Yes</label>
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton42" value="2" type="radio" name="nine"><label for="RadioButton42">No</label>
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton43" value="3" type="radio" name="nine"><label for="RadioButton43">Can't
                        Say</label>
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr>
                <td style="padding-left: 0px">
                    5) Was the experiment/process motivating enough?
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton44" value="1" checked type="radio" name="ten"><label
                        for="RadioButton44">Yes</label>
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton45" value="2" type="radio" name="ten"><label for="RadioButton45">No</label>
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton46" value="3" type="radio" name="ten"><label for="RadioButton46">Can't
                        Say</label>
                </td>
            </tr>
            <tr>
                <td>&nbsp;
                    
                </td>
            </tr>
            <tr>
                <td style="padding-left: 0px">
                    6) Did you go through the manual/step by step method before performing the live
                    experiments ?
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton47" value="1" checked type="radio" name="eleven"><label
                        for="RadioButton47">Yes</label>
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton48" value="2" type="radio" name="eleven"><label
                        for="RadioButton48">No</label>
                </td>
                <td style="padding-left: 40px">
                    <input id="RadioButton49" value="3" type="radio" name="eleven"><label
                        for="RadioButton49">Can't Say</label>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <span style="font-size: 15pt; font-weight: bold" id="Label1">Comments &amp; Suggestions</span><br>
    <p>
        <textarea id="TextBox4" rows="10" cols="50" name="TextBox4"></textarea>
        <br>
    </p>
    <br>
    <p style="text-align: center">
        <input style="width: 115px; height: 29px" id="Button1" value="Submit" type="submit" name="Button1">
    </p>
    </form>
  
	
	
</body>
</html>
