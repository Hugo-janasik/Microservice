<!-- ***********
Create by Hugo Janasik
Intern Developer
VMware
************ -->

<?php
	$ip = getenv("tito_ip");
?>

<html>
    <style>
        .button-reset {
            padding: 15px 32px;
            cursor: pointer;
            color: black;
            background-color: transparent;
            border: 2px solid black;
            border-radius: 8px;
            transition-duration: 0.4s;
        }

        .button-reset:hover {
            background-color: #FD9330;
            color: white;
        }
        .button-ret {
            border-radius: 8px;
            color: black;
            border: 2px solid black;
            background-color: transparent;
            padding: 15px 32px;
            cursor: pointer;
            transition-duration: 0.4s;
            position: fixed;
            top: 90%;
        } 
          
        .button-ret:hover {
            background-color: black;
            color: white;
        }
    </style>

<body style="background: linear-gradient(to bottom, #FFF8C8, #FFD07E);">

    <form method="POST" action="/refresh">
        <input class="button-reset" type="submit" value="Reset" style="position: fixed; margin-left: 43%; top: 45%;" onclick="var timer = setTimeout(function() { window.location='http://<?php $ip?>' }, 2000);">
    </form>
</body>
    <form action="http://<?php $ip?>">
        <input type="submit" value="Return" class="button-ret">
    </form>

</html>
