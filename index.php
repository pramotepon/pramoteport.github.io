<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pramote-Port</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/fontawesome/all.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/swiper/swiper.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
  
  <script src="assets/js/jquery/jquery3-3-1.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/fontawesome/all.min.js"></script>
  <script src="assets/js/swiper/swiper.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

</head>
<body>

  <section class="section section1">
    <div class="bg-image"></div>
    <div class="bg-overray"></div>
    <div class="center-vertical">
        <div class="row">
          <div class="col-lg-8 text-center">
              <div class="random movein1">
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span><br>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
                  <span class="nbr ltr">0</span>
              </div>
          </div>
          <div class="col-lg-4 text-center mt-5 pt-4">
            <!-- <p>Contact And Share</p> -->
            <a href=""><i class="fab fa-facebook fa-4x" class="movein1"></i></a>
            <a href=""><i class="fab fa-github fa-4x" class="movein1"></i></a>
          </div>
        </div>
    </div>

  </section>

  <section class="section section2">
    <div class="container">
      <div class="text-center">
          <div class="circular-landscape">
              <img src="assets/images/profile.jpg" alt="">
            </div>
      </div>
        <h1>Pramote Phan-on (Plug)</h1>
        <h3>23 November 1994
        <?php
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "11/23/1994";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "(".$age.")";
?>
        </h3>
        <h3>FULL STACK WEB DEVELOPER</h3>
            <!-- <h3>23 November 1994</h3>
            <h3>Sex : Male</h3>
            <h3>Religion : Buddhism</h3>
            <h3>Nationality : Thai</h3> -->
    </div>

    <div class="row text-center pt-5">
      <div class="col-md-2 movein2">
        <a href="">
          <i class="fab fa-facebook-square fa-3x"></i>
        </a>
      </div>
      <div class="col-md-2 movein3">
        <a href="">
          <i class="fab fa-line fa-3x"></i>
        </a>
      </div>
      <div class="col-md-2 movein4">
        <a href="">
          <i class="fas fa-phone-square fa-3x"></i>
        </a>
      </div>
      <div class="col-md-2 movein5">
        <a href="">
          <i class="fab fa-instagram fa-3x"></i>
        </a>
      </div>
      <div class="col-md-2 movein6">
        <a href="">
          <i class="fas fa-envelope fa-3x"></i>
        </a>
      </div>
      <div class="col-md-2 movein7">
        <a href="">
          <i class="fab fa-github-square fa-3x"></i>
        </a>
      </div>
    </div>
  </section>

</body>

  <script>
    $(document).ready(function() {
      var $randomnbr = $('.nbr');
      var $timer = 25;
      var $it;
      var $data = 0;
      var index;
      var change;
      var letters = ["P", "R", "A", "M", "O", "T", "E" ,"P" ,"H" ,"A" ,"N" ,"-" ,"O" ,"N"];

      $randomnbr.each(function() {
      change = Math.round(Math.random()*100);
      $(this).attr('data-change', change);
      });

      function random() {
            return Math.round(Math.random()*9);
      };

      function select() {
            return Math.round(Math.random()*$randomnbr.length+1);
    };
    
     function value() {
          $('.nbr:nth-child('+select()+')').html(''+random()+'');
          $('.nbr:nth-child('+select()+')').attr('data-number', $data);
          $data++;
          $randomnbr.each(function() {
               if(parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))) {
                    index = $('.ltr').index(this);
                    $(this).html(letters[index]);
                    $(this).removeClass('nbr');
               }
          });
     };

     $it = setInterval(value, $timer);
     });
     
    //  Effect Animation
    ScrollReveal({ reset: true });
    ScrollReveal().reveal('.headline');
    ScrollReveal().reveal('.move-in', { duration: 1500,distance: '50px' });
    // ScrollReveal().reveal('.section1', { duration: 2000,distance: '50px' });

    ScrollReveal().reveal('.movein1', { duration: 1500,distance: '-100px' });
    ScrollReveal().reveal('.movein2', { duration: 1000,delay: 500,distance: '150px' });
    ScrollReveal().reveal('.movein3', { duration: 1500,delay: 500,distance: '150px' });
    ScrollReveal().reveal('.movein4', { duration: 2000,delay: 500,distance: '150px' });
    ScrollReveal().reveal('.movein5', { duration: 2500,delay: 500,distance: '150px' });
    ScrollReveal().reveal('.movein6', { duration: 3000,delay: 500,distance: '150px' });
    ScrollReveal().reveal('.movein7', { duration: 3500,delay: 500,distance: '150px' });

    ScrollReveal().reveal('.movein-left', { duration: 1500,distance: '100px',origin: 'left' });
    ScrollReveal().reveal('.movein-right', { duration: 1500,distance: '100px',origin: 'right' });
  </script>
</html>