<?php


if ($_GET['case']== 'thefifthtaste'){
    
    $tags = "                                       
        <li>Branding</li>
        <li>Web development</li>
        <li>Ecommerce</li>
        <li>Custom CMS</li>
        <li>Google Maps API</li>
        <li>SEO</li>";
    
    $title = "The Fifth Taste";

    $tagline = "A homey kitchen company running in Edinburgh, tasty food from Spain, a multi-awarded 
                chef who needed to have her brand and website the core of the business showing her 
                thoughts and expertise.";

    $challenges = "Move all the shop that previously was running on Shopify and build everything tailored and SEO added.
                    Build a CMS easy to work with but fulfilling her needs.";

    $goals = "Long project moving whole shop from Shopify and condense an ecommerce website with a blog, adding a fully customized CMS where the client needs to manage the business.";

    $img_header = "images/t5t/mockupt5t.jpg";
    
    $brief = "The Fifth Taste, previously named VanesaSpanishFood, was running her business on Shopify, and felt that the platform wasn't 
            enough for her project. She wanted a shop but also her own place to share her thoughts, experiences, travels and 
            some recipes.</p>
            <BR>
            <p>After the first meeting some issues with the brand were spotted, she needed to
             communicate her feelings and value. Build her brand style full of meaning with what 
             she wanted.";
    
    $img_brief1 = "images/t5t/branding-t5t.png";
    $img_brief2 = "images/t5t/logo-t5t.svg";  

    $problems = "This project had been planned with several stages, rebrand, copy, website, ecommerce, blog and online classes.
                </p><BR><p>
                Hands on, carried out a deep research in some Shopify chef shops and study the competence, 
                services, sales, carts, checkouts, etc. Some meetings were needed to set the users profiles, sitemap and 
                get the brand style approbed to start with wireframes and prototypes.
                </p><BR><p>
                Some stages and milestones were delayed because the all the copy had to be checked, and the scope had been extended due 
                to the development ";
    
    $img_problem = "images/t5t/wireframing.jpg";

    $solutions = "This project has taken around 8 months to be completed, one of the right decissions was to settle the brand
                    styles in early stages, because everything built from then kept the client essence.  ";
    
    
    $img_solution2= "images/t5t/leather-folder.jpg";
    $img_solution1= "images/t5t/mockup-order.jpg";

    $conclusion = "The project";

    $img_conclusion = "images/t5t/mockup-admin.jpg";

    $pic1_examples_conclusion = "images/t5t/logo-responsiveness.png";
    $pic2_examples_conclusion = "images/t5t/mockup-cart.jpg";
    $pic3_examples_conclusion = "images/t5t/mockup-classes.jpg";

    $nextProjectLink = "casestudy.php?case=foxtrk";

    $nextProjectName = "FoxTrk";

}

if ($_GET['case'] == 'foxtrk'){
    
    $tags = "   <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>";
    
    $title = "FoxTrk";

    $tagline = "";

    $challenges = "";

    $goals = "";

    $brief = "";

    $problems = "";
    
    $conclusion = "";

    $nextProjectLink = "casestudy.php?case=komorebi";

    $nextProjectName = "Komorebi";

}
if ($_GET['case'] == 'komorebi'){
    
    $tags = "   <li>Branding</li>
                <li></li>
                ";
    
    $title = "Komorebi";

    $tagline = "";

    $challenges = "";

    $goals = "";

    $brief = "";

    $problems = "";
    
    $conclusion = "";

    $nextProjectLink = "casestudy.php?case=watersofleith";

    $nextProjectName = "Waters of Leith";

}

if ($_GET['case'] == 'watersofleith'){
    
    $tags = "   <li>Branding</li>
                <li>Landing page</li>
                <li>Uni project</li>

                ";
    
    $title = "Waters of Leith";

    $tagline = "";

    $challenges = "";

    $goals = "";

    $brief = "";

    $problems = "";
    
    $conclusion = "";

    $nextProjectLink = "casestudy.php?case=audt";

    $nextProjectName = "Audt";

}

if ($_GET['case'] == 'audt'){
    
    $tags = "   <li>Branding</li>
                <li>Web Development</li>
                <li>Python</li>
                <li>Flask</li>
                <li>API</li>
                <li>SQLite</li>
                <li>Google Lighthouse</li>
                <li>Uni project</li>
                ";
    
    $title = "Audt";

    $tagline = "";

    $challenges = "";

    $goals = "";

    $brief = "";

    $problems = "";
    
    $conclusion = "";

    $nextProjectLink = "casestudy.php?case=thefifthtaste";

    $nextProjectName = "The Fifth Taste";

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javierlopez.design - Case Study</title>
    <?php
        include_once("includes/HTML_headers.php");
    ?>


</head>
<body>

<!-- Navigation menu -->
    <?php
        include_once("nav.php");
    ?>

    <div class="header__casestudy">
        <div class="tags__header">
            <ul>
                <?php echo $tags;?>
            </ul>
        </div>
        <h1 class="title__casestudy"><?php echo $title;?></h1>
        <p class="tagline__casestudy"><?php echo $tagline;?></p>
    </div>

    <div class="box__goals__casestudy">
        <div class="challenges__casestudy">
            <h2>Challenges</h2>
            <p><?php echo $challenges;?></p>
        </div>
        <br>
        <div class="goals__casestudy">
            <h2>Goals</h2>
            <p><?php echo $goals;?></p>
        </div>
    </div>

    <div class="firstimage__casestudy">
        <img src="<?php echo $img_header;?>" alt="">
    </div>
   
    <div class="brief__casestudy">
        <h3>Brief</h3>
        <p><?php echo $brief;?></p>
    </div>
    
    <div class="imgBox__brief__casestudy">
        <!-- <div class="pic__brief__casestudy"> -->
            <img class="pic1__brief__casestudy" src="<?php echo $img_brief1;?>" alt="">
        <!-- </div> -->
        <!-- <div class="pic2__brief__casestudy"> -->
            <img class="pic2__brief__casestudy" src="<?php echo $img_brief2;?>" alt="">
        <!-- </div> -->
    </div>

    <div class="problems__casestudy">
        <h3>Problems</h3>
        <p><?php echo $problems;?></p>
    </div>

    <div class="box__solution__casestudy">
        <div class="img__problem__casestudy">
            <img class="pic__problem__casestudy" src="<?php echo $img_problem;?>" alt="">
        </div>
        <div class="solution__casestudy">
            <h3>Solutions</h3>
            <p><?php echo $solutions;?></p>
        </div>
    </div>

    <div class="imgBox__solution__casestudy">
        <div class="pic__solution__casestudy">
            <img class="pic__solution__casestudy" src="<?php echo $img_solution1;?>" alt="">
        </div>
        <div class="pic2__solution__casestudy">
            <img class="pic2__solution__casestudy" src="<?php echo $img_solution2;?>" alt="">
        </div>
    </div>

    <div class="conclusion__casestudy">
        <div class="img__conclusion__casestudy">
            <img src="<?php echo $img_conclusion;?>" alt="">
        </div>
        <div class="info__conclusion__casestudy">
            <h3>Conclusions & Challenges</h3>
            <p><?php echo $conclusion;?></p>
        </div>
    </div>

    <div class="imgBox__examples__casestudy">
        <div class="pic1__examples__casestudy">
            <img  src="<?php echo $pic1_examples_conclusion;?>" alt="">    
        </div>
        <div class="pic2__examples__casestudy">
            <img  src="<?php echo $pic2_examples_conclusion;?>" alt="">
        </div>

        <div class="pic3__examples__casestudy">
            <img src="<?php echo $pic3_examples_conclusion;?>" alt="">
        </div>
    </div>

    <!-- <div class="next__casestudy">
        <a href="<?php echo $nextProjectLink;?>" class="nextlink__casestudy">next project
        <span class="iconify" data-icon="bi:arrow-right-short"></span>

  <?php echo $nextProjectName;?></a> -->
    </div>


    <?php 
        include_once("footer.php")
    ?>




</body>

<script src="js/js.js"></script>

</html>