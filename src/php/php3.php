  <?php
    session_start();
    if (isset($_POST['save'])) {
        $email = $_POST['email'];
        $password = $_POST['pw'];
        if ($email == "leangsoklim23@gmail.com" && $password = 123) {
            header("Location: ../dashboad/WeddingPage.php");
            $_SESSION['user'] = "123";
        }
    }
    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login Form</title>
      <style>
          * {
              box-sizing: border-box;
              margin: 0;
              padding: 0;
              font-family: 'Arial', sans-serif;
          }

          body {
              background-color: #fcdede;
              display: flex;
              justify-content: center;
              align-items: center;
              min-height: 100vh;
          }

          .container {
              display: flex;
              width: 900px;
              max-width: 90%;
              background-color: #fff;
              border-radius: 20px;
              overflow: hidden;
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
          }

          .left {
              flex: 1;
              background-color: #f9c2c2;
          }

          .left img {
              width: 100%;
              height: 100%;
              object-fit: cover;
          }

          .right {
              flex: 1;
              padding: 50px 40px;
          }

          .right h2 {
              color: #f96b6b;
              font-size: 28px;
              font-weight: bold;
              text-align: center;
              margin-bottom: 40px;
          }

          .form-group {
              margin-bottom: 20px;
          }

          .form-group label {
              display: block;
              margin-bottom: 6px;
              font-weight: bold;
              color: #555;
          }

          .form-group input {
              width: 100%;
              padding: 12px;
              border-radius: 8px;
              border: 1px solid #ccc;
              font-size: 16px;
          }

          .forgot {
              text-align: right;
              font-size: 12px;
              color: #f96b6b;
              text-decoration: none;
              display: block;
              margin-top: 5px;
          }

          .forgot:hover {
              text-decoration: underline;
          }

          .btn-login {
              width: 100%;
              padding: 12px;
              background-color: #f96b6b;
              color: #fff;
              font-size: 16px;
              font-weight: bold;
              border: none;
              border-radius: 8px;
              cursor: pointer;
              margin-top: 20px;
          }

          .btn-login:hover {
              background-color: #f85c5c;
          }

          .divider {
              display: flex;
              align-items: center;
              text-align: center;
              margin: 25px 0;
              color: #999;
              font-size: 14px;
          }

          .divider::before,
          .divider::after {
              content: '';
              flex: 1;
              border-bottom: 1px solid #ccc;
          }

          .divider:not(:empty)::before {
              margin-right: .5em;
          }

          .divider:not(:empty)::after {
              margin-left: .5em;
          }

          .socials {
              display: flex;
              justify-content: center;
              gap: 15px;
          }

          .socials button {
              border: 1px solid #ccc;
              padding: 10px;
              border-radius: 8px;
              cursor: pointer;
              background-color: #fff;
          }

          .socials img {
              width: 20px;
              height: 20px;
          }

          .footer {
              text-align: center;
              margin-top: 25px;
              font-size: 12px;
              color: #777;
          }

          /* Responsive */
          @media (max-width: 768px) {
              .container {
                  flex-direction: column;
              }

              .left {
                  display: none;
              }
          }
      </style>
  </head>

  <body>
      <div class="container">
          <div class="left">
              <img src="../assets/images/p6.png" alt="">
          </div>

          <div class="right">
              <h2>Login</h2>

              <form action="php3.php" method="post">
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" placeholder="Enter your email" required>
                  </div>

                  <div class="form-group">
                      <label for="password">Password</label>
                      <input name="pw" type="password" id="password" placeholder="Enter your password" required>
                      <a href="#" class="forgot">Forgot password?</a>
                  </div>

                  <button type="submit" name="save" class="btn-login">Log in</button>
              </form>

              <div class="divider">or continue with</div>

              <!-- <div class="socials">
                <button><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google"></button>
                <button><img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook"></button>
                <button><img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple"></button>
            </div> -->

              <div class="footer">
                  presented by <strong>M</strong>
              </div>
          </div>
      </div>


  </body>

  </html>