<?php require_once('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head style="margin-top: 300px;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Portfolio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: violet;
            color: #333;
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
            background-color: green;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color:black ;
        }

        /* p {
            line-height: 1.6;
            color: #555;
        } */

        .project {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Developer Forest</h1>
        <p>Web Developer | Designer</p>
    </header>

    <section>
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo id libero bibendum consequat. Vestibulum ultricies vestibulum velit, eu ultrices turpis venenatis nec.</p>
    </section>

    <section>
        <h2>Projects</h2>
        <div class="project">
            <h3>Project 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo id libero bibendum consequat.</p>
        </div>

        <div class="project">
            <h3>Project 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo id libero bibendum consequat.</p>
        </div>
        <!-- Add more projects here -->
    </section>

    <section>
        <h2>Skills</h2>
        <p>HTML, CSS, JavaScript, React, etc.</p>
    </section>
    <?php require_once('footer.php') ?>