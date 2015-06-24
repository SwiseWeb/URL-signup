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
$gender = "";
$sa = "";
$state = "";
$city = "";
$zip = "";
$phone = "";
$parent_names = "";
$parent_sa = "";
$parent_city = "";
$parent_state = "";
$parent_zip = "";
$religious_groups = "";
$message = "1";
/* ------- Email Array --------- 
	0 -->	ACFP 					--> acfpmail@gmail.com  
	1 -->	Bahal 					--> wlbcevents@gmail.com
	2 -->	Campus House 			--> info@pcch.org
	3 -->	Campus Outreach			--> kyle.wallace@campusoutreach.org
	4 -->	St. Thomas 				--> mailbox@boilercatholics.org
	5 -->	Chabad Jewish SC 		--> JewishPurdue@gmail.com 
	6 -->	Chapel of the Good Shep --> sheep@goodshep.org
	7 -->	Chi Alpha 				--> jones187@purdue.edu
	8 -->	Christian SC 			--> csc@elmwood-church.org
	9 -->	Collegians for Jesus	--> upper.room@urcfellowship.org
	10 -->	CRU 					--> Info@purduecru.com 
	11 -->	FCA 					--> ChaplainPU@gmail.com 
	12 -->	Grace Campus Fellow		--> thomas.a.biang@gmail.com 
	13 -->	Greek IV 				--> greekiv@purdue.edu
	14 -->	Hillel 					--> philip@purduehillel.org
	15 -->	ICM 					--> purdueicm@gmail.com 
	16 -->	ISI 					--> pzull@purdue.edu
	17 -->	InterVarsity 			--> purdueintervarsity@gmail.com 
	18 -->	Into the Light 			--> lees336@purdue.edu
	19 -->	Koinwnia: UCC 			--> tjjenney@gmail.com
	20 -->	Lutheran SF 			--> 
	21 -->	Muslim Student Assoc. 	--> 
	22 -->	Navs 					--> glenn.balsis@navigators.org
	23 -->	Pagan Academic Net 		--> PurduePAN1@gmail.com 
	24 -->	Purdue Bible Fellows	--> pbf@bc1.org
	25 -->	Purdue Collegiate Min. 	--> purduecm@gmail.com 
	26 -->	Purdue Lutheran Min. 	--> plm@plm.org
	27 -->	RUF 					--> curtis.mcdaniel@ruf.org
	28 -->	Salt and Light 			--> ksbc@ksbc.net & acremeens@ksbc.net
	29 -->	Salt and Light Inter.	--> dgottfried@slcfworld.com 
	30 -->	Non-Theists 			--> atheists@purdue.edu
	31 -->	The Found 				--> bfound@frontier.net
	32 -->	Unitarian Universalists --> uurevcharlie@aol.com 
	33 -->	University Church 		--> office@ucpurdue.com 
	34 -->	Wesley Foundation 		--> info@wesleyfoundation.org
	35 -->	Worldwide Discipleship	--> parkswilson@hotmail.com 
	36 -->	Young Life 				--> mark@younglife-wyldlife.com 
*/

$emails = array("acfpmail@gmail.com","wl_bahai_comm@yahoo.com","info@pcch.org","kyle.wallace@campusoutreach.org","mailbox@boilercatholics.org","JewishPurdue@gmail.com","sheep@goodshep.org","jones187@purdue.edu","csc@elmwood-church.org","upper.room@urcfellowship.org","Info@purduecru.com","ChaplainPU@gmail.com","thomas.a.biang@gmail.com","greekiv@purdue.edu","philip@purduehillel.org","purdueicm@gmail.com","pzull@purdue.edu","purdueintervarsity@gmail.com","lees336@purdue.edu","tjjenney@gmail.com","","","glenn.balsis@navigators.org","PurduePAN1@gmail.com","pbf@bc1.org","purduecm@gmail.com","plm@plm.org","curtis.mcdaniel@ruf.org","ksbc@ksbc.net,acremeens@ksbc.net","dgottfried@slcfworld.com","atheists@purdue.edu","bfound@frontier.net","uurevcharlie@aol.com","office@ucpurdue.com","info@wesleyfoundation.org","parkswilson@hotmail.com","mark@younglife-wyldlife.com");
$emails_to_send = array();
$groups = array("ACFP","Bahal","CampusHouse","CampusOutreach","StThomas","Chabad","ChapelOfTheGoodShepherd","ChiAlpha","ChristianSC","CollegiansForJesus","CRU","FCA","GraceCampusFellowship","GreekIV","Hillel","ICM","ISI","InterVarsity","IntoTheLight","Koinwnia","LutheranSF","MuslimStudentAssoc","Navs","PaganAcademicNet","PurdueBibleFellowship","PurdueCollegiateMinistries","PurdueLutheranMinistry","RUF","SaltAndLight","SaltAndLightInternational","NonTheists","TheFound","UnitarianUniversalists","UniversityChurch","WesleyFoundation","WorldwideDiscipleship","YoungLife");
$groups_selected = array();

if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["cemail"])){
	$name = $_POST["fname"]." ".$_POST["lname"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$contact_email = $_POST["cemail"];
	$email = $_POST["cemail"];

	if(isset($_POST["gender"]))
		$gender = $_POST["gender"];

	if(isset($_POST["sa"]))
		$sa = $_POST["sa"];

	if(isset($_POST["state"]))
		$state = $_POST["state"];

	if(isset($_POST["city"]))
		$city = $_POST["city"];

	if(isset($_POST["zip"]))
		$zip = $_POST["zip"];

	if(isset($_POST["phone"]))
		$phone = $_POST["phone"];

	if(isset($_POST["parent-names"]))
		$parent_names = $_POST["parent-names"];

	if(isset($_POST["parent-address"]))
		$parent_sa = $_POST["parent-address"];

	if(isset($_POST["parent-city"]))
		$parent_city = $_POST["parent-city"];

	if(isset($_POST["parent-state"]))
		$parent_state = $_POST["parent-state"];

	if(isset($_POST["parent-zip"]))
		$parent_zip = $_POST["parent-zip"];

	if(isset($_POST["religious-groups"])){
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

	$email_content = "This is a URL contact form submission from ".$name."\r\n \r\n";
    $email_content .= "----------------------------------------- \r\n \r\n";
	$email_content .= $fname.$lname.$contact_email.$gender.$sa.$city.$state.$zip.$phone.$parent_names.$parent_sa.$parent_city.$parent_state.$parent_zip;
    $subject = "URL Website Contact Form Message";

    echo("Your information has been recorded, thank you for your time!");
/*
    foreach($emails_to_send as $recipient){
	    $mailheader .= "From: $email \r\n";
	    if(mail($recipient,$subject,$email_content,$mailheader, "-r $recipient")){
	        echo("Thank you for your message!");
	    }
	    else{
	    	echo("error");
	    }
    }*/
}
else{
	echo("The form was not filled out properly, pleace check all fields and try again");
}
?>