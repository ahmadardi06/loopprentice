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

    <script>
        jQuery(document).ready(function($) {
          $('.popup').click(function(event) {
            var width  = 575,
                height = 400,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                         ',width='  + width  +
                         ',height=' + height +
                         ',top='    + top    +
                         ',left='   + left;
            
            window.open(url, 'twitter', opts);
         
            return false;
          });
           });
        </script>
        <style>
        .facebook,.twitter { margin-left:3px !important;}
        .facebook, .twitter, .google, .linkedin, .pinterest {
          float:left;
          position:relative;
          margin-left:5px;
        }
        .container-social {
          width:400px;
          margin:auto;
          text-align:center;
        }
        
        </style>

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
          <img class="card-img-top img-fluid rounded" src="http://<?php echo $_SERVER["SERVER_ADDR"];?>/LoopPrentice/libs/img/<?php echo $data[0]->post_cover;?>" alt="<?php echo $data[0]->post_title;?>">
          <br><br>
          
          <div class="single_post">
            <?php echo html_entity_decode($data[0]->post_content);?>
          </div>
          <hr>


          
          <!-- share social media -->
          <div class="row justify-content-center">
            
            <form class="form-inline">
                <div class="col-lg-12">
                  

                      <div class="facebook">
                          <a id="button" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title; ?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)">
                          <button class="facebook btn btn-md btn-primary"> <i class="fa fa-facebook icon-footer"></i> Facebook </button></a>  
                      </div>


                      <div class="twitter">
                          <a class="twitter popup" href="http://twitter.com/share?source=sharethiscom&text=<?php echo $title;?>&url=<?php echo $url; ?>&via=berbagiyuks"><button class="twitter btn btn-md btn-info" ><i class="fa fa-twitter icon-footer"></i> Twitter </button></a>
                      </div>

                      <div class="google">
                          <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo $url; ?> ','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false"><button class="primary btn btn-md btn-danger"><i class="fa fa-facebook icon-footer"></i> Google +</button></a>
                      </div>

                      <div class="linkedin">
                      <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?> &title=<?php echo $title;?>&summary=<?php echo $summary;?>&source=BerbagiYuks.con" class="popup"rel="nofollow"><button class="primary btn btn-md btn-secondary"><i class="fa fa-linkedin icon-footer"></i> Linkedin</button></a>
                      </div>

                      <div class="pinterest">
                      <a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><button class="primary btn btn-md btn-default"><i class="fa fa-pinterst icon-footer"></i> Pinterset</button></a>
                      </div>

                  
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
                      <a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i> Video / Vlog</a>
                    </li>
                    <li class="kategori">
                      <a href="#"> <i class="fa fa-camera-retro" aria-hidden="true"></i> Foto</a>
                    </li>
                    <li class="kategori">
                      <a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> Artikel</a>
                    </li>
                    <li class="kategori">
                      <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Promo</a>
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






