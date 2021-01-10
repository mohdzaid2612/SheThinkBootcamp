<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootcamp</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"
    />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="owl.carousel.min.css" />
    <link rel="stylesheet" href="owl.theme.default.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="body">
    <div class="overlay"></div>
    <section class="header_section">
      <div class="header">
        <div class="logo">
          <img src="./logo.png" class="logoImage" />
        </div>
        <div class="menu_options">
          <!-- <ul class="list">
            <li><a href="$">FAQ</a></li>
            <li><a href="$">Contact</a></li>
            <li><a href="$">About Us</a></li>
          </ul> -->
        </div>
      </div>
    </section>
    <section class="landing_page">
      <div class="landing">
        <div class="textarea" data-aos="fade-right" data-aos-duration="3000">
          <h3>Learn to code and change your life.</h3>
          <div>
            <h1 id="simpleUsage"></h1>
          </div>
          <div class="button">
            <button class="Button form_open">Enroll Now</button>
          </div>
          <div class="offer_valid">
            <i class="fa fa-gift" aria-hidden="true"></i>
            <h3>Discount upto <b> 33% for first 25 students. </b></h3>
          </div>
          <div class="poster_portion">
            <img src="./landing_poster.png" alt="" />
          </div>
        </div>
        <div class="imagearea" data-aos="fade-left" data-aos-duration="3000">
          <div class="big_circle"></div>
          <div class="card_details">
            <div class="card card1" data-aos="zoom-in" data-aos-duration="1000">
              <div class="info">
                <h3>
                  480+ hours Offline
                  <b>Intensive Training.</b>
                </h3>
              </div>
            </div>
            <div class="card card2" data-aos="zoom-in" data-aos-duration="3000">
              <div class="info">
                <h3>
                  Mentors from <br />
                  <b>IITs, NITs</b>
                </h3>
              </div>
            </div>
            <div class="card card3" data-aos="zoom-in" data-aos-duration="2000">
              <div class="info">
                <h3>Build Industry <b>Relevent Skills.</b></h3>
              </div>
            </div>
            <div class="card card4" data-aos="zoom-in" data-aos-duration="2500">
              <div class="info">
                <h3>Reinvent Your <b>Career.</b></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="success_path">
      <div class="success">
        <div class="career_camp">
          <div class="camp_image">
            <img src="./camp.svg" alt="" />
            <div>
              <h3>Boot</h3>
              <h3>Camp</h3>
            </div>
          </div>
          <div class="bootcamp_bottom">
            <div class="experience_card">
              <div class="experience_number">
                <h2>12+</h2>
                <h1>Industry Hiring Partners</h1>
              </div>
            </div>
            <div class="explore_button">
              <button class="form_open">Explore SheThink Camp</button>
            </div>
          </div>
        </div>
        <div class="career_camp_info">
          <div class="camp_heading">
            <h1>Introducing SheThink Bootcamp</h1>
            <h4>
              A thorough and devoted Bootcamp program to quickened your learning and prepare employment for transporter in innovation.
            </h4>
          </div>
          <div
            class="camp_points"
            data-aos="flip-left"
            data-aos-duration="2000"
          >
            <div class="point_1"><h2>01</h2></div>
            <div class="point_2"><h2>02</h2></div>
            <div class="point_3"><h2>03</h2></div>
          </div>
          <div
            class="camp_points_details"
            data-aos="flip-right"
            data-aos-duration="2500"
          >
            <div class="point_info_1">
              <h1>01</h1>
              <h2>Apply for a Career Program</h2>
              <p>
                Apply for a Bootcamp program to open up career opportunities in technology.
              </p>
            </div>
            <div class="point_info_2">
              <h1>02</h1>
              <h2>Apply for Entrance Test and Interview</h2>
              <p>
                Appear for an entrance test designed to check your aptitude skills.
              </p>
            </div>
            <div class="point_info_3">
              <h1>03</h1>
              <h2>Kickstart your Tech Career</h2>
              <p>
                Learn from our expert faculty, get mentored by industry veteran
                & apply to your dream companies.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="How_to_apply">
      <div class="thinking_image">
        <img src="./thinking.png" alt="" />
      </div>
      <div class="apply_info">
        <div
          class="apply_heading"
          data-aos="fade-right"
          data-aos-duration="2500"
        >
          <div class="apply_text">
            <h1>How to</h1>
            <h1>Apply</h1>
            <h4>
              Our Selection Process is based only on talent and motivation, and not based on educational degrees.
            </h4>
          </div>
          <div class="red_circle"></div>
          <div class="black_circle"></div>
        </div>
        <div class="apply_points" data-aos="fade-left" data-aos-duration="1500">
          <img src="./roadmap.png" alt="" />
        </div>
      </div>
    </section>

    <!-- <section class="course_advantages">
      <div class="benefits_area">
        <div class="benefit_heading">
          <div class="upper_circle"></div>
          <div class="lower_circle"></div>
          <div class="heading_message">
            <h1>Benefits of our</h1>
            <h1>Trainng Courses.</h1>
          </div>
        </div>
        <div class="benefit_points">
          <div class="benefits_points">
            <div class="benefit_number"><h2>01</h2></div>
            <div class="benefit_information">
              <h2>Improved employee performance</h2>
            </div>
          </div>
          <div class="benefits_points">
            <div class="benefit_number_even"><h2>02</h2></div>
            <div class="benefit_information">
              <h2>Improved employee satisfaction and morale</h2>
            </div>
          </div>
          <div class="benefits_points">
            <div class="benefit_number"><h2>03</h2></div>
            <div class="benefit_information">
              <h2>Addressing weaknesses</h2>
            </div>
          </div>
          <div class="benefits_points">
            <div class="benefit_number_even"><h2>04</h2></div>
            <div class="benefit_information">
              <h2>Increased innovation in new strategies and products</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="companies_linked">
      <div class="companies">
        <div class="companies_name">
          <h1>Leading companies hire our graduates.</h1>
        </div>
        <div class="companies_all_images">
          <div class="company_images">
            <img src="./BharatPe@3x.png" alt="" srcset="" />
          </div>
          <div class="company_images">
            <img src="./PayTM@3x.png" alt="" srcset="" />
          </div>
          <div class="company_images">
            <img src="./MPL@3x.png" alt="" srcset="" />
          </div>
          <div class="company_images">
            <img src="./Dunzo@3x.png" alt="" srcset="" />
          </div>
        </div>
      </div>
    </section> -->

    <section class="courses_main">
      <div class="round_circle"></div>
      <div class="inner_course">
        <div class="course_sign">
          <img src="./signboard.png" alt="" />
        </div>
        <div class="course_card" data-aos="zoom-in" data-aos-duration="2000">
          <div class="course_points">
            <ul>
              <li>Learn full stack web development</li>
              <li>Make real world applications</li>
              <li>Build super strong portfolio</li>
              <li>Get a great first job</li>
            </ul>
          </div>
          <div class="course_details">
            <div class="course_image">
              <img src="./mern.png" alt="" />
              <div class="plus_sign">
                <img src="./plus.png" alt="" />
              </div>
            </div>

            <div class="course_info">
              <h2>Full-Stack Web Developer Track</h2>
              <p>
                Become a skilled full-stack developer with hands-on experience
                in the MERN stack.
              </p>
              <div id="flipdown" class="flipdown"></div>
              <div class="price">
                <div class="offer_price">
                  <img src="./offer.png" alt="" />
                  <h4>33%</h4>
                </div>
                <h3 class="forwebText">
                  Make 2021 <br />
                  your Year of <br />
                  Doing!
                </h3>
                <h3 class="forMobileText">Make 2021 your Year of Doing!</h3>
                <h2>
                  ₹7,999
                  <b>₹11,999</b>
                </h2>
              </div>

              <div class="duration">
                <h2>Duration</h2>
                <h4>480+ Hours <b>(Offline)</b></h4>
              </div>
              <div class="Prerequisites">
                <h2>Prerequisites</h2>
                <h4>Basic programming <b>(in any language)</b></h4>
              </div>
              <hr class="differentiate" />
              <div class="course_details_points">
                <ul>
                  <li>
                    Work on <b>multiple projects</b> and learn HTML, CSS,
                    JavaScript, MERN (MongoDB, Express, React, Node.js)
                  </li>
                  <li>
                    Build <b>different projects</b> to apply all your learnings
                  </li>
                </ul>
              </div>
              <button class="form_button">Enroll This Course</button>
              <!-- <div class="course_points">
                <ul>
                  <li>Learn full stack web development</li>
                  <li>Make real world applications</li>
                  <li>Build super strong portfolio</li>
                  <li>Get a great first job</li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact_form">
      <div class="cancel_button">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <div class="contact_info">
        <h2>MERN Stack</h2>
        <form
          autocomplete="off"
          class="form_details"
          method="post"
          action="./php/smtp.php"
        >
          <div class="email_address">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id=""
              class="effect"
              autocomplete="off"
            />
            <span class="focus-border"></span>
          </div>
          <div class="full_name">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="" class="effect" />
            <span class="focus-border"></span>
          </div>
          <div class="phone_numnber">
            <label for="phone_number">Phone Number</label>
            <input type="number" name="phone_number" id="" class="effect" />
            <span class="focus-border"></span>
          </div>

          <button type="submit" class="form_submit" name="submit">
            Submit
          </button>
        </form>
      </div>
    </section>

    <?php
      if (isset($_SESSION['success']) && $_SESSION['success']) {
        echo '<div class="overlaySuccess"></div><section class="success_display"><div class="successfull" ><i class="fa fa-times success_close" aria-hidden="true"></i><div class="successful_gif"><img src="./success.gif" alt="" /></div><div class="successfull_text"><h3>Successfully Sent</h3><h5>We will shortly reach you..!!</h5></div></div></section>';
      }
    ?>
    <section class="all_testimonials">
      <div class="students_testimonials">
        <div class="splide">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="student_image">
                  <img src="./anubhav.jpeg" alt="" />
                </div>
                <div class="student_info">
                  <h3>Anubhav Kumar</h3>
                  <p>
                    The best thing about the Bootcamp is that you get to learn a
                    lot. I was able to explore diverse technologies, get
                    hands-on experience, and work on them. I guess I was really
                    lucky enough to have worked on various things, and I’m glad
                    to be a part of one of the fastest-growing organizations To
                    grow leaps and bounds in your career, this is the place to
                    be!.
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="student_image">
                  <img src="./mzaid.jpg" alt="" />
                </div>
                <div class="student_info">
                  <h3>Mohd Zaid</h3>
                  <p>
                    I would recommend this course to all the college students if
                    they are in a dilemma that what career should they pursue in
                    the future. Bindu Mam would make this course so much
                    interesting and knowledgeful that u won't regret joining the
                    course if u r serious during the course.
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="student_image">
                  <img src="./atul.jpg" alt="" />
                </div>
                <div class="student_info">
                  <h3>Atul Bhatt</h3>
                  <p>
                    It was a wonderful journey with several practical learning
                    experiences. ShethinkSchool made me realize that the best
                    way to learn is by doing. I experienced the power of
                    systematic coding, test-driven development, and scientific
                    debugging. The constant support and push from Bindu Mam and
                    other mentors were marvelous. I honed my skills in software
                    development, problem-solving, and debugging.
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="student_image">
                  <img src="./developer.png" alt="" />
                </div>
                <div class="student_info">
                  <h3>Amit Bhist</h3>
                  <p>
                    The Bootcamp was pretty well structured. Training to code at
                    ShethinkSchool is amazing because of the task given by the
                    mentor. If you have done all the tasks by yourself then you
                    are good to go to face the real world with your skills.
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="student_image">
                  <img src="./jayesh.jpeg" alt="" />
                </div>
                <div class="student_info">
                  <h3>Jayesh Patidar</h3>
                  <p>
                    My ShethinkSchool journey was awesome and it feels great
                    that I was a part of it! Through the Micro-Experiences, I
                    have learned a bunch of industry-relevant skills. There were
                    several modules where I was stuck for a long, but the Bindu
                    Mam and Team Members always kept me motivated and guided me
                    in the right direction. My major takeaways from the Bootcamp
                    are the importance of learning how best to learn and pushing
                    myself harder.
                  </p>
                </div>
              </li>
              <li class="splide__slide">
                <div class="student_image">
                  <img src="./muzahid.jpeg" alt="" />
                </div>
                <div class="student_info">
                  <h3>Muzahid Ahmed</h3>
                  <p>
                    ShethinkSchool plays a big role in my success. It is a place
                    that teaches you to find a solution rather than knowing a
                    solution and builds up a great foundation for any student.
                    Being an electronics engineer, it was difficult to enter the
                    field of programming and my life would have been completely
                    different without ShethinkSchool support.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="tutors">
      <div class="tutors_main">
        <div class="tutors_desc">
          <div class="tutors_heading">
            <h1>Our team of content curators & instructors</h1>
            <h3>
              Our one-of-a-kind curriculum designed by world-class experts will
              significantly improve your child's academic performance
            </h3>
          </div>
          <div class="tutors_images">
            <div class="img">
              <img src="./mp.png" alt="" />
              <h4>MernPlus</h4>
            </div>
            <div class="img">
              <img src="./samadhan.png" alt="" />
              <h4>Samadhan Tech</h4>
            </div>
            <div class="img">
              <img src="./mz.png" alt="" />
              <h4>Mummizzfood</h4>
            </div>
          </div>
        </div>
        <div class="profile">
          <div class="Bg_tutor">
            <img src="./tutor_bg.png" alt="" />
          </div>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="tutor_info">
                <div class="tutor_name_image">
                  <div class="tutor_images">
                    <img src="./varun-sogani-sir.jpeg" alt="" />
                  </div>
                  <div class="tutor_name">
                    <h2>Varun Sogani</h2>
                    <hr />
                    <h5>Mentor</h5>
                  </div>
                </div>
                <div class="tutor_bio">
                  <p>
                    IIT Delhi | India's most responsible business Award | Amit
                    Garg Awardee | Centralising property databases across India
                    | Ex-Wrig Nanosystems | Sold off his last Edtech Venture.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="tutor_info">
                <div class="tutor_name_image">
                  <div class="tutor_images">
                    <img src="./bindu-mam.jpeg" alt="" />
                  </div>
                  <div class="tutor_name">
                    <h2>Bindu Patidar</h2>
                    <hr />
                    <h5>Head Instructor & Founder</h5>
                  </div>
                </div>
                <div class="tutor_bio">
                  <p>
                    6+ years Experience of working in Technology
                    Industries.Worked with India's top MNCs. In a mission to
                    REDEFINE TECHNOLOGY EDUCATION IN INDIA.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="companies_linked">
      <div class="inner_companies_div">
        <div class="companies_heading">
          <h2>Our Hiring Partners</h2>
          <div class="company_images">
            <img src="./google.svg" alt="" />
            <img src="./samsung.svg" alt="" />
            <img src="./amazon.svg" alt="" />
            <img src="./microsoft.svg" alt="" />
            <img src="./cocacola.svg" alt="" />
          </div>
        </div>
      </div>
    </section> -->

    <footer class="main_footer">
      <div class="inner_footer">
        <div class="Image_background">
          <div class="square_bg"></div>
          <div>
            <img src="./student.png" alt="" />
          </div>
        </div>
        <div class="right_info">
          <div class="footer_points">
            <div class="company_points">
              <h1>Company</h1>

              <h3>
                <a href="https://www.shethink.in/" target="_zaid">About Us</a>
              </h3>
            </div>
            <div class="student_resouces">
              <h1>Students Resources</h1>
              <h3>
                <a href="https://www.shethink.in/contact.htm" target="_zaid"
                  >Contact Us</a
                >
              </h3>
            </div>
            <div class="opportunities">
              <h1>opportunities</h1>
              <h3>
                <a
                  href="https://forms.gle/HNojSGAQ14bLdoBm6
                "
                  target="_zaid"
                  >We're Hiring</a
                >
              </h3>
            </div>
          </div>
          <div class="social_links">
            <div class="social_icons">
              <div><h3>Follow Us:</h3></div>
              <div class="icons_area">
                <a href="https://www.instagram.com/SheThink.in/" target="_blank"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
                <a href="https://www.facebook.com/shethink.in/" target="_blank"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
                <a
                  href="https://www.linkedin.com/company/shethink-pvt-ltd/"
                  target="_blank"
                  ><i class="fa fa-linkedin" aria-hidden="true"></i
                ></a>
                <a
                  href="https://join.skype.com/invite/VzkrjMxpI610"
                  target="_blank"
                  ><i class="fa fa-skype" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="copyrights">
            <h4>@ 2020 by SheThink</h4>
            <h4><a href="#"></a></h4>
          </div>
        </div>
      </div>
    </footer>
  </body>

  <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"
  ></script>

  <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script src="./main.js"></script>
  <?php
    if (!isset($_SESSION['success']) || !$_SESSION['success']) {
      echo '<script src="./timeout.js"></script>';
    }
    $_SESSION['success'] = false;
  ?>

  <script src="./owl.carousel.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

  <script>
    $(function () {
      $(".plus_sign").on("click", function () {
        $(".course_points").toggleClass("showInfo");
      });
      $(".plus_sign").on("click", function () {
        $(".course_info").toggleClass("blurback");
      });
      $(".plus_sign").on("click", function () {
        $(".plus_sign").toggleClass("rotatepic");
      });
      $(".form_button").on("click", function () {
        $(".contact_form").toggleClass("formDisplay");
      });
      $(".form_open").on("click", function () {
        $(".contact_form").toggleClass("formDisplay");
        $(".overlay").toggleClass("formDisplay");
        $(".body").toggleClass("formDisplay");
      });
      $(".form_button").on("click", function () {
        $(".body").toggleClass("formDisplay");
      });
      $(".form_submit").on("click", function () {
        $(".successfull").toggleClass("successDisplay");
        $(".body").removeClass("formDisplay");
        $(".overlay").toggleClass("formDisplay");
      });
      $(".form_button").on("click", function () {
        $(".contact_form").toggleClass("formDisplay");
        $(".overlay").toggleClass("formDisplay");
        $(".body").addClass("formDisplay");
      });
      $(".cancel_button").on("click", function () {
        $(".contact_form").removeClass("formDisplay");
        $(".body").removeClass("formDisplay");
        $(".overlay").removeClass("formDisplay");
      });
      $(".success_close").on("click", function () {
        $(".contact_form").removeClass("formDisplay");
        $(".body").removeClass("formDisplay");
        $(".overlay").removeClass("formDisplay");
        $(".success_display").css("display", "none");
        $(".overlaySuccess").css("display", "none");
      });
    });
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        },
      },
    });

    AOS.init();

   
  </script>
</html>
