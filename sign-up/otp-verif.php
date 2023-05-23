<?php
session_start();
$email = $_SESSION['email'];
var_dump($email);
if($email == false){
  header('Location: sign-up.php');
} else {
  $to = $email;
  $subject = "OTP Code - The3dToyBox";
  $message = 'Your OTP Code is 11111';
  $headers = 'From: support@the3dtoybox.com';

  // Send email
   if (!mail($to, $subject, $message, $headers)) {
     header("Location: ../index.php?error=Failed to send email verification code");
     exit();
   }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Verification</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Overpass&display=swap");

      :root {
        --grain: #d7cec7;
        --blackboard: #565656;
        --oxblood: #76323f;
        --tan: #c09f80;
        --banana: rgb(252, 239, 169);
        --light-gray: rgb(233, 233, 233);
        --gray: rgb(212, 212, 212);
      }

      ::selection {
        background-color: gold;
      }

      html {
        height: 100vh;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Overpass", sans-serif;
        font-size: 1.04rem;
      }

      h1 {
        font-family: "Josefin Sans", sans-serif;
        text-transform: uppercase;
        font-size: 1.5rem;
        margin-bottom: 1rem;
      }

      i {
        color: var(--blackboard);
      }

      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        padding-inline: 1rem;
      }

      body::before {
        content: "";
        background: url("https://media.discordapp.net/attachments/1085644871508971680/1097570295260389407/terryc_toys_doodle_style_yellow_8019458a-59bf-4e82-860d-49cb6ee8ac0c.png?width=677&height=677");
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        z-index: -999;
      }

      button {
        color: #fff;
        background-color: #ffd700;
        padding: 10px 10px;
        border: solid #ffd700 1px;
        box-shadow: rgb(0, 0, 0) 0px 0px 0px 0px;
        border-radius: 12px;
        transition: 375ms;
        display: flex;
        flex-direction: row;
        align-items: center;
        cursor: pointer;
      }

      button:hover {
        transition: 375ms;
        padding: 7px 12px;
        background-color: #fff;
        color: #ffd700;
        border: solid 1px #ffd700;
      }

      input {
        display: flex;
        width: 100%;
        border-radius: 5px;
        padding: 0.5rem;
        border: solid 1px var(--gray);
        outline: none;
        transition: box-shadow 0.25s;
        margin-bottom: 1rem;
      }

      input:focus {
        box-shadow: 0 0 2px var(--banana);
        border: 1px solid gold;
      }

      input::placeholder {
        color: rgb(94, 94, 94);
      }

      main {
        border-radius: 10px;
        border: 1px solid var(--light-gray);
        text-align: center;
        background-color: white;
        padding: 2rem;
        max-width: 400px;
        box-shadow: 10px 10px 11px -5px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 10px 10px 11px -5px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 10px 10px 11px -5px rgba(0, 0, 0, 0.3);
      }

      .error,
      .success {
        padding: 5px;
        text-align: center;
        border-radius: 5px;
        margin-bottom: 0.5rem;
      }

      .error {
        display: none;
        background-color: crimson;
        color: darkred;
      }

      .success {
        background-color: lightgreen;
        color: green;
      }

      .submit-code {
        width: 200px;
        justify-content: center;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <main>
      <h1>OTP Verification</h1>
      <div class="error">Error Text</div>
      <div class="success">
        We've sent a verification code to your email (<?php echo $email ?>)
      </div>
      <form action="" method="post">
        <input type="text" placeholder="Enter verification code" />
        <button type="submit" class="submit-code">Submit</button>
      </form>
    </main>
  </body>
</html>