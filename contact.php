<? include("header.html"); ?>

<link href="https://fonts.googleapis.com/css?family=Lato|Raleway:700" rel="stylesheet">
<div class ="contacthead"><div class ="heading"><div><img src ="assets/heading%20back.png"></div><h1>Contact</h1></div></div>
<form id="contact-form" action="contact-process.php" method="post">


  <div class = "border">
    <p>Dear Pilates Inspire,</p>
  <p>My
    <label for="your-name">name</label> is
    <input type="text" name="your-name" id="your-name" minlength="3" placeholder="(your name here)" required> and</p>

  <p>my
    <label for="email">email address</label> is
    <input type="email" name="your-email" id="email" placeholder="(your email address)" required>
  </p>

  <p> I have a
    <label for="your-message"> message</label>,</p>

  <p>
    <textarea name="your-message" id="your-message" placeholder="(your msg here)" class="expanding" required></textarea>
  </p>
  <p>
    <button type="submit">
      <svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewBox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">
        <path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
	l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
      </svg>
      <small>send</small>
    </button>
  </p>
      </div>
</form>
<? include("footer.html"); ?>
