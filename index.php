<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javierlopez.design</title>

    <?php
        include_once("includes/HTML_headers.php");
    ?>


</head>
<body>
    
    <nav>
        <div class="navigation">
            <img class="logo__nav" src="images/logo.svg" alt="My Logo">
            <div class="menu__nav">menu</div>
        </div>
        <div id="themeToggle">🌞</div>

        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#casestudies">Case studies</a></li>
            <li><a href="#contact">Get in touch!</a></li>
        </ul>
    </nav>
    
    <header>
        <div class="container__header">
            <div class="box__header">

                <h1>Javier Lopez<BR>is not a designer.</h1>
                <p>Not just a developer either. Let’s call it a problem solver.<BR>Helping startups define their brand identity and stand out online.</p>
                <a class="primaryButton" href="">Get in touch!</a>
                <a class="secondaryButton" href="">See my CV</a>
                <!-- <img src="" alt="myself"> -->
            </div>
            <img class="myPic" src="images/mypic.png" alt="mypic">
        </div>
    </header>



</body>
<script>
const toggle = document.querySelector("#themeToggle");
toggle.addEventListener("click", modeSwitch);

let isLight = true;

function modeSwitch() {
  isLight = !isLight;
  isLight ? toggle.innerText = "🌞" : toggle.innerText = "🌚";
  var rootElement = document.body;
  rootElement.classList.toggle("lightMode");
}

</script>
</html>