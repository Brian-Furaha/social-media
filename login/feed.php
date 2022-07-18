<?php
    session_start();
    //print_r($_SESSION);
    //unset($_SESSION['user_id']);
    include("classes\conn.php");
    include("classes\login.php");
    include("classes\user.php");

	//$user_data = check_login($con);
    if(isset($_SESSION['user_id']) && is_numeric($_SESSION['user_id']))
    {

        $id = $_SESSION['user_id'];
        $login = new Login();

        $user_data = $login->check_login($id);

        if ($user_data) 
        {
            // recieve user data
            
        }else
        {
            header("Location: login.php");
            die;
        }
    }else
    {
        header("Location: login.php");
            die;
    }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Profile | MyPortfolio</title>
 </head>

 <style type="text/css">
     
     #bar{

        height: 50px;
        background-color: #405d9b;
        color: azure;
        font-size: 40px;
     }

     #search{

        width: 400px;
        height: 30px;
        border-radius: 10px;
        border: none;
        background-color: black;
        padding: 2px;
        font-size: 14px;
        background-image: url(search.png);
        background-repeat: no-repeat;
        background-position: right;
        background-size: 30px 30px;
     }
     #profile_pic{

        width: 100px;
        border-radius: 50%;
        border: solid 2px white;
        align-self: left;
     }

     #button{

        width: 100px;
        display: inline-block;
        margin: 2px;
     }

     #friends_img{

        width: 75px;
        float: left;
        margin: 8px;

     }

     #friends_bar{

        min-height: 400px;
        margin-top: 20px;
        color: #405d9b;
        padding: 8px;
        text-align: center;
        font-size: 20px;

     }

     #friends{

        clear: both;
        font-size: 12px;
        font-weight: bold;
        color: #405d9b;
     }

     textarea{

        width: 100%;
        border: none;
        font-family: tahoma;
        font-size: 14px;
        height: 60px;
     }
     #post{

        float: right;
        background-color: #405d9b;
        border: none;
        color: whitesmoke;
        padding: 4px;
        font-size: 14px;
        border-radius: 2px;
        width: 50px;
     }

     #post_bar{

        margin-top: 20px;
        background-color: white;
        padding: 10px;
     }

     #posts{

        padding: 4px;
        font-size: 13px;
        display: flex;
        margin-bottom: 20px;
     }
 </style>
 <body style="font-family: tahoma;background-color: aliceblue;">

    <div id="bar">
        MyPortfolio
        <div style="width: 800px;margin: auto;font-size: 30px;float: right;">
            <input type="text" name="search" id="search" value="" placeholder="Search">
            <img src="profile1.png" style="float: right;width: 50px;">
        </div>
    </div>

    <!-- cover area-->
        <!-- under the cover area-->
        <div style="display: flex;">

            <!-- friends area-->
            <div style="min-height: 400px;flex: 1;">
                
                <div id="friends_bar">

                    <img src="selfie.jpg" id="profile_pic"><br>
                    Username
                </div>

            </div>

            <!-- post area-->
            <div style="min-height: 400px;flex: 2.5;padding: 20px;padding-right: 0px;">
                
                <div style="border: solid thin #aaa;padding: 10px;background-color: white;">
                    
                    <textarea placeholder="What's on your mind...."></textarea>
                    <input type="submit" id="post" value="Post">
                    <br>
                </div>
                <!-- post area-->
                <div id="post_bar">

                    <div id="posts">
                        <div>
                            <img src="selfie.jpg" style="width: 75px;margin: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #405d9b;">First guy</div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor. Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.
                            </div>
                            
                            <br><br>

                            <a href="">Like</a> .  <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                        </div>
                    </div>


                    <div id="posts">
                        <div>
                            <img src="selfie.jpg" style="width: 75px;margin: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #405d9b;">First guy</div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor. Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.
                            </div>
                            
                            <br><br>

                            <a href="">Like</a> .  <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                        </div>
                    </div>


                    <div id="posts">
                        <div>
                            <img src="selfie.jpg" style="width: 75px;margin: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;color: #405d9b;">First guy</div>
                            <div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor. Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.
                            </div>
                            
                            <br><br>

                            <a href="">Like</a> .  <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
                        </div>
                    </div>
                </div>
                
                
                
            </div>    
        </div>
        

    </div>
 </body>
 </html>