<?php

session_start();
session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>F1-Gym</title>
    <link rel="stylesheet" href="./style.css" />
    <script
      src="https://kit.fontawesome.com/8cd30011d8.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!-- navigation bar -->
    <nav>
      <div id="logo">F1- <span id="logog">g</span>Ym</div>
      <div class="nav-Hide">
        <ul class="navlinks hide">
          <li><a href="#" class="checked">Home</a></li>
          <li><a href="#speciality">About Us </a></li>
          <li><a href="#Trainners">Trainners</a></li>
          <a href="#register">
            <button id="contactBtn">Register</button>
          </a>
          <a href="admin.php" style="margin-left: -30px; margin-right: 10px;">
            <button id="contactBtn">Admin</button>
          </a>
        </ul>
      </div>
      <i class="fa-solid fa-x" id="cloceBurger"></i>
      <i class="fa-solid fa-bars" id="hamburger"></i>
    </nav>

    <!-- home page -->
    <div id="home">
      <video
        id="background-video"
        autoplay
        loop
        muted
        poster="./photos/slide_01.jpg"
      >
        <source src="./homebackground1.mp4" type="video/mp4" />
      </video>
      <div id="content">
        <div id="logo">F1- <span id="logog">g</span>Ym</div>
        <p>
          Enhance the technique your body looks, feels and does with Pilates and
          Yoga exercise programs! Create a long, healthy, muscularly-toned body
          system utilizing effective body-weight and versatility workouts.
          <br />"REACH YOUR GOALS WITH US"
        </p>
        <a href="#register">
          <button>Register</button>
        </a>
      </div>
    </div>

    <div id="speciality">
      <div class="maincontainer">
        <div class="topline"></div>
        <div class="box">
          <i class="fa-brands fa-square-facebook"></i>
          <i class="fa-brands fa-square-instagram"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-square-twitter"></i>
        </div>
        <div class="bottomline"></div>
      </div>
      <div class="box1">
        <img src="./photos/background1.jpg" alt="" />
      </div>
      <div class="contentspc">
        <h1>About F1-gym</h1>
        <p>
          We’re not here to carry you to fitness, we’re here to motivate you to
          carry yourself to your goals. If you’re not sure what your goals are,
          or don’t know where to start on your fitness journey, come in and
          speak to one of our qualified trainers who can help you develop a
          plan.
        </p>
        <button>learn more</button>
      </div>
    </div>

    <div id="Trainners">
      <h1>Trainners</h1>
      <div id="cards">
        <div class="card1 cards">
          <img src="./photos/trainner1.jpg" alt="" />
          <div class="content">
            <h3>Jack Pierce</h3>
            <p>
              Even after you stop training, a trainer can still be an available
              resource. Most trainers are fine with you contacting them from
              time to time for advice and you can always go back to training at
              any time.
            </p>
            <div class="contact">
              <div class="leftlines"></div>
              <i class="fa-brands fa-square-facebook"></i>
              <i class="fa-brands fa-square-instagram"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-brands fa-square-twitter"></i>
              <div class="rightlines"></div>
            </div>
          </div>
        </div>
        <div class="card2 cards">
          <img src="./photos/trainner2.jpg" alt="" />
          <div class="content">
            <h3>Jane Doe</h3>
            <p>
              You might decide that you only need a few sessions with a trainer
              to hone your skills or get inspired. Once you get some new ideas
              for exercises and workouts, you might be ready to get back to a
              routine on your own.
            </p>
            <div class="contact">
              <div class="leftlines"></div>
              <i class="fa-brands fa-square-facebook"></i>
              <i class="fa-brands fa-square-instagram"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-brands fa-square-twitter"></i>
              <div class="rightlines"></div>
            </div>
          </div>
        </div>
        <div class="card3 cards">
          <img src="./photos/trainner3.jpg" alt="" />
          <div class="content">
            <h3>will man</h3>
            <p>
              A trainer offers a fresh perspective and new ideas to challenge
              your body and your mind. Even if you only have a few sessions or
              meet every few weeks, it can be refreshing to have new workouts
              and exercise equipment to try.
            </p>
            <div class="contact">
              <div class="leftlines"></div>
              <i class="fa-brands fa-square-facebook"></i>
              <i class="fa-brands fa-square-instagram"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-brands fa-square-twitter"></i>
              <div class="rightlines"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="register">
      <h2>Register Now</h2>
      <form action="handler.php" method="post" id="maincontainer">
        <div class="RegContainer">
          <div class="name inpfield">
            <label for="name">Name:</label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Enter your name"
            />
          </div>

          <div class="address inpfield">
            <label for="adderss">Address:</label>
            <input
              type="text"
              name="address"
              id="address"
              placeholder="Enter your address"
            />
          </div>

          <div class="email inpfield">
            <label for="email">Email:</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter your email"
            />
          </div>

          <div class="phone inpfield">
            <label for="number">Phone Number:</label>
            <input
              type="number"
              name="phnumber"
              id="number"
              placeholder="Enter your phone number"
            />
          </div>
          <!-- <a href="thankYou.html" target="_blank">
                </a> -->
          <button type="submit" id="submit">submit</button>
        </div>
      </form>
    </div>
    <div id="footer">
      <div class="footerContent">
        <div class="footersec1 footersec">
          <h2>"REACH YOUR GOALS WITH US"</h2>
        </div>
        <div class="footersec2 footersec">
          <h3>Patnership</h3>
          <ul>
            <li><a href="#">Website</a></li>
            <li><a href="#">Social Media</a></li>
            <li><a href="#">Branding</a></li>
          </ul>
        </div>
        <div class="footersec3 footersec">
          <h3>About</h3>
          <ul>
            <li><a href="#">Our Project</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="footersec4 footersec">
          <h3>Support</h3>
          <ul>
            <li><a href="#">Support request</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <br />
      <hr />
      <br />
      <div class="lastfooter">
        <p>Copyright © 2022| all rights reserved !!!</p>
        <div class="socialmediaf">
          <i class="fa-brands fa-square-facebook"></i>
          <i class="fa-brands fa-square-instagram"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-square-twitter"></i>
        </div>
      </div>
    </div>
  </body>
</html>
