<!DOCTYPE html>
<head>
    <title>InTech Solutions</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.animate-shadow.js"></script>
    <script src="js/index.js"></script>
</head>

<?php

   session_start();


   //echo $_SESSION['name'];

?>

<body>
    <header>
        <ul id='ul_sec'>
            <li id="li_logo">
                <table>
                    <tr>
                        <td>
                            <span id="logo">InTech</span>
                        </td>
                        <td>
                             <img src="images/img_logo.png" id="logo_main"> 
                        </td>
                        <td>
                            <span id="logo">Solutions</span>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="li_sec">
                <table id="tbl_sec">
                <tr>
                    <td>
                         <button class="btns" id='home_btn'>HOME</button>
                    </td>
                    <td>
                         <button class="btns" id='about_btn'>ABOUT</button>
                    </td>
                    <td>
                         <button class="btns" id='port_btn'>PORTFOLIO</button>
                    </td>
                    <td>
                         <button class="btns" id='cont_btn'>CONTACT</button>
                    </td>
                    <td>
                         <button class="btns" id='test_btn'>TESTIMONIALS</button>
                    </td>
                </tr>
                </table>
            </li>
        </ul>
    </header>

    <div id='opening_section'>
          <table id="tbl_open">
              <tr>
                  <td>
                      <span id="label_hid">Beyond the</span>
                  </td>
              </tr>
              <tr>
                  <td>
                      <span id="label_hid">Limits.</span>
                  </td>
              </tr>
              <tr>
                  <td>
                      <p id="cont">Providing global quality servies for creating visually <br> appealing sites that feature user-friendly design <br>based to a client's specifications.</p>
                  </td>
              </tr>
              <tr>
                  <td>
                      <button id='works_btn'>GET STARTED</button>
                  </td>
              </tr>
          </table>
    </div>

    <div id="div_home">
        <table id="tbl_home">
            <tr>
                        <td>
                            <span id="logo_home">InTech</span>
                        </td>
                        <td>
                             <img src="images/img_logo.png" id="logo_main_home"> 
                        </td>
                        <td>
                            <span id="logo_home">Solutions</span>
                        </td>
            </tr>
        </table>

        <table id="tbl_home_second">
            <tr>
                <td>
                    <p>A website (also written as web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Notable examples are wikipedia.org, google.com, and amazon.com.

                    All publicly accessible websites collectively constitute the World Wide Web. There are also private websites that can only be accessed on a private network, such as a company's internal website for its employees.

                    Websites are typically dedicated to a particular topic or purpose, such as news, education, commerce, entertainment, or social networking. Hyperlinking between web pages guides the navigation of the site, which often starts with a home page.</p>
                </td>
            </tr>
        </table>
    </div>

    <div id="div_about">
        <ul id="ul_about">
            <li id="li_about">
                <img src="images/img_logo.png" id="logo_main_about"> 
            </li>
            <li id="li_about">
                <table id="tbl_about_second">
                <tr>
                    <td>
                        <p id="label_about">Who We Are</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>A website (also written as web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Notable examples are wikipedia.org, google.com, and amazon.com.<br></p>

                        <p>All publicly accessible websites collectively constitute the World Wide Web. There are also private websites that can only be accessed on a private network, such as a company's internal website for its employees.<br></p>

                        <p>Websites are typically dedicated to a particular topic or purpose, such as news, education, commerce, entertainment, or social networking. Hyperlinking between web pages guides the navigation of the site, which often starts with a home page.</p>
                    </td>
                </tr>
            </table>
            </li>
        </ul>
        <ul id="ul_about">
            <li id="li_about_2">
                <img src="images/div_under.png" id="cover_div">
            </li>
        </ul>
        <ul id="ul_about">
            <li>
                <p id="label_about_2">How can we help you?</p>
            </li>
        </ul>
        <ul id="ul_about">
            <li>
                <input type="text" name="demo_search" placeholder="Type keywords to find answers" id="input_demo">
            </li>
        </ul>
        <ul id="ul_about_3">
            <li>
                <p id="label_about_3">Frequently Asked Questions</p>
            </li>
        </ul>
        <ul id="ul_about_4">
            <li id="li_about_3">
                <table>
                    <tr>
                        <th>
                            <p id="labels">Essential Articles</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p id="labels_u">Strategy and Consulting</p>
                            <p id="labels_u">Leadership</p>
                            <p id="labels_u">Case Study</p>
                            <p id="labels_u">Solutions</p>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="li_about_3">
                <table>
                    <tr>
                        <th>
                            <p id="labels">Managed Services</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p id="labels_u">App Services</p>
                            <p id="labels_u">System Admin Services</p>
                            <p id="labels_u">Desktop Services</p>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="li_about_3">
                <table>
                    <tr>
                        <th>
                            <p id="labels">Careers</p>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p id="labels_u">Open Positions</p>
                            <p id="labels_u">Hiring Process</p>
                        </td>
                    </tr>
                </table>
            </li>
        </ul>
    </div>

    <div id="div_cli">
        <table id="tbl_cli">
            <tr>
                <td>
                    <p id="label_re">Ready to be a new client?</p>
                    <hr id="line">
                </td>
            </tr>
        </table>
        <table id="mssg">
            <tr>
                <td>
                    <img src="images/message.png" id="m_img">
                </td>
                <td>
                    <table id="tbl_sec_un">
                        <tr>
                            <td>
                                <p id="label_1">Message Us</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="label_2">Interested in InTech professional services?<br>Check out our solutions and send inquiries<br>to <u>intech_solutions@gmail.com<u></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div id="portfolio_div">
        <div id="handler">
            <ul id="port_ul">
            <li>
                <p id="label_about_z">Meet the Team</p>
            </li>
            </ul>
            <ul id="port_ul_content">
                <?php

                        $con = new mysqli("localhost", "root", "", "tpm_database");

                        $sql = mysqli_query($con, "SELECT * FROM developers");
                        while($sql_row = mysqli_fetch_assoc($sql))
                        {
                            echo 
                            '
                               <li class="li_persons" data-panel="'.$sql_row['dev_id'].'" id="'.$sql_row['dev_id'].'">
                                    <table>
                                        <tr>
                                            <td>
                                                <img src="profile_pics/'.$sql_row['dev_id'].'.jpg" class="persons">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p id="names">'.$sql_row['dev_fullname'].'</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p id="label_role">'.$sql_row['dev_role'].'</p>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            ';
                        }


                ?>
            </ul>
        </div>
    </div>

    <div id="div_contact">
        <p id='label_contact'>We'd love to hear from you.</p>
    </div>

    <div>
        <ul>
            <li>
                <p id="label_about_3">Get in Touch</p>
            </li>
        </ul>
        <ul id="ul_bottom">
            <li>
                <table>
                    <tr>
                        <td>
                            <p id="labels_u">First Name</p>
                            <input type="text" name="fname" class="names_box">
                        </td>
                        <td>
                            <p id="labels_u">Last Name</p>
                            <input type="text" name="lname" class="names_box">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <p id="labels_u">Email</p>
                            <input type="text" name="email" class="info_box">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="labels_u">Company</p>
                            <input type="text" name="company" class="info_box">
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <p id="labels_u">Tell us about yourself</p>
                            <textarea name="about_self" style="margin: 0px; height: 111px; width: 441px;" id="text_area"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="labels_u">Would you like to subscribe to our site?</p>
                            <input type="radio" name="prompt"> Yes
                            <input type="radio" name="prompt"> No
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" name="send" value="SEND MESSAGE" id="send">
                        </td>
                    </tr>
                </table>
            </li>
        </ul>
    </div>

    <div id="all_test_part">

    <div id='intro_test'>
        <p id="label_re2">Actual Clients Reviews</p>
        <p id="label_re3">And that's just a few</p>
        <hr id="line">
    </div>

    <div id="div_test">

    <div id="testimonies_posts">
        <?php

                $sql_cont = mysqli_query($con, "SELECT * FROM testimonies");
                while($sql_cont_row = mysqli_fetch_assoc($sql_cont))
                {


                    if(isset($_SESSION['name']))
                    {
                        if($sql_cont_row['name'] == $_SESSION['name'])
                        {
                            $name = $sql_cont_row['name'];
                        }
                        else
                        {
                            $name = 'none';
                        }
                    }
                    else
                    {
                        $name = 'none';
                    }

                    if($name == 'none')
                    {
                       echo
                    '
                        <ul>
                            <li>
                                <table class="tbl_posts">
                                    <tr>
                                        <td>
                                            <p id="content_post" data-panel="'.$name.'"><span id="quotes">"</span><i>'.$sql_cont_row['content'].'</i></p>
                                            <hr id="line2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p id="labels_nms">'.$sql_cont_row['name'].'</p>
                                            <p id="labels_nms2">Date Posted: '.$sql_cont_row['date_posted'].'</p>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    '
                    ;   
                    }
                    else if ($name == $sql_cont_row['name']) {
                        echo 
                    '
                        <ul>
                            <li>
                                <table class="tbl_posts">
                                    <tr>
                                        <td>
                                            <p id="content_post" data-panel="'.$name.'"><span id="quotes">"</span><i id="value">'.$sql_cont_row['content'].'</i></p>
                                            <hr id="line2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p id="labels_nms">'.$sql_cont_row['name'].'</p>
                                            <p id="labels_nms2">Date Posted: '.$sql_cont_row['date_posted'].'</p>
                                        </td>
                                    </tr>
                                    <tr id="width_btn">
                                        <td id="width_btn">
                                             <button id="del_post" data-panel="'.$name.'">DELETE POST</button>
                                             <button id="edit_post" data-panel="'.$name.'">EDIT POST</button>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    '
                    ;
                    }

                    
                }

        ?>
    </div>

    <ul id="test_ul">
            <li>
                <p id="labels_test_u">Add your testimony</p>
                <?php

                     if (empty($_SESSION['name'])) 
                     {
                         echo '<button id="sign" class="navs">Sign Up</button><button id="log" class="navs">Log In</button>';
                     }
                     else
                     {
                        echo 
                        '
                             <p id="user_info">'.$_SESSION['name'].'</p>
                             <textarea name="about_test" style="margin: 0px; height: 200px; width:700px;" id="text_test"></textarea><br>
                             <button id="post_btn">POST TESTIMONY</button>
                             <button id="submit_btn" data-panel="'.$_SESSION['name'].'">SUBMIT EDIT</button>
                             <button id="cancel_btn">CANCEL EDIT</button>
                             <button id="logout_btn">LOGOUT</button>
                        ';
                     }


                ?>
            </li>
        </ul>
    </div>


    <div id="log_sign">
          <table id="tbl_sign">
            <tr>
                  <td>
                      <p id="labels_x"> X </p>
                  </td>
              </tr>
              <tr id="center">
                  <td>
                      <p id="label_test_sign">Sign Up</p>
                  </td>
              </tr>
              <tr>
                  <td>
                      <p id="labels_u">Full Name</p>
                      <input type="text" id='name_id' name="name" placeholder="ex. Juan De La Cruz" class="inp">
                  </td>
              </tr>
              <tr>
                  <td>
                      <p id="labels_u">Email</p>
                      <input type="text" id='email_id' name="email" placeholder="ex. juan.delacruz@gmail.com" class="inp">
                  </td>
              </tr>
              <tr id="center">
                  <td>
                      <button id='sign_con' class="navs_s">Sign Up</button>
                  </td>
              </tr>
          </table>
    </div>

    <div id="log_sign_2">
          <table id="tbl_sign">
            <tr>
                  <td>
                      <p id="labels_x_2"> X </p>
                  </td>
              </tr>
              <tr id="center">
                  <td>
                      <p id="label_test_sign">Log In</p>
                  </td>
              </tr>
              <tr>
                  <td>
                      <p id="labels_u">Full Name</p>
                      <input type="text" id='name_id2' name="name_2" placeholder="ex. Juan De La Cruz" class="inp">
                  </td>
              </tr>
              <tr>
                  <td>
                      <p id="labels_u">Email</p>
                      <input type="text" id='email_id2' name="email_2" placeholder="ex. juan.delacruz@gmail.com" class="inp">
                  </td>
              </tr>
              <tr id="center">
                  <td>
                      <button id='log_con' class="navs_s">Log In</button>
                  </td>
              </tr>
          </table>
    </div>

    </div>






    <footer id="foot_all">
        <ul id="ul_footer">
            <li id="li_footer">
                <table>
                    <tr>
                        <td>
                            <p id="mains">Explore</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Home</p>
                            <p>About</p>
                            <p>Testimonies</p>
                            <p>Portfolio</p>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="li_footer_2">
                <table>
                    <tr>
                        <td>
                            <p id="mains">Visit</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>San Bartolome, Quezon City, Metro Manila, Philippines</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <p id="mains">New Service</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="text-decoration: underline;">intech_solutions@gmail.com</p>
                            <p>(+83) 9273488321</p>
                            <p>(02) 295-35-33</p>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="li_footer">
                <table>
                    <tr>
                        <td>
                            <p id="mains">Follow</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Facebook</p>
                            <p>Instagram</p>
                            <p>Twitter</p>
                            <p>Youtube</p>
                        </td>
                    </tr>
                </table>
            </li>
            <li id="li_footer">
                <table>
                    <tr>
                        <td>
                            <p id="mains">Legal</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Terms</p>
                            <p>Privacy</p>
                        </td>
                    </tr>
                </table>
            </li>
        </ul>
        <ul id="ul_last">
            <li id="li_last">
                <hr>
                <p id="copyright_label"> ©2021 | All Rights Reserved | InTech Solutions</p>
            </li>
        </ul>
    </footer>
</body>
</html>