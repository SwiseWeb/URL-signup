<?php
$servername = "localhost";
$username = "pcchorg_urladmin";
$password = "1029384756";
$dbname = "pcchorg_url_info";

$fname = "";
$lname = "";
$name = "";
$email = "";
$contact_email = "";
$gender = "Not Given";
$sa = "Not Given";
$state = "Not Given";
$city = "Not Given";
$zip = "Not Given";
$phone = "Not Given";
$parent_names = "Not Given";
$parent_sa = "Not Given";
$parent_city = "Not Given";
$parent_state = "Not Given";
$parent_zip = "Not Given";
$religious_groups = "";
$message = "1";
/* ------- Email Array --------- 
	0 -->	ACFP 					--> acfpmail@gmail.com  
	1 -->	Bahal 					--> wlbcevents@gmail.com
	2 -->	Campus House 			--> info@pcch.org
	3 -->	Campus Outreach			--> kyle.wallace@campusoutreach.org
	4 -->	St. Thomas 				--> rpc@boilercatholics.org
	5 -->	Chabad Jewish SC 		--> JewishPurdue@gmail.com 
	6 -->	Chapel of the Good Shep --> sheep@goodshep.org
	7 -->	Chi Alpha 				--> jones187@purdue.edu
	8 -->	Christian SC 			--> csc@elmwood-church.org
	9 -->	Collegians for Jesus	--> upper.room@urcfellowship.org 		did not validate
	10 -->	CRU 					--> Info@purduecru.com 
	11 -->	FCA 					--> ChaplainPU@gmail.com 
	12 -->	Grace Campus Fellow		--> thomas.a.biang@gmail.com 
	13 -->	Greek IV 				--> greekiv@purdue.edu
	14 -->	Hillel 					--> philip@purduehillel.org
	15 -->	ICM 					--> purdueicm@gmail.com 
	16 -->	ISI 					--> pzull@purdue.edu
	17 -->	InterVarsity 			--> purdueintervarsity@gmail.com 
	18 -->	Into the Light 			--> lees336@purdue.edu 					did not validate
	19 -->	Koinwnia: UCC 			--> tjjenney@gmail.com
	20 -->	Lutheran SF 			--> 
	21 -->	Muslim Student Assoc. 	--> 
	22 -->	Navs 					--> glenn.balsis@navigators.org,mbalsis11@aol.com warning
	23 -->	Pagan Academic Net 		--> PurduePAN1@gmail.com 
	24 -->	Purdue Bible Fellows	--> pbf@faithlafayette.org
	25 -->	Purdue Collegiate Min. 	--> purduecm@gmail.com 
	26 -->	Purdue Lutheran Min. 	--> plm@plm.org 						did not work
	27 -->	RUF 					--> curtis.mcdaniel@ruf.org
	28 -->	Salt and Light 			--> ksbc@ksbc.net & acremeens@ksbc.net
	29 -->	Salt and Light Inter.	--> dgottfried@slcfworld.com 
	30 -->	Non-Theists 			--> atheists@purdue.edu
	31 -->	The Found 				--> bfound@frontier.com,bsf@purdue.edu
	32 -->	Unitarian Universalists --> uurevcharlie@aol.com 
	33 -->	University Church 		--> office@ucpurdue.com 				Did not work
	34 -->	Wesley Foundation 		--> info@wesleyfoundation.org
	35 -->	Worldwide Discipleship	--> parkswilson@hotmail.com 
	36 -->	Young Life 				--> mark@younglife-wyldlife.com 
	37 -->	Mormon Church 			--> garnerrt@ldschurch.org
	38 -->	Coalition Christian Out --> rwhitlock@ccojubilee.org
*/

$emails = array("acfpmail@gmail.com","wlbcevents@gmail.com","info@pcch.org","kyle.wallace@campusoutreach.org","rpc@boilercatholics.org","JewishPurdue@gmail.com","sheep@goodshep.org","jones187@purdue.edu","csc@elmwood-church.org","upper.room@urcfellowship.org","Info@purduecru.com","ChaplainPU@gmail.com","thomas.a.biang@gmail.com","greekiv@purdue.edu","philip@purduehillel.org","purdueicm@gmail.com","pzull@purdue.edu","purdueintervarsity@gmail.com","lees336@purdue.edu","tjjenney@gmail.com","swise@pcch.org","swise@pcch.org","glenn.balsis@navigators.org","PurduePAN1@gmail.com","pbf@faithlafayette.org","purduecm@gmail.com","plm@plm.org","curtis.mcdaniel@ruf.org","ksbc@ksbc.net","dgottfried@slcfworld.com","atheists@purdue.edu","bsf@purdue.edu","uurevcharlie@aol.com","office@ucpurdue.com","info@wesleyfoundation.org","parkswilson@hotmail.com","mark@younglife-wyldlife.com","garnerrt@ldschurch.org,rwhitlock@ccojubilee.org");
$emails_to_send = array();
$groups = array("ACFP","Bahal","CampusHouse","CampusOutreach","StThomas","Chabad","ChapelOfTheGoodShepherd","ChiAlpha","ChristianSC","CollegiansForJesus","CRU","FCA","GraceCampusFellowship","GreekIV","Hillel","ICM","ISI","InterVarsity","IntoTheLight","Koinwnia","LutheranSF","MuslimStudentAssoc","Navs","PaganAcademicNet","PurdueBibleFellowship","PurdueCollegiateMinistries","PurdueLutheranMinistry","RUF","SaltAndLight","SaltAndLightInternational","NonTheists","TheFound","UnitarianUniversalists","UniversityChurch","WesleyFoundation","WorldwideDiscipleship","YoungLife","MormonChurch","CoalitionChristianOutreach");
$groups_selected = array();

if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["cemail"])){
	$name = $_POST["fname"]." ".$_POST["lname"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$contact_email = $_POST["cemail"];
	$email = $_POST["cemail"];

	if(!empty($_POST["gender"]))
		$gender = $_POST["gender"];

	if(!empty($_POST["sa"]))
		$sa = $_POST["sa"];

	if(!empty($_POST["state"]))
		$state = $_POST["state"];

	if(!empty($_POST["city"]))
		$city = $_POST["city"];

	if(!empty($_POST["zip"]))
		$zip = $_POST["zip"];

	if(!empty($_POST["phone"]))
		$phone = $_POST["phone"];

	if(!empty($_POST["parent-names"]))
		$parent_names = $_POST["parent-names"];

	if(!empty($_POST["parent-address"]))
		$parent_sa = $_POST["parent-address"];

	if(!empty($_POST["parent-city"]))
		$parent_city = $_POST["parent-city"];

	if(!empty($_POST["parent-state"]))
		$parent_state = $_POST["parent-state"];

	if(!empty($_POST["parent-zip"]))
		$parent_zip = $_POST["parent-zip"];

	if(!empty($_POST["religious-groups"])){
		$religious_groups = $_POST["religious-groups"];
	
		foreach($religious_groups as $rg){
			array_push($emails_to_send, $emails[$rg]);
			array_push($groups_selected, $groups[$rg]);
		}
	}

	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

	$sql = "INSERT INTO StudentInfo(FirstName,LastName,Email,Gender,Address,City,State,Zip,Phone,ParentName,ParentAddress,ParentCity,ParentState,ParentZip) VALUES('".$fname."','".$lname."','".$email."','".$gender."','".$sa."','".$city."','".$state."','".$zip."','".$phone."','".$parent_names."','".$parent_sa."','".$parent_city."','".$parent_state."','".$parent_zip."')";
	$result = $conn->query($sql);

	$personID = $conn->insert_id;

	$sql = "SELECT * from ReligiousGroups";
	$result = $conn->query($sql);

	$fieldInfo = $result->fetch_fields();
	$currentGroups = array();
	foreach($fieldInfo as $field){
		array_push($currentGroups,$field->name);
	}

	$rgSQL = "INSERT INTO ReligiousGroups(PersonID";

	foreach($groups_selected as $group_name){
		if(!in_array($group_name,$currentGroups)){
			$sql = "ALTER TABLE ReligiousGroups ADD ".$group_name." INT DEFAULT 0";
			$conn->query($sql);
		}
		$rgSQL .= ",".$group_name;
	}

	$rgSQL .= ") VALUES(".$personID;

	foreach($groups_selected as $val){
		$rgSQL .= ",1";
	}

	$rgSQL .= ")";
	
	$conn->query($rgSQL);

	$conn->close();

	$email_content = "This is a religious preference card from ".$name."\r\n \r\n";
    $email_content .= "----------------------------------------- \r\n \r\n";
	$email_content .= "First Name: ".$fname."\r\n";
	$email_content .= "Last Name: ".$lname."\r\n";
	$email_content .= "Email: ".$contact_email."\r\n";
	$email_content .= "Phone: ".$phone."\r\n";
	$email_content .= "Gender: ".$gender."\r\n \r\n";
	$email_content .= "Street Address: ".$sa."\r\n";
	$email_content .= "City: ".$city."\r\n";
	$email_content .= "State: ".$state."\r\n";
	$email_content .= "Zip: ".$zip."\r\n \r\n";
	$email_content .= "Parent Names: ".$parent_names."\r\n";
	$email_content .= "Parent Street Address: ".$parent_sa."\r\n";
	$email_content .= "Parent City: ".$parent_city."\r\n";
	$email_content .= "Parent State: ".$parent_state."\r\n";
	$email_content .= "Parent Zip: ".$parent_zip."\r\n";

    $subject = "Religious Preference Card";
    
    $error_msg = "";
	$msg = "Your information has been recorded, thank you for your time!";

    $mailheader = "From: noreply@campusfaith.info \r\n";
    mail("swise@pcch.org",$subject,$email_content,$mailheader, "-r swise@pcch.org");
    
    foreach($emails_to_send as $recipient){
    	if($recipient != ""){
	    	/*$mailheader = "From: noreply@campusfaith.info \r\n";
		    if(mail($recipient,$subject,$email_content,$mailheader, "-r $recipient")){
		    	$msg = "Your information has been recorded, thank you for your time!";
		    }
		    else{
		    	$error_msg = "Whoops! It seems there was an error submitting your information, please try again later.";
		    }*/
		}
    }

    if($error_msg != ""){
    	echo($error_msg);
    }
    else{
    	echo($msg);
    }
}
else{
	echo("Whoops! It seems there was an error submitting your information, please try again later.");
}
?>