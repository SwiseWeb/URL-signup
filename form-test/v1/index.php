<html>
    <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width">
		<title>Religious Info Signup</title>
        <link type="text/css" rel="stylesheet" href="css/main.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function submitContactForm(){
                if($("#signup-form").valid()){
                    var form_data = $("#signup-form").serialize();
                    //alert(form_data);
                    $.ajax({
                        type:"POST",
                        url:"process-data.php",
                        data:form_data
                    }).done(function(msg){
                        alert(msg);
                    });
                }
            }
            $(document).ready(function(){
                $("#signup-form").validate({
                    rules:
                    {
                        fname:{
                            required:true
                        },
                        lname:{
                            required:true
                        },
                        cemail:{
                            required:true,
                            email:true
                        }
                    }
                });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <h1 style="margin-top:50px;">Campus Faith</h1>
            <h2>Religious organizations at purdue university</h2>
        </div>
        <div class="h3-bg">
            <div class="container">
                <h3 style="margin:0px; padding:40px 0px;">Recognizing the rich cultural and spiritual diversity of  students attending <span>Purdue University</span>, our religious student groups are committed to <span>providing safe places to grow spiritually</span> through worship, prayer, study, conversation, and fellowship and <span>to put faith into action</span> through service opportunities, mission trips, and faith-based initiatives.</h3>
            </div>
        </div>
        <div class="h4-bg">
            <div class="container">
                <h4 style="margin:0px; padding:40px 0px;">We invite you to check out the list of student organizations in order to receive information for each group.</h4>
            </div>
        </div>
        <div class="container">
        <div id="content">
            <form id="signup-form">
                <fieldset>
                    <h2>Student Information</h2>
                    <ul>
                        <li>
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname"  id="fname">
                        </li>
                        <li>
                            <label for="lname">Last Name:</label>
                            <input type="text" name="lname"  id="lname">
                        </li>
                        <li>
                            <label for="email" >Email:</label>
                            <input type="email" name="cemail"  id="email">
                        </li>
                        <li>
                            <label for="gender" style="width:auto;">Gender:</label>
                            <input type="radio" name="gender" id="male"  value="Male">
                            <label for="male" class="gender-label">Male</label>
                            <input type="radio" name="gender" id="female"  value="Female">
                            <label for="female" class="gender-label">Female</label>
                        </li>
                    </ul>
                    <ul class="align-right">
                        <li>
                            <label for="sa" >Street Address:</label>
                            <input type="text" name="sa"  id="sa">
                        </li>
                        <li>
                            <label for="city" >City:</label>
                            <input type="text" name="city" id="city" >
                        </li>
                        <li>
                            <label for="state" >State:</label>
                            <input type="text" name="state" id="state" >
                        </li>
                        <li>
                            <label for="zip" >Zip:</label>
                            <input type="text" name="zip" id="zip" >
                        </li>
                        <li>
                            <label for="phone" >Phone:</label>
                            <input type="text" name="phone" id="phone" >
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <h2>Parent Information</h2>
                    <ul style="width:100%;">
                        <li>
                            <label for="parent-names" >Parents Name(s):</label>
                            <input type="text" name="parent-names" id="parent-names" >
                        </li>
                        <li>
                            <label for="parent-address" >Parents Street Address<br/>(if different than above):</label>
                            <input type="text" name="parent-address" id="parent-address" >
                        </li>
                        <li>
                            <label for="parent-city" >City:</label>
                            <input type="text" name="parent-city" id="parent-city" >
                        </li>
                        <li>
                            <label for="parent-state" >State:</label>
                            <input type="text" name="parent-state" id="parent-state" >
                        </li>
                        <li>
                            <label for="parent-zip" >Zip:</label>
                            <input type="text" name="parent-zip" id="parent-zip" >
                        </li>
                    </ul>
                </fieldset>
                <fieldset id="religious-groups">
                    <h2>Religious Groups</h2>
                    <ul>
                        <li >
                            <label for="acfp" >Adventist Collegiate Fellowship at Purdue (Seventh Day Adventist)</label>
                            <input type="checkbox" name="religious-groups[]" value="0" id="acfp" >
                        </li>
                        <li >
                            <label for="bahal" >Baha'l Club</label>
                            <input type="checkbox" name="religious-groups[]" value="1" id="bahal" >
                        </li>
                        <li >
                            <label for="pcch" >Campus House (Non-Denominational/Christian Church)</label>
                            <input type="checkbox" name="religious-groups[]" value="2" id="pcch" >
                        </li>
                        <li >
                            <label for="sta" >Catholics - St. Thomas Aquinas, Purdue Catholic Students</label>
                            <input type="checkbox" name="religious-groups[]" value="4" id="sta" >
                        </li>
                        <li >
                            <label for="cjsc" >Chabad Jewish Student Center</label>
                            <input type="checkbox" name="religious-groups[]" value="5" id="cjsc" >
                        </li>
                        <li >
                            <label for="ca" >Chi Alpha Christian Fellowship (Assemblies of God/Pentecostal)</label>
                            <input type="checkbox" name="religious-groups[]" value="6" id="ca" >
                        </li>
                        <li >
                            <label for="csc" >Christian Student Center (Church of Christ)</label>
                            <input type="checkbox" name="religious-groups[]" value="7" id="csc" >
                        </li>
                        <li >
                            <label for="cfj" >Collegians for Jesus (Upper Room Fellowship)</label>
                            <input type="checkbox" name="religious-groups[]" value="8" id="cfj" >
                        </li>
                        <li >
                            <label for="cru" >CRU</label>
                            <input type="checkbox" name="religious-groups[]" value="9" id="cru" >
                        </li>
                        <li >
                            <label for="fca" >Fellowship of Christian Athletes</label>
                            <input type="checkbox" name="religious-groups[]" value="10" id="fca" >
                        </li>
                        <li >
                            <label for="tf" >The Found (American Baptist)</label>
                            <input type="checkbox" name="religious-groups[]" value="26" id="tf" >
                        </li>
                        <li >
                            <label for="gcf" >Grace Campus Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="11" id="gcf" >
                        </li>
                        <li >
                            <label for="gi" >Greek InterVarsity</label>
                            <input type="checkbox" name="religious-groups[]" value="12" id="gi" >
                        </li>
                        <li >
                            <label for="hillel" >Hillel</label>
                            <input type="checkbox" name="religious-groups[]" value="13" id="hillel" >
                        </li>
                        <li >
                            <label for="icm" >International Campus Ministry</label>
                            <input type="checkbox" name="religious-groups[]" value="14" id="icm" >
                        </li>
                        <li >
                            <label for="isi" >International Students Inc</label>
                            <input type="checkbox" name="religious-groups[]" value="15" id="isi" >
                        </li>
                    </ul>
                    <ul class="align-right">
                        <li >
                            <label for="icf" >InterVarsity Christian Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="16" id="icf" >
                        </li>
                        <li >
                            <label for="itl" >Into the Light</label>
                            <input type="checkbox" name="religious-groups[]" value="17" id="itl" >
                        </li>
                        <li >
                            <label for="navs" >Navigators</label>
                            <input type="checkbox" name="religious-groups[]" value="18" id="navs" >
                        </li>
                        <li >
                            <label for="pan" >Pagan Academic Network</label>
                            <input type="checkbox" name="religious-groups[]" value="19" id="pan" >
                        </li>
                        <li >
                            <label for="pbf" >Purdue Bible Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="20" id="pbf" >
                        </li>
                        <li >
                            <label for="pcm" >Purdue Collegiate Ministry</label>
                            <input type="checkbox" name="religious-groups[]" value="21" id="pcm" >
                        </li>
                        <li >
                            <label for="ruf" >Reformed University Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="22" id="ruf" >
                        </li>
                        <li >
                            <label for="salcf" >Salt and Light Christian Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="23" id="salcf" >
                        </li>
                        <li >
                            <label for="salcfi" >Salt and Light Christian Fellowship International</label>
                            <input type="checkbox" name="religious-groups[]" value="24" id="salcfi" >
                        </li>
                        <li >
                            <label for="snt" >Society of Non-Theists</label>
                            <input type="checkbox" name="religious-groups[]" value="25" id="snt" >
                        </li>
                        <li >
                            <label for="uu" >Unitarian Universalists</label>
                            <input type="checkbox" name="religious-groups[]" value="27" id="uu" >
                        </li>
                        <li >
                            <label for="uc" >University Church</label>
                            <input type="checkbox" name="religious-groups[]" value="28" id="uc" >
                        </li>
                        <li >
                            <label for="wf" >Wesley Foundation</label>
                            <input type="checkbox" name="religious-groups[]" value="29" id="wf" >
                        </li>
                        <li >
                            <label for="wda" >Worldwide Discipleship Association</label>
                            <input type="checkbox" name="religious-groups[]" value="30" id="wda" >
                        </li>
                        <li >
                            <label for="yl" >Young Life</label>
                            <input type="checkbox" name="religious-groups[]" value="31" id="yl" >
                        </li>
                    </ul>
                </fieldset>
            </form>
            <a href="javascript:submitContactForm();" class="btn">Submit</a>
        </div>
        </div>
    </body>
</html>