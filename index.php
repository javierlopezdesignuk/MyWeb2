<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javierlopez.design</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php
        include_once("includes/HTML_headers.php");
    ?>

</head>
<body>
    

    <!-- Navigation menu -->
    <?php
        include_once("nav.php")
    ?>
    
    <header id="home">
            <img class="myPic" src="images/mypic.png" alt="mypic">
            <div class="box__header">

                <h1>Javier Lopez<BR>is not a designer.</h1>
                <p>Not just a developer either. Let’s call it a problem solver.<BR>Helping startups define their brand identity and stand out online.</p>
                <a class="primaryButton" href="">Get in touch!</a>
                <!-- <a class="secondaryButton" href="">See my CV</a> -->
                <!-- <img src="" alt="myself"> -->
            </div>
    </header>


<!-- SellArea -->

    <div class="sellarea">
        <div class="container__sellarea">
            <div class="box__sellarea">
                <h2 class="title__sellarea">Your goal doesn't fit just any website</h2>

                    <div class="info__sellarea">
                        <p>Your business is more than just a brand new logotype or a website. 
                            <s>And often we don’t realise how impactful is a a first sight and the 
                            feeling that it provides. That’s why a website built from a <strong>process</strong> 
                            and applied a <strong>tailored solution</strong> will attract the desired leads, 
                            whatever your goal is.<BR><BR>
                            When I say process, I don’t mean just a beautiful 
                            website, although is definitely an important point and might not be 
                            avoided, but we must ensure that the <strong>performance, the best developing 
                            practices and a curated user experience</strong> will be applied to convey nice 
                            looking and bring the leads wanted to</s> your business.</p>
                        <div class="image__sellarea"></div>
                    </div>    
            </div>
        </div>
    </div>

<!-- What I do... -->

    <div id="whatido" class="services">
        <div class="container__services">
            <div class="box__services">
                <h2 class="title__services">What I do!</h2>

                <div class="boxcards__services">
                    <div class="card__services">
                        <div class="img__service"><span class="iconify" data-icon="clarity:design-line" data-flip="horizontal"></span>
</div>
                        <h3>Branding & Graphic design</h3>
                        <p>Your visual identity isn’t just a logotype, it’s a whole system, colours, typography, 
                            iconography, patterns, and the way all together talk by itself. From there, your 
                            clients will have clear who are you as a business.</p>
                    </div>
                    <div class="card__services">
                        <div class="img__service"><span class="iconify" data-icon="icon-park-outline:analysis" data-flip="horizontal"></span>
</div>
                        <h3>Audits & Analysis</h3>
                        <p>Website can’t be just nice and plenty of animations, videos, pics, etc. 
                            The site must have the best perfomance, good developing practices applied 
                            and accesibility so any user can enjoy your services.</p>
                    </div>
                    <div class="card__services">
                        <div class="img__service"><span class="iconify" data-icon="mdi:web" data-flip="horizontal"></span></div>
                        <h3>Web Design & Development</h3>
                        <p>This is the showcase for your business, where all your services, expertise and 
                            communications convey to grab the user attention and bring leads, therefore a 
                            piece of your marketing to look after carefully.</p>
                    </div>
                </div>
  
            </div>
        </div>
    </div>

<!-- My process... -->

<div id="process" class="process">
    <div class="container__process">
        <div class="box__process">
            <h2 class="title__process">My process</h2>
            
            <div class="extra__process">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi ab officia nobis repellat earum perspiciatis magnam quos provident nostrum repellendus.</p>
                <a href="">My process -></a>
            </div>
            
            <div class="boxcards__process">
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="pixelarticons:notes-multiple"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">1</span>
                        <h3>Discovery</h3>
                        <p>With a meeting, we will share your ideas about your business and culture, and find out your goals, set next steps to plan them as a team.</p>
                    </div>
                </div>
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="carbon:event-schedule"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">2</span>
                        <h3>Planning</h3>
                        <p>A deep analysis of the requirements, client goals, target audience, requested features determine scope of the project and </p>
                    </div>
                </div>
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="carbon:document-pdf"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">3</span>
                        <h3>Proposal</h3>
                        <p>Second meeting, where I will bring solutions to our project, establsih the milestones and deliverables. Set tools and the way we will work together.</p>
                    </div>
                </div>
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="icon-park-outline:file-display-one"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">4</span>
                        <h3>Prototyping</h3>
                        <p>The most important stage, I’ll stamp all the information gathered in the meetings, set colours, logos, stylescapes, brand style guides,  also technical services as servers etc.</p>
                    </div>
                </div>
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="carbon:certificate-check"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">5</span>
                        <h3>Review & approval</h3>
                        <p>Last meeting before the development stage, where we will review high fidelity prototpypes and designs until both are satisfied with the outcome. </p>
                    </div>
                </div>
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="carbon:development"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">6</span>
                        <h3>Development</h3>
                        <p>From HTML and CSS to a full backend, everything will be coded or designed in this stage, the longer one. Some content might be requested and needed. </p>
                    </div>
                </div>
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="codicon:open-preview"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">7</span>
                        <h3>Test & Evaluation</h3>
                        <p>Within this stage, a throroughly evaluation will be carried out to ensure the final delivery meets all the requirements and also performance of the site</p>
                    </div>
                </div>
                <div class="card__process">
                    <div class="img__process"><span class="iconify" data-icon="entypo:paper-plane"></span></div>
                    <div class="cardInfo__process">
                        <span class="num__process">8</span>
                        <h3>Take off!!</h3>
                        <p>Congratulations! Our project is done and everything will be ready to get leads for you! Also, any training needed will be provided.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- CASE STUDIES -->

<div id="casestudies" class="cases">
    <div class="container__cases">
        <div class="box__cases">
            <h2 class="title__cases">Case Studies</h2>
                <div class="boxcards__cases">
                    
                    <div class="card__cases">
                        <!-- <img src="images/thefifthtaste.jpg" alt="thefifthtaste project"> -->
                        <div class="img__cases" >
                            <img src="images/thefifthtaste.jpg" alt="">
                        </div>
                        <h3>The Fifth Taste</h3>
                        <ul class="tags__cases">
                            <li>Branding</li>
                            <li>Custom CMS</li>
                            <li>Ecommerce</li>
                            <li>Google Maps API</li>
                            <li>Branding</li>
        
                        </ul>
                        <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                        <a class="linkButton" href="casestudy.php">Open case study ></a>
                    </div>
                    
                    <div class="card__cases">
                        <!-- <img src="images/thefifthtaste.jpg" alt="thefifthtaste project"> -->
                        <div class="img__cases"><img src="images/foxtrk.jpg" alt=""></div>
                        <h3>FoxTrk</h3>
                        <ul class="tags__cases">
                            <li>Branding</li>
                            <li>Custom CMS</li>
                            <li>Ecommerce</li>
                            <li>Google Maps API</li>
                            <li>Branding</li>
                        </ul>
                        <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                        <a class="linkButton" href="">Link to open -></a>
                    </div>
                    
                    <div class="card__cases">
                        <!-- <img src="images/thefifthtaste.jpg" alt="thefifthtaste project"> -->
                        <div class="img__cases"><img src="images/komorebi.jpg" alt=""></div>
                        <h3>Komorebi</h3>
                        <ul class="tags__cases">
                            <li>Branding</li>
                            <li>Custom CMS</li>
                            <li>Ecommerce</li>
                            <li>Google Maps API</li>
                            <li>Branding</li>
                        </ul>
                        <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                        <a class="linkButton" href="">Link to open -></a>
                    </div>
                    
                    <div class="card__cases">
                        <!-- <img src="images/thefifthtaste.jpg" alt="thefifthtaste project"> -->
                        <div class="img__cases"><img src="images/watersofleith.jpg" alt=""></div>
                        <h3>Waters of Leith</h3>
                        <ul class="tags__cases">
                            <li>Branding</li>
                            <li>Custom CMS</li>
                            <li>Ecommerce</li>
                            <li>Google Maps API</li>
                            <li>Branding</li>
                        </ul>
                        <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                        <a class="linkButton" href="">Link to open -></a>
                    </div>

                    <div class="card__cases">
                        <!-- <img src="images/thefifthtaste.jpg" alt="thefifthtaste project"> -->
                        <div class="img__cases"><img src="images/audt.jpg" alt=""></div>
                        <h3>Audt</h3>
                        <ul class="tags__cases">
                            <li>Branding</li>
                            <li>Custom CMS</li>
                            <li>Ecommerce</li>
                            <li>Google Maps API</li>
                            <li>Branding</li>
                        </ul>
                        <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                        <a class="linkButton" href="">Link to open -></a>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- My tools -->
<div class="tools">
    <div class="container__tools">
        <div class="box__tools">
            <h2 class="title__tools">My Tools</h2>
                <div class="boxcards__tools">
                    
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-html"></span></div>
                        <p class="name__tools">HTML5</p>
                    </div>
                    
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-css"></span></div>
                        <p class="name__tools">CSS3</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-sass"></span></div>
                        <p class="name__tools">Sass</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-php3"></span></div>
                        <p class="name__tools">Php</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-python"></span></div>
                        <p class="name__tools">Python</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-js-official"></span></div>
                        <p class="name__tools">Javascript</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="akar-icons:github-fill"></span></div>
                        <p class="name__tools">Github</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-vscode2"></span></div>
                        <p class="name__tools">VSCode</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-mysql"></span></div>
                        <p class="name__tools">MySql</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-docker2"></span></div>
                        <p class="name__tools">Docker</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="grommet-icons:figma"></span></div>
                        <p class="name__tools">Figma</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="logos:trello"></span></div>
                        <p class="name__tools">Trello</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="simple-icons:notion"></span></div>
                        <p class="name__tools">Notion</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-photoshop"></span></div>
                        <p class="name__tools">Photoshop</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><span class="iconify" data-inline="false" data-icon="vscode-icons:file-type-ai"></span></div>
                        <p class="name__tools">Ilustrator</p>
                    </div>
                    <div class="card__tools">
                        <div class="img__tools"><svg class="iconify" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M17.802 8.56s-1.946 6.103-2.105 6.607a4778.8 4778.8 0 0 0-1.484-11.473c-3.316 0-5.089 2.36-6.026 4.851l-2.565 6.637c-.015-.476-.36-6.565-.36-6.565c-.204-3.052-3-4.91-5.262-4.91l2.739 16.6c3.474-.015 5.347-2.361 6.328-4.852c0 0 2.09-5.398 2.176-5.643c.015.23 1.5 10.494 1.5 10.494c3.488 0 5.362-2.202 6.37-4.606L24 3.708c-3.445 0-5.261 2.346-6.198 4.851z" fill="currentColor"/></svg></div>
                        <p class="name__tools">Webflow</p>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- CONTACT -->

<div id="contact" class="contact">
    <div class="container__contact">
        <div class="box__contact">
            <h2 class="title__contact">Let's collaborate!</h2>
                <div class="form__contact" >
                    <form action="" autocomplete="off">
                        <input autocomplete="false" id="hiddeninput" name="name" type="text" style="display:none;">
                        <input autocomplete="false" id="hiddeninput2" name="website" type="text" style="display:none;">

                        <label for="hiddeninput"></label>
                        <div class="inputs__contactform">
                            <h3>Drop me a message</h3>
                            <div class="input__contactform">
                                <input type="text" id="name" name="name" placeholder=" " autocomplete="disabled" required>
                                <label for="name">Name</label>
                            </div>
                            <div class="input__contactform ">
                                <input type="email" id="email" name="email" placeholder=" " autocomplete="disabled" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input__contactform ">
                                <input type="phone" id="phone" name="phone" placeholder=" " autocomplete="disabled" required>
                                <label for="phone">Phone</label>
                            </div>
                            <div class="input__contactform ">
                                <textarea name="message" id="message" cols="30" placeholder=" " rows="3" required></textarea>
                                <label for="message">Let me know about our next project!</label>
                            </div>
                            <div class="input__contactform terms__contactform">
                                <label for="terms">I agree to share my contact details.</label>
                                <input type="checkbox" id="terms" name="terms" autocomplete="disabled" required>
                            </div>
                            <div class="input__contactform ">
                                <button class="primaryButton" name="formSubmit">Get in touch!</button>
                            </div>

                        </div>
                        <div class="emailSuccess">
                            <p>Thanks! I got your request, I'll get in touch soon.</p>
                        </div>



                    </form>



                </div>
                
        </div>
    </div>
</div>

<?php 
    include_once("footer.php")
?>











</body>

<script src="js/js.js"></script>

</html>