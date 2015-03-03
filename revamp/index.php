<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-touch-icon-120x120.png">
  <link rel="icon" type="image/png" href="/assets/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/assets/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/assets/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="stylesheets/main.css">
  <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
  <div class="container">
    <header>
      <img class="me" src="https://avatars3.githubusercontent.com/u/4985101?v=3&amps=460" alt="">
      <span class="hamburger" onclick="toggle()">&#9776;</span>
      <ul class="links">
        <a href="#contact"><li>Contact</li></a>
      	<a href="#project"><li>Projects</li></a>
      	<a href="#blog"><li>Blog</li></a>
      </ul>
      <ul id="mobile-menu" style="display: none;">
        <a onclick="toggle()" href="#contact"><li>Contact</li></a>
      	<a onclick="toggle()" href="#project"><li>Projects</li></a>
      	<a onclick="toggle()" href="#blog"><li>Blog</li></a>
      </ul>
    </header>
    <img class="background-image" src="assets/san-franc.jpg" alt="">
    <section class="projects">
      <h2 id="project">Projects</h2>
      <a href="https://play.google.com/store/apps/details?id=com.beer_me" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/beerme.png" alt="">
          </div>
          <div class="description">
            <h1>BeerMe!</h1>
            <span class="date">
              02.06.2015
            </span><br/>
            <span class="text">
              BeerMe is a mobile app built on a Rails API with and AngularJs frontend. BeerMe searches local bay area bars for their beers on tap and returns beer names, prices, and BeerAdvocate score.
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="http://rounderwear.com/" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/rounderwear-logo.jpg" alt="">
          </div>
          <div class="description">
            <h1>Rounderwear</h1>
            <span class="date">
              07.20.2014
            </span><br/>
            <span class="text">
              Rounderwear is a multi-lingual designer underwear site. Rounderwear is built on top of a Magento ecommerce
             platform. Using PHP, CSS 3, HTML 5 and jQuery, I overhauled the front and backend to add new
            features and a fresh look for desktop and mobile. 
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="http://www.vertigousa.com/" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/vert-ref-logo.png" alt="">
          </div>
          <div class="description">
            <h1>VeritgoUSA </h1>
            <span class="date">
             03.15.2014
            </span><br/>
            <span class="text">
              Vertigo USA was built on a 3dcart e-commerce platform with an integrated wordpress blog. Using
              PHP, HTML 5, CSS 3, jQuery, and AJAX, I added a single page shopping experience with a updated look
            </span>
          </div>
          <div class="clear"></div>
        </article>
        <div class="clear"></div>
      </a>
      <a href="http://www.kryptonics.com/" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/static1.squarespace.jpg" alt="">
          </div>
          <div class="description">
            <h1>Kryptonics Wheels</h1>
            <span class="date">
              04.20.2014
            </span><br/>
            <span class="text">
              Created C-name records to redirect the name servers to Squarespace. 
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="http://thehundreds.com/" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/the_hundreds.jpg" alt="">
          </div>
          <div class="description">
            <h1>The Hundreds</h1>
            <span class="date">
            </span><br/>
            <span class="text">
            I handcrafted responsive HTML email templates to keep customers informed about featured stories and new
            products.
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="http://enve.com/" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/enve-logo.jpg" alt="">
          </div>
          <div class="description">
            <h1>Enve</h1>
            <span class="date">
            </span><br/>
            <span class="text">
              I created a style guide of common elements coupled with design guidelines. To ensure a seamless transition, I
                            set up 301 redirects for outdated links to their proper pages.
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <div class="clear"></div>
    </section>
    <div class="clear"></div>
    <section class="blog">
      <h2 id="blog">Blog</h2>
      <a href="" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/code.png" alt="">
          </div>
          <div class="description">
            <h1>Title 1</h1>
            <span class="date">
              09.13.1985
            </span><br/>
            <span class="text">
              This is a sample project that i did a while ago and hrere is a little bs about what i did for it. Yay?!
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/connect.png" alt="">
          </div>
          <div class="description">
            <h1>Title 1</h1>
            <span class="date">
              09.13.1985
            </span><br/>
            <span class="text">
              This is a sample project that i did a while ago and hrere is a little bs about what i did for it. Yay?!
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/github.png" alt="">
          </div>
          <div class="description">
            <h1>Title 1</h1>
            <span class="date">
              09.13.1985
            </span><br/>
            <span class="text">
              This is a sample project that i did a while ago and hrere is a little bs about what i did for it. Yay?!
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/code.png" alt="">
          </div>
          <div class="description">
            <h1>Title 1</h1>
            <span class="date">
              09.13.1985
            </span><br/>
            <span class="text">
              This is a sample project that i did a while ago and hrere is a little bs about what i did for it. Yay?!
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/github.png" alt="">
          </div>
          <div class="description">
            <h1>Title 1</h1>
            <span class="date">
              09.13.1985
            </span><br/>
            <span class="text">
              This is a sample project that i did a while ago and hrere is a little bs about what i did for it. Yay?!
            </span>
          </div>
          <div class="clear"></div>
        </article>
      </a>
      <a href="" target="_blank" >
        <article>
          <div class="type-container">
            <img src="assets/connect.png" alt="">
          </div>
          <div class="description">
            <h1>Title 1</h1>
            <span class="date">
              09.13.1985
            </span><br/>
            <span class="text">
              This is a sample project that i did a while ago and hrere is a little bs about what i did for it. Yay?!
            </span>
          </div>
          <div class="clear"></div>
        </article>
        <div class="clear"></div>
      </a>
      <div class="clear"></div>
    </section>
    <section class="contact_me">

  <?php 
      // validate the emailinputs
      if ($_SERVER["REQUEST_METHOD"] = 'POST') {
      
          $errors = array();  // initialize errror array

          // check the form input 
          // and make a spam scubber 
          
          function spam_scrubber($value) {

            $very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 
              'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:'
            );
            
            // if any of the bad things are in the submission return them as empty values
            foreach ($very_bad as $v) {
              if (stripos($value, $v) !== false) return '';
            }

            // replace any newline characters with spaces
            $value = str_replace(array( "\r", "\n", "%od"), ' ', $value);

            // return the value 
            return trim($value);
                  
          } // end of spam scrubber function 

          // clean the form data 
          $scurbbed = array_map('spam_scrubber', $_POST);

          // minimal form validation
          if (!empty($scrubbed['subject']) && !empty($scrubbed['reply_email']) && !empty($scrubbed['content']) ) {

            // creat the body of the email
            $body = "Subject: {$scubbed['subject']}\n\n
                    Comments: {$scubbed['content']}";

            // make the email no longer than 70 chars wide
            $body = wordwrap($body, 70);

            // send the email 
            mail('seanmarman@gmail.com', 
                "Contact form submission",
                $body,
                "From: {$scrubbed['reply_email']}"
            );

            // print a nice thank you message
            echo "<p>Thank you for contacting me. I will get back to you as soon as possible!</p>";

            // clear the post so the form isnt sticky
            $_POST = array();

          } else {
            echo '<p style="font-weight: bold; color:#c00">Please Fill out the form completely</p>';
          }
          
      }
  ?>

      <h2 id="contact">Contact Me</h2>
      <div class="form_container">
        <form action="index.php" method="post">
          <input class="form_subject" type="text" placeholder="Subject..." name="subject" value="" >
          <input class="form_email" type="email" placeholder="Your Email Address..." name="reply_email" value="">
          <textarea id="contact_text" placeholder="What can I do for you?" name="content" ></textarea>
          <input type="submit">
        </form>
        <form class="resume_link" method="get" action="assets/SeanMarmanResume.pdf"> 
        <!-- <a class="resume_link" href="assets/SeanMarmanResume.pdf" target"_blank"="">My Resume</a>-->
          <button type="submit">My Resume</button>
        </form>

        <div class="clear"></div>
      </div>
    </section>
    <footer>
      <div class="social-links">
        <a href="https://www.linkedin.com/in/seanmarman"><img src="assets/linkedin.png" alt=""></a>
        <a href="https://twitter.com/smarman85"><img src="assets/twitter.png" alt=""></a>
        <a href="https://github.com/smarman85"><img src="assets/github.png" alt=""></a>
        <a href="https://plus.google.com/u/0/108895157342241523043/posts"><img src="assets/google_plus.png" alt=""></a>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </footer>
  </div>
</body>
</html>
