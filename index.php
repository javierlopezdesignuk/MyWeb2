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
    <?php
    if(!isset($_COOKIE['cookiesAccepted'])){
    ?>
        <div class="cookies__message">
            <div class="message">
                <h3>Privacy Policy & Cookies</h3>
                <p>We use cookies to serve personalized content and targeted advertisements to you, 
                    which gives you a better browsing experience and lets us analyze site traffic. 
                    Review <a href="cookies.php">our cookie information</a> to learn more.</p>
                    <button class="primaryButton" onclick="createCookie()" class="btn btn-yellow" type="button">Got it!</button>
        
            </div>


        </div>
    <?php
    }
    ?>

    <!-- Navigation menu -->
    <?php
        include_once("nav.php")
    ?>
    
    <header id="home">
        <div class="scrollMessage">
            <img class="scrollWord" src="images/scrollMessage.svg" alt="scroll word">
            <img class="scrollArrow" src="images/arrow.svg" alt="scroll arrow">
        </div>
        <div class="container__header">
            <img class="myPic" src="images/mypic.png" alt="mypic">
            <div class="box__header">

                <h1>Javier Lopez<BR>is not a designer.</h1>
                <p>Not just a developer either. Let’s call it a problem solver. Helping start-ups define their brand identity and stand out online.</p>
                <a class="primaryButton" href="index.php#contact">Get in touch!</a>
                <!-- <a class="secondaryButton" href="">See my CV</a> -->
                <!-- <img src="" alt="myself"> -->
            </div>
        </div>
    </header>


<!-- SellArea -->

    <div class="sellarea">
        <div class="container__sellarea">
            <div class="box__sellarea">
                <h2 class="title__sellarea">Your goal doesn't fit just any website</h2>

                <div class="info__sellarea">
                    <p>Your business is more than just a brand new logotype or a website. 
                        <s>And often we don’t realise how impactful is at a first sight and the 
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
                        <p>Websites can’t be just nice and plenty of animations, videos, pics, etc. 
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
            <!-- <div class="scrollMessage">
                <img class="scrollWord" src="images/scrollMessage.svg" alt="scroll word">
                <img class="scrollArrow" src="images/arrow.svg" alt="scroll arrow">
            </div> -->
            <h2 class="title__process">My process</h2>
            
            <div class="extra__process">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi ab officia nobis repellat earum perspiciatis magnam quos provident nostrum repellendus.</p>
                <a href="">My process -></a>
            </div>
            
            <div id="boxcards__process__horizontalScroll" class="boxcards__process">
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
                        <div class="img__cases">
                            <img class="backImage__cases" src="images/thefifthtaste.jpg" alt="">
                            <img class="logo__cases" src="images/t5t/logo-t5t.svg" alt="thefifthtaste logo">
                        </div>
                        <div class="info__cases">
                            <div class="qrMessage__cases">
                                <img src="images/qr-thefifthtaste.svg" alt="">
                                <img class="mobileMessage" src="images/mobileMessage.svg" alt="mobile message">
                            </div>
                            <div class="infocase__cases">
                                <h3>The Fifth Taste</h3>
                                <ul class="tags__cases">
                                    <li>Branding</li>
                                    <li>Web development</li>
                                    <li>Ecommerce</li>
                                    <li>Custom CMS</li>
                                    <li>Google Maps API</li>
                                    <li>SEO</li>
                
                                </ul>
                                <p class="textCard__cases">A homey kitchen company running in Edinburgh, tasty food from Spain, a multi-awarded 
                                                            chef who needed to have her brand and website the core of the business showing her 
                                                            thoughts and expertise.</p>
                                <a class="linkButton" href="casestudy.php?case=thefifthtaste">Open case study</a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="workInProgress">
                        <span class="iconify" data-icon="feather:alert-triangle"></span> 
                        <h3>Work in progress...</h3>
                        <p>Apologies, I'm working hard to showcase my work, and will be available soon. Meantime, don't hesitate to 
                            <a href="index.php#contact">get in touch</a>
                            if you have any inquiries.</p>
                        
                        <!-- <p>I'm currently working on getting ready more case studies to showcase, 
                            apologies, and <a href="index.php#contact">get in touch</a> with any 
                            question.  </p> -->
                    </div>


                    <!-- <div class="card__cases">
                        <div class="img__cases"><img src="images/foxtrk.jpg" alt=""></div>
                        <div class="info__cases">
                            <div class="qrMessage__cases">
                                <img src="images/qr-foxtrk.svg" alt="">
                                <img class="mobileMessage" src="images/mobileMessage.svg" alt="mobile message">

                            </div>
                            <div class="infocase__cases">
                                <h3>FoxTrk</h3>
                                <ul class="tags__cases">
                                    <li>Branding</li>
                                    <li>Web Development</li>
                                    <li>PHP</li>
                                    <li>MySQL</li>
                                    <li>Charts.js</li>

                                </ul>
                                <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                                <a class="linkButton" href="casestudy.php?case=foxtrk">Link to open</a>
                            </div>
                        </div>

                    </div>
                    
                    <div class="card__cases">
                        <div class="img__cases"><img src="images/komorebi.jpg" alt=""></div>
                        <div class="info__cases">
                            <div class="qrMessage__cases">

                            </div>
                            <div class="infocase__cases">
                                <h3>Komorebi</h3>
                                <ul class="tags__cases">
                                    <li>Branding</li>
                                </ul>
                                <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                                <a class="linkButton" href="casestudy.php?case=komorebi">Link to open</a>
                            </div>
                        </div>

                    </div>
                    
                    <div class="card__cases">
                        <div class="img__cases"><img src="images/watersofleith.jpg" alt=""></div>
                        <div class="info__cases">
                            <div class="qrMessage__cases">
                                <img src="images/qr-watersofleith.svg" alt="">
                                <img class="mobileMessage" src="images/mobileMessage.svg" alt="mobile message">

                            </div>
                            <div class="infocase__cases">
                                <h3>Waters of Leith</h3>
                                <ul class="tags__cases">
                                    <li>Branding</li>
                                    <li>Landing Page</li>
                                </ul>
                                <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                                <a class="linkButton" href="casestudy.php?case=watersofleith">Link to open</a>
                            </div>
                        </div>

                    </div>

                    <div class="card__cases">
                        <div class="img__cases"><img src="images/audt.jpg" alt=""></div>
                        <div class="info__cases">
                            <div class="qrMessage__cases">
                                <img src="images/qr-classymassage.svg" alt="">
                                <img class="mobileMessage" src="images/mobileMessage.svg" alt="mobile message">

                            </div>
                            <div class="infocase__cases">
                                <h3>Audt</h3>
                                <ul class="tags__cases">
                                    <li>Branding</li>
                                    <li>Web Development</li>
                                    <li>Python</li>
                                    <li>SQLite</li>
                                    <li>Google Lighthouse</li>
                                </ul>
                                <p class="textCard__cases">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum numquam perspiciatis nulla perferendis neque veritatis autem, qui ullam fuga recusandae?</p>
                                <a class="linkButton" href="casestudy.php?case=audt">Link to open</a>
                            </div>
                        </div>

                    </div> -->
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
                <div class="form__contact">
                    
                        <div class="info__contact">
                            <div class="address__contactform">
                                <!-- <h3>Javier Lopez</h3> -->
                                <span class="iconify icon__contactform" data-icon="el:map-marker" data-inline="false"></span> 
                                <p>
                                    <!-- 290 Main st. -->
                                    FK1 2QA
                                    <BR> Falkirk
                                    <BR> Scotland
                                </p>
                            </div>
                            <div class="sociallinks__contact">
                                <a href="tel:+447963772339">
                                    <svg class="iconify" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M9 2h6a3 3 0 0 1 3 3v14a3 3 0 0 1-3 3H9a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zm0 2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H9zm3 15a1 1 0 1 1 0-2a1 1 0 0 1 0 2z" fill="currentColor"/></svg>
                                    <p class="detail__contact">+44 7963 772 339</p>
                                </a>    
                                <a href="mailto:hello@javierlopez.design" target="_blank" >
                                    <svg class="iconify" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8s8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5s2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47c.65.89 1.77 1.47 2.96 1.47c1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3s-1.34 3-3 3z" fill="currentColor"/></svg>
                                    <p class="detail__contact">hello@javierlopez.design</p>
                                </a>    
                                <a href="https://www.instagram.com/javierlopez.design" target="_blank" rel="noreferrer">
                                    <svg class="iconify" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248a4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008a3.004 3.004 0 0 1 0 6.008z" fill="currentColor"/><circle cx="16.806" cy="7.207" r="1.078" fill="currentColor"/><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42a4.6 4.6 0 0 0-2.633 2.632a6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71c0 2.442 0 2.753.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632a6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419a4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186c.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688a2.987 2.987 0 0 1-1.712 1.711a4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055c-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311a2.985 2.985 0 0 1-1.719-1.711a5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654c0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311a2.991 2.991 0 0 1 1.712 1.712a5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655c0 2.436 0 2.698-.043 3.654h-.011z" fill="currentColor"/></svg>
                                    <p class="detail__contact">@javierlopez.design</p>
                                </a>    
                                <a href="https://www.linkedin.com/in/javier-lopez-gonzalez-a094262b" target="_blank" rel="noreferrer">
                                    <svg class="iconify" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096a1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277c-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387c2.704 0 3.203 1.778 3.203 4.092v4.71z" fill="currentColor"/></svg>                
                                    <p class="detail__contact">@javierlopez</p>
                                </a>    
                            </div>
                        </div>
                        
                        <div class="inputs__contactform">
                            <div id="feedback__contact" class="emailSuccess">
                                <p>Thanks! I got your request, I'll get in touch soon.</p>
                            </div>
                            <form action="" id="form" method="POST" autocomplete="off">
                                <input autocomplete="false" id="hiddeninput" name="name" type="text" style="display:none;">
                                <input autocomplete="false" id="hiddeninput2" name="website" type="text" style="display:none;">
                                
                                <label for="hiddeninput"></label>
                                <label for="hiddeninput2"></label>
                                
                                
                                <h3>Drop me a message</h3>
                                <div class="input__contactform">
                                    <input type="text" id="name" name="name" placeholder=" " autocomplete="disabled" required>
                                    <label for="name">Name</label>
                                </div>
                                <div class="input__contactform ">
                                    <input type="text" id="email" name="email" placeholder=" " autocomplete="disabled" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input__contactform ">
                                    <input type="phone" id="phone" name="phone" placeholder=" " autocomplete="disabled" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" required >
                                    <!--  -->
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
                                    <button class="primaryButton" type="submit" name="formSubmit">Get in touch!</button>
                                </div>
                            </form>
                                
                        </div>






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