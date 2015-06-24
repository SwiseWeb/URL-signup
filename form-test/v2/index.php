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
        <div class="container" style="text-shadow:5px 5px 5px #000;">
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
                        <li class="website-btn"><a href="http://lafayette23.adventistchurchconnect.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="bahal" >Baha'l Club</label>
                            <input type="checkbox" name="religious-groups[]" value="1" id="bahal" >
                        </li>
                        <li class="website-btn"><a href="http://www.westlafayettebahai.org/" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="pcch" >Campus House (Non-Denominational/Christian Church)</label>
                            <input type="checkbox" name="religious-groups[]" value="2" id="pcch" >
                        </li>
                        <li class="website-btn"><a href="http://www.pcch.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="cout" >Campus Outreach (Interdenominational)</label>
                            <input type="checkbox" name="religious-groups[]" value="3" id="cout" >
                        </li>
                        <li class="website-btn"><a href="http://www.coindy.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="sta" >Catholics - St. Thomas Aquinas, Purdue Catholic Students</label>
                            <input type="checkbox" name="religious-groups[]" value="4" id="sta" >
                        </li>
                        <li class="website-btn"><a href="http://www.boilercatholics.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="cjsc" >Chabad Jewish Student Center</label>
                            <input type="checkbox" name="religious-groups[]" value="5" id="cjsc" >
                        </li>
                        <li class="website-btn"><a href="http://www.jewishpurdue.com" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="cgs" >Chapel of the Good Shepherd (Episcopal/Anglican)</label>
                            <input type="checkbox" name="religious-groups[]" value="6" id="cgs" >
                        </li>
                        <li class="website-btn"><a href="http://www.goodshep.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="ca" >Chi Alpha Christian Fellowship (Assemblies of God/Pentecostal)</label>
                            <input type="checkbox" name="religious-groups[]" value="7" id="ca" >
                        </li>
                        <li class="website-btn"><a href="http://www.xapurdue.com" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="csc" >Christian Student Center (Church of Christ)</label>
                            <input type="checkbox" name="religious-groups[]" value="8" id="csc" >
                        </li>
                        <li class="website-btn"><a href="http://www.elmwood-church.org/wp/csc" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="cfj" >Collegians for Jesus (Upper Room Fellowship)</label>
                            <input type="checkbox" name="religious-groups[]" value="9" id="cfj" >
                        </li>
                        <li class="website-btn"><a href="http://www.urcfellowship.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="cru" >CRU</label>
                            <input type="checkbox" name="religious-groups[]" value="10" id="cru" >
                        </li>
                        <li class="website-btn"><a href="http://purduecru.com/" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="fca" >Fellowship of Christian Athletes</label>
                            <input type="checkbox" name="religious-groups[]" value="11" id="fca" >
                        </li>
                        <li class="website-btn"><a href="http://www.fcapurdue.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="gcf" >Grace Campus Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="12" id="gcf" >
                        </li>
                        <li class="website-btn"><a href="http://www.gc3.cc" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="gi" >Greek InterVarsity</label>
                            <input type="checkbox" name="religious-groups[]" value="13" id="gi" >
                        </li>
                        <li class="website-btn"><a href="http://www.purduegreekiv.com" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="hillel" >Hillel</label>
                            <input type="checkbox" name="religious-groups[]" value="14" id="hillel" >
                        </li>
                        <li class="website-btn"><a href="http://www.purduehillel.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="icm" >International Campus Ministry</label>
                            <input type="checkbox" name="religious-groups[]" value="15" id="icm" >
                        </li>
                        <li class="website-btn"><a href="http://www.purdueicm.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="isi" >International Students Inc</label>
                            <input type="checkbox" name="religious-groups[]" value="16" id="isi" >
                        </li>
                        <li class="website-btn"></li>
                    </ul>
                    <ul class="align-right">
                        
                        <li >
                            <label for="icf" >InterVarsity Christian Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="17" id="icf" >
                        </li>
                        <li class="website-btn"><a href="http://www.purdueiv.com" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="itl" >Into the Light (Korean)</label>
                            <input type="checkbox" name="religious-groups[]" value="18" id="itl" >
                        </li>
                        <li class="website-btn"><a href="http://www.facebook.com/into_the_light" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="koinwnia" >Koinwnia: United Church of Christ</label>
                            <input type="checkbox" name="religious-groups[]" value="19" id="koinwnia" >
                        </li>
                        <li class="website-btn"></li>
                        
                        <li >
                            <label for="lsf" >Lutheran Student Fellowship (Missouri Synod)</label>
                            <input type="checkbox" name="religious-groups[]" value="20" id="lsf" >
                        </li>
                        <li class="website-btn"></li>
                        
                        <li >
                            <label for="msa" >Muslim Student Association</label>
                            <input type="checkbox" name="religious-groups[]" value="21" id="msa" >
                        </li>
                        <li class="website-btn"></li>
                        
                        <li >
                            <label for="navs" >Navigators</label>
                            <input type="checkbox" name="religious-groups[]" value="22" id="navs" >
                        </li>
                        <li class="website-btn"><a href="http://www.purduenavs.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="pan" >Pagan Academic Network</label>
                            <input type="checkbox" name="religious-groups[]" value="23" id="pan" >
                        </li>
                        <li class="website-btn"><a href="http://www.purdue.edu/pagan" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="pbf" >Purdue Bible Fellowship (Faith Church/Baptist)</label>
                            <input type="checkbox" name="religious-groups[]" value="24" id="pbf" >
                        </li>
                        <li class="website-btn"><a href="http://www.faithlafayette.org/pbf" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="pcm" >Purdue Collegiate Ministry</label>
                            <input type="checkbox" name="religious-groups[]" value="25" id="pcm" >
                        </li>
                        <li class="website-btn"><a href="http://www.purduecm.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="plm" >Purdue Lutheran Ministry (ECLA)</label>
                            <input type="checkbox" name="religious-groups[]" value="26" id="plm" >
                        </li>
                        <li class="website-btn"><a href="http://www.plm.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="ruf" >Reformed University Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="27" id="ruf" >
                        </li>
                        <li class="website-btn"><a href="http://purdue.ruf.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="salcf" >Salt and Light Christian Fellowship</label>
                            <input type="checkbox" name="religious-groups[]" value="28" id="salcf" >
                        </li>
                        <li class="website-btn"><a href="http://ksbc.net/saltandlight" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="salcfi" >Salt and Light Christian Fellowship International</label>
                            <input type="checkbox" name="religious-groups[]" value="29" id="salcfi" >
                        </li>
                        <li class="website-btn"><a href="http://www.slcfworld.com" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="snt" >Society of Non-Theists</label>
                            <input type="checkbox" name="religious-groups[]" value="30" id="snt" >
                        </li>
                        <li class="website-btn"><a href="http://purduenontheists.wordpress.com/" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="thefound" >The Found (American Baptist)</label>
                            <input type="checkbox" name="religious-groups[]" value="31" id="thefound" >
                        </li>
                        <li class="website-btn"><a href="http://www.purdue.edu/bsf" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="uu" >Unitarian Universalists</label>
                            <input type="checkbox" name="religious-groups[]" value="32" id="uu" >
                        </li>
                        <li class="website-btn"><a href="http://uulafayette.wordpress.com" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="uc" >University Church</label>
                            <input type="checkbox" name="religious-groups[]" value="33" id="uc" >
                        </li>
                        <li class="website-btn"><a href="http://www.ucpurdue.com" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="wf" >Wesley Foundation (United Methodist)</label>
                            <input type="checkbox" name="religious-groups[]" value="34" id="wf" >
                        </li>
                        <li class="website-btn"><a href="http://www.wesleyfoundation.org" target="blank" class="btn">Website &raquo;</a></li>
                        
                        <li >
                            <label for="wda" >Worldwide Discipleship Association</label>
                            <input type="checkbox" name="religious-groups[]" value="35" id="wda" >
                        </li>
                        <li class="website-btn"></li>
                        
                        <li >
                            <label for="yl" >Young Life</label>
                            <input type="checkbox" name="religious-groups[]" value="36" id="yl" >
                        </li>
                        <li class="website-btn"><a href="http://greaterlafayette.younglife.org/Pages/default.aspx" target="blank" class="btn">Website &raquo;</a></li>
                    </ul>
                </fieldset>
            </form>
            <a href="javascript:submitContactForm();" class="btn">Submit</a>
        </div>
        </div>
    </body>
</html>