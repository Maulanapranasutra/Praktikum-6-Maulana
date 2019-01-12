<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body{
      background-image: url('hero.jpg');
    }
    h1{

      color: black;
      text-align: center;
    }
    form {
        border: 3px solid #f1f1f1;
    }
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    button:hover {
        opacity: 0.8;
    }
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        margin-right: 950px;
        background-color: #f44336;
    }
    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div class="" id="form">
      <form class="" action="login.php" method="post">
        <h1>L O G I N</h1>

        <p>
          <label for="nis"> NIS :</label>
          <input type="text" name="nis" value="">
        </p>
        <p>
          <label for="password">PASS :</label>
          <input type="password" name="password" value="">
        </p>
        <p>
          <div class="sign">
            <button type="submit">LOGIN</button>
          </div>
        </p>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>

      </form>

    </div>
  </body>
</html>
