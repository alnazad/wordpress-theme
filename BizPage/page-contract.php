<?php require_once('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: goldenrod;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
            padding-top: 103px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            color: black;
            background-color: whitesmoke;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: black;
        }

        p {
            line-height: 1.6;
            color: black;
        }
    </style>
</head>
<body>

    <header>
        <h1>Contract Page</h1>
    </header>

    <section>
        <h2>Contract Terms and Conditions</h2>
        <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Road#2,Kazi Office Bazar <br>
              Shyamoli, Dhaka<br>
              Bangladesh <br>
              <strong>Phone:</strong> +088 01580331370<br>
              <strong>Email:</strong> abdullahalnazad850@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <img src="<?php echo esc_url( get_theme_mod( 'n_logo' ) ); ?>" alt="Product 1" max-width="150" max-height="100">
            
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>
        <!-- Add more contract details here -->
    </section>
    <?php require_once('footer.php') ?>