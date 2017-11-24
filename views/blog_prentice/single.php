<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loopprentice</title>
    <link rel="shortcut icon" href="libs/home_register/img/LogoLoop.png" type="libs/home_register/image/x-icon">

    <script src="libs/home_register/js/jquery.min.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="libs/home_register/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/home_register/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/home_register/css/font-awesome.min.css">

    <!-- custom -->
    <link rel="stylesheet" type="text/css" href="libs/home_register/general/normalize.css">
    <link rel="stylesheet" type="text/css" href="libs/home_register/general/style.css">
    <link rel="stylesheet" type="text/css" href="libs/blog/style_blog.css">

    <!-- wow.js -->
    <link rel="stylesheet" href="libs/home_register/css/libs/animate.css">

    
    

    

</head>
<body>

<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark  navigation transparent menu fixed-top">
    <a class="navbar-brand" href="#">
        <img src="libs/home_register/img/LogoLoop.png" width="80" height="auto" alt="">
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link " href="?page=home_prentice&action=index">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=blog_prentice&action=index">Aksiku <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Challenge</a>
            </li>
            <li class="nav-item">
                
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" >Login</button>
            </li>
        </ul>
    </div>
</nav>
<!-- akhir header -->
 
 <!-- Page Content -->
    <div class="container blog_konten">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 ">

          <!-- Title -->
          <h1 class="mt-4"><?php echo $data[0]->post_title;?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?php echo $data[0]->post_author;?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $data[0]->post_date;?></p>

          <hr>

          <!-- Preview Image -->
          <img class="card-img-top img-fluid rounded" src="http://<?php echo $_SERVER["SERVER_ADDR"];?>/loopprentice/libs/img/<?php echo $data[0]->post_cover;?>" alt="<?php echo $data[0]->post_title;?>">
          <br><br>
          
          <div class="single_post">
            <?php echo html_entity_decode($data[0]->post_content);?>
          </div>
          <hr>


          
          <!-- share social media -->

          <div class="row justify-content-center">
            
            <form class="form-inline">
                <div class="col-lg-12">
                  
                      <!-- Sharingbutton Facebook -->
                      <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
                          </div>
                        </div>
                      </a>

                      <!-- Sharingbutton Twitter -->
                      <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io" target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
                          </div>
                        </div>
                      </a>

                      <!-- Sharingbutton Google+ -->
                      <a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http%3A%2F%2Fsharingbuttons.io" target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.37 12.93c-.73-.52-1.4-1.27-1.4-1.5 0-.43.03-.63.98-1.37 1.23-.97 1.9-2.23 1.9-3.57 0-1.22-.36-2.3-1-3.05h.5c.1 0 .2-.04.28-.1l1.36-.98c.16-.12.23-.34.17-.54-.07-.2-.25-.33-.46-.33H7.6c-.66 0-1.34.12-2 .35-2.23.76-3.78 2.66-3.78 4.6 0 2.76 2.13 4.85 5 4.9-.07.23-.1.45-.1.66 0 .43.1.83.33 1.22h-.08c-2.72 0-5.17 1.34-6.1 3.32-.25.52-.37 1.04-.37 1.56 0 .5.13.98.38 1.44.6 1.04 1.84 1.86 3.55 2.28.87.23 1.82.34 2.8.34.88 0 1.7-.1 2.5-.34 2.4-.7 3.97-2.48 3.97-4.54 0-1.97-.63-3.15-2.33-4.35zm-7.7 4.5c0-1.42 1.8-2.68 3.9-2.68h.05c.45 0 .9.07 1.3.2l.42.28c.96.66 1.6 1.1 1.77 1.8.05.16.07.33.07.5 0 1.8-1.33 2.7-3.96 2.7-1.98 0-3.54-1.23-3.54-2.8zM5.54 3.9c.33-.38.75-.58 1.23-.58h.05c1.35.05 2.64 1.55 2.88 3.35.14 1.02-.08 1.97-.6 2.55-.32.37-.74.56-1.23.56h-.03c-1.32-.04-2.63-1.6-2.87-3.4-.13-1 .08-1.92.58-2.5zM23.5 9.5h-3v-3h-2v3h-3v2h3v3h2v-3h3"/></svg>
                          </div>
                        </div>
                      </a>

                      <!-- Sharingbutton E-Mail -->
                      <a class="resp-sharing-button__link" href="mailto:?subject=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;body=http%3A%2F%2Fsharingbuttons.io" target="_self" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z"/></svg>
                          </div>
                        </div>
                      </a>

                      <!-- Sharingbutton WhatsApp -->
                      <a class="resp-sharing-button__link" href="whatsapp://send?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.%20http%3A%2F%2Fsharingbuttons.io" target="_blank" aria-label="">
                        <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z"/></svg>
                          </div>
                        </div>
                      </a>


                  
                </div>
            </form>
            
          </div>
          <!-- end share social media -->
          
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Tinggalkan Komentar</h5>
            <div class="card-body">
              <div id="disqus_thread"></div>
            </div>
          </div>

        </div>

         <!-- Sidebar Widgets kolom -->
        <!-- Sidebar Widgets kolom -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Pencarian</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-danger" type="button">Cari!</button>
                </span>
              </div>
            </div>
          </div> -->

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
              <div class="row ">
                <div class="col-lg-12 ">
                  <ul class="list-unstyled mb-0">
                    <li class="kategori" >
                      <a href="?page=blog_prentice&action=index&category=Video" class="kategori-link"><i class="fa fa-video-camera" aria-hidden="true"></i> Video / Vlog</a>
                    </li>
                    <li class="kategori">
                      <a href="?page=blog_prentice&action=index&category=Foto" class="kategori-link"> <i class="fa fa-camera-retro" aria-hidden="true"></i> Foto </a>
                    </li>
                    <li class="kategori">
                      <a href="?page=blog_prentice&action=index&category=Article" class="kategori-link"><i class="fa fa-file-text" aria-hidden="true"></i> Artikel</a>
                    </li>
                    <li class="kategori">
                      <a href="?page=blog_prentice&action=index&category=Promo" class="kategori-link"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Promo</a>
                    </li>
                  </ul>
                </div>
                
              </div> 
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Promo</h5>
            <div class="card-body">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="libs/blog/img/Ad1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="libs/blog/img/Ad2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="libs/blog/img/Ad3.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div> 
            </div>
          </div>

        </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<!-- awal footer -->
<footer id="footer" >
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
          
            <div class="social-icons">
                <ul>
                   
                    <li><a class="twitter" href="https://twitter.com/loop_id" target="_blank"><i class="fa fa-twitter icon-footer"></i></a></li>
                    <li><a class="facebook" href="https://id-id.facebook.com/LoopersID/" target="_blank"><i class="fa fa-facebook icon-footer"></i></a></li>
                    <li><a class="instagram" href="https://www.instagram.com/loop_id/" target="_blank"><i class="fa fa-instagram icon-footer"></i></a></li>
                </ul>
                
                <h6 class="footer-tag text-white">copyright 2017 by Youth and Comunity Jawa Bali Nusra</h6>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="bv-login" method="post" action="?page=login_prentice&action=auth">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <span id="spanusername" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span id="spanpassword" class="text-danger"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" style="width: 200px;" id="login-submit" name="login-submit">Login</button>
                    </div>
                </form>
            </div>

        </div>
  </div>
</div> 

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
var PAGE_URL = "http://localhost/LoopPrentice/index.php?page=blog_single_prentice&action=index&idblog=<?php echo $data[0]->id_posting;?>";
var PAGE_IDENTIFIER = "<?php echo $data[0]->post_title;?>";

var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
  var d = document, s = d.createElement('script');
  s.src = 'https://loopprentice.disqus.com/embed.js';
  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<!-- end-footer -->

<!--script video-->
<!-- <script src="libs/js/script.js"></script> -->
<script src="libs/js/home.js"></script>
<script src="libs/home_register/js/highlight.js"></script>
<script src="libs/home_register/js/app.js"></script>

<!-- javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script type="text/javascript" src="libs/home_register/js/bootstrap.js"></script>
<script src="libs/home_register/dist/wow.js"></script>
<script src="libs/vendor/bootstrap/js/bootbox/bootbox.min.js"></script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    // document.getElementById('moar').onclick = function() {
    //   var section = document.createElement('section');
    //   section.className = 'section--purple wow fadeInDown';
    //   this.parentNode.insertBefore(section, this);
    // };
  </script>

  <!-- untuk navigasi -->
  <script type="text/javascript">
    $(window).scroll(function() {
        if($(this).scrollTop() > 50) 
         /*height in pixels when the navbar becomes non opaque*/ 
        {
            $('.menu').addClass('bg-red');
        } else {
            $('.menu').removeClass('bg-red');
        }
    });
    $( window ).width(function(){
        if($(this).width() > 690 && $(this).scrollTop() >= 0){
             $('.menu').addClass('navbar-def');

        }
    });
  </script>

  

    <!-- script untuk navbar -->
    <script type="text/javascript">
        $(window).scroll(function() {
        if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
        {
            $('.menu').addClass('warna');
             $('.menu').removeClass('transparent');
             
        } else {
            $('.menu').removeClass('warna');
            
        }
    });
     $( window ).width(function(){
        if($(this).width() < 1001){
             $('.menu').addClass('warna');
             $('.menu').removeClass('transparent');

        }
     });

    </script>

 

</body>
</html>






