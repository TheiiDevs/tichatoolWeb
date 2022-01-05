<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup|admin</title>


    <script>
        const reswidth = screen.width;

        if (reswidth < 1020) {
            document.write('   <link rel="stylesheet" type="text/css" href="/css/adminreg0.css" />');
        } else {
            document.write(' <link rel="stylesheet" type="text/css" href="/css/adminreg1.css" />');
        }
    </script>
    <script defer src="/js/adminreg.js"></script>
    <!--<script defer src="/js/regscript.js"></script>-->



    <!-- some school have branches in the same community, so let's use the adrees
input to tell the deference from the school branches -->

</head>

<body>
    <div class="helpdiv">
        <a href=""><small class="help">help</small></a>
    </div>
    <div class="logodiv">
        <img src="/logos/tichatoolfullnamelogo.png" alt="">
    </div>
    <div id="err" style="margin-top: 20px; margin-bottom: 20px;">
         <div class="info0">
                    <span>all plans are free throughout this year 2022.</span>
                </div>
   

    </div>

    <?php
    include_once 'php/adminsignup.php';
    //global $schoolname;
    global $sql;
        if($sql){?>
           
           <div style="width:100%; text-align:center;">
            <h2 style="color:rgb(238, 163, 178);">welcome</h2>
            <h1 style="color:  rgb(216, 37, 73);"><?php echo("{$_SESSION['schoolname']}"); ?></h1>
            <span style="color:grey;">for security purposes please login</span>
            <a href="/login.php">
               <div style="display: flex;justify-content:center;">
                <div id="loginbtn" style=" background-color: rgb(250, 25, 100); width: 320px;
                            padding: 5px; border-radius: 5px; border: none;color: #fff;margin-top: 50px;">
                        <span>login</span>
                </div>
               </div>
            </a>
        </div>
        <?php } ?>



           <div style="width: 100%; display:flex; justify-content:center;">
                <div id="error">
                        <?php
                        include_once 'php/adminsignup.php';
                        adminrval();
                        ?>
                    </div>
        </div>

    <div class="body">

        <div>
            <div cla ss="rap">


                <form  id="form" method="POST">
                <input style="display: none;" id="role" type="checkbox" name="role" value="A" checked>
                    <div id="planboxcont" style="display: none; width:100%;">
                        <div id="planbox">
                        <input type="hidden" name="plan" value="N">
                            <div class="planbox">
                                <input type="checkbox" name="plan" value="p" id="premiumbox">
                                <span>premium</span>
                            </div>
                            <div class="planbox">
                                <input type="checkbox" name="plan" value="b" id="babybox">
                                <span>baby</span>
                            </div>
                            <div class="planbox">
                                <input type="checkbox" name="plan" value="f" id="freebox">
                                <span>free</span>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="cont0">
                        <small>your school name:</small>
                        <input class="input" id="schoolname"  name="schoolname" placeholder="cool college" type="name" required>
                        <small>login ID:</small>
                        <input class="input" id="username"  name="username" placeholder="cool1998" type="name" required>
                        
                        <small> branch:</small>
                        <input class="input" type="text" name="branch_txt" placeholder="branch: e.g fagba branch" placeholder="branch: e.g fagba branch">
                        <br> <small>please ignore if you are not a branch or headquaters</small>
                       
                    </div>






                    <div class="container" id="cont2">
                        <div class="divlabel">
                            <label><span>address:</span></label>
                        </div>

                        <textarea id="address" name="Aaddress" placeholder="2, Aluasa street, Olambe junction, Ogun state."></textarea>

                        <div class="country">
                            <label>country :</label>
                            <select id="country" name="Acountry">
                                <option value="Nigeria">Nigeria</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                       
                    </div>


                    <!-- use laravel if password does not match show only this div with error msg js is
ruining your code-->
                    <div class="container" id="cont1">
                        <input class="input" id="email" type="text" name="Aemail" placeholder="enter email" required>
                        <br>
                        <small id="info_1">its advisable to enter school active email</small>

                        <input class="input" type="password" name="Apass" id="password" placeholder="create password" required>
                        <br>
                        <input class="input" type="password" name="confirm_pass" id="password1" placeholder="confirm password" required>
                        <div style="display: flex">
                            <div><input type="checkbox" id="showpass"></div>
                            <div> <small>show password</small></div>
                        </div>
                    </div>
                    <div id="navEnd">
                        <div class="navEnd">
                            <button class="navbtn1" id="navback1">back</button>
                            <button class="navbtn1" id="navback1_0">back</button>
                            <button type="submit" id="navNext1">done</button>

                        </div>
                    </div>

            </div>

            </form>

           <div id="navDivv0" >
           <div class="navDiv">
                            <button class="navbtn1" id="navback0">back</button>
                            <button id="navNext0">next</button>

            </div>
           </div>
           
           <div id="navDivv1">
           <div class="navDiv">
                            <button class="navbtn1" id="navback2">back</button>
                            <button id="navNext2">next</button>
            </div>
           </div>

          

            <!--plan-->
            <div id="plan">
               

                <div class="header">
                    <span>choose your plan</span>
                </div>

                <section>
                    <div class="gradeplan">
                        <div class="bigtxt"><span>premium</span></div>

                    </div>
                    <div class="abt">
                        <div class="dolla"> <span class="numb">$5 /student</span> <br>
                            <small> for four months</small>
                        </div>
                        <div class="small">
                            <small>all features are available</small>
                        </div>
                    </div>
                    <div id="more">

                    </div>

                    <div>
                        <button class="more1" id="readmore0"><small>read more</small></button>
                        <button class="more1" id="choose1"><small>choose</small></button>
                    </div>
                </section>

                <div class="read" id="read0">
                    <div class="readmoreColor"> in premium, billing are charged per students for four months, for one year and for two years</div>
                    <p class="text">

                        <span class="txtsubhed">no ads: </span> no ads of any kind on student portals. no cover screen pop ups,
                        only status.
                        ads only on admin feeds, not parent student portals for the sake of academic competions
                        <br>
                        <br>
                        <span class="txtsubhed">vet results: </span> admin can vet results before it appear on portal
                        <br>
                        <br>
                        <span class="txtsubhed">migration alert: </span> admin will be alerted when a student leaves school and
                        admitted to another school using Tichatool.
                        can also see which school.
                        <br>
                        <br>
                        <span class="txtsubhed">home key: </span>if tichatool is linked to your school website, you can always click home
                        key on the portal to return to school website home.
                        <br>
                        <span class="txtsubhed">lock portal: </span> you can block a particular student from viewing their portal.
                        <br>
                        <br>
                        <span class="txtsubhed">camarker: </span>teachers can use the cammarker feature. cammaker is a special
                        feature to speed up recording. it helps teachers to mark exams or tests
                        and input scores automatically to spreadsheet.</span>
                    </p>

                    <button class="rbtn" id="readless0">read less</button>
                </div>

                <section>
                    <div class="gradeplan">
                        <div class="bigtxt"><span>baby plan</span></div>

                    </div>
                    <div class="abt">
                        <div class="dolla"> <span class="numb">$4 /student</span> <br>
                            <small> for four months</small>
                        </div>
                        <div class="small">
                            <small>no ads</small>
                        </div>
                    </div>
                    <div id="more">

                    </div>
                    <div>
                        <button class="more1" id="readmore1"><small>read more</small></button>
                        <button class="more1" id="choose2"><small>choose</small></button>
                    </div>
                </section>

                <div class="read" id="read1">
                    <div class="readmoreColor">in baby plan, billing are charged per students for four months, for one year and for two years</div>
                    <p class="text">
                        <span class="txtsubhed">no ads: </span> no ads of any kind on student portals. no cover screen pop ups ads on admin board
                        only status and possible status <span class="dots">...</span>
                        <span class="more"> ads only on admin feeds, not
                            parent student portals. thats for the sake of academic competions and vital academic informations.
                            <br>
                            <br>
                            <span class="txtsubhed">vet results: </span> admin can vet results before it appear on portal
                            <br>
                            <br>
                            <span class="txtsubhed">migration alert: </span> admin will be alerted when a student leaves school and
                            admitted to another school using Tichatool.
                            can also see which school.
                            <br>
                            <br>
                            <span class="txtsubhed">home key </span>if tichatool is linked to your school website, you can always click home
                            key on the portal to return to school website home.
                            <br>
                            <span class="txtsubhed">lock portal </span> you can block a particular student from viewing their portal.
                            <br>
                            <br>
                            <span class="txtsubhed">camarker </span>teachers can use the cammarker feature. cammaker is a special
                            feature to speed up recording. it helps teachers to mark exams or tests
                            and input scores automatically to spreadsheet.</span>
                    </p>

                    <button class="rbtn" id="readless1">read less</button>
                </div>

                <section>
                    <div class="gradeplan">
                        <div class="bigtxt"><span>free</span></div>

                    </div>
                    <div class="abt">
                        <div class="dolla"> <span class="numb">$0 /student</span> <br>
                            <small> forever</small>
                        </div>
                        <div class="small">
                            <small>ads</small>
                        </div>
                    </div>
                    <div id="more">

                    </div>
                    <div>
                        <button class="more1" id="readmore2"><small>read more</small></button>
                        <button class="more1" id="choose3"><small>choose</small></button>
                    </div>
                </section>
                <div class="read" id="read2">
                    <div class="readmoreColor">in baby plan, there's no billing. it's free forever with the conditions below</div>
                    <p class="text">
                        <span class="txtsubhed">ads: </span> ads of any kind on student portals. cover screen pop ups
                        and status <span class="dots">...</span><span class="more"> ads on admin board
                            <br>
                            <br>
                            <span class="txtsubhed">no ads: </span> no ads of any kind on student portals. no cover screen pop ups ads on admin board
                            only status and possible status ads only on admin feeds, not
                            parent student portals. thats for the sake of academic competions and vital academic informations.
                            <br>
                            <br>
                            <span class="txtsubhed">vet results: </span> admin can vet results before it appear on portal
                            <br>
                            <br>
                            <span class="txtsubhed">migration alert: </span> admin will be alerted when a student leaves school and
                            admitted to another school using Tichatool.
                            can also see which school.
                            <br>
                            <br>
                            <span class="txtsubhed">home key </span>if tichatool is linked to your school website, you can always click home
                            key on the portal to return to school website home.
                            <br>
                            <span class="txtsubhed">lock portal </span> you can block a particular student from viewing their portal.
                            <br>
                            <br>
                            <span class="txtsubhed">camarker </span>teachers can use the cammarker feature. cammaker is a special
                            feature to speed up recording. it helps teachers to mark exams or tests
                            and input scores automatically to spreadsheet.</span>
                    </p>

                    <button class="rbtn" id="readless2">read lesse</button>
                </div>


            </div>

            <div id="inform" >
               
            </div>

            <div class="articlediv">
                <div class="head">
                    to add teachers

                </div>

               
                <article>
                    <small>
                        <ul>
                            <li> goto feeds</li>
                            <li>search for teachers name</li>
                            <li>click on add, or</li>
                            <li> ckick on any of the teachers to view their profile.</li>
                        </ul>
                    </small>

                </article>
            </div>




        </div>
    </div>

    </div>


</body>


</html>