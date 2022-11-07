 
<?php
$conx = mysqli_connect("localhost","geomartins","sunday19#", "vokeseel");	//XpertProCombined

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Lightit School</title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Education design by Aki Solutions vokeseelschools Vokeseel Creche Nursery Primary Secondary Schools">
    <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
    <meta name="author" content="education">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
            
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
    <link rel="shortcut icon" href="assets/img/favicon/114x114.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon/96x96.png">
    
    
    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    
    
    <!-- Icon fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/css/themify-icons.css">
    
    
    <!-- stylesheet-->    
    <link rel="stylesheet" href="assets/css/vendors.bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>
  
  <body>
   

      <header class="site-header bg-dark text-white-0_5">        
    <div class="container">
      <div class="row align-items-center justify-content-between mx-0">
        <ul class="list-inline d-none d-lg-block mb-0">
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-email mr-2"></i>
            <a href="mailto:lightitschool@gmail.com">lightitschool@gmail.com</a>
           </div>
          </li>
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-headphone mr-2"></i>
            <a href="tel:+2348023073465">08068783389</a>
           </div>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
            <a href="#"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="#"><i class="ti-twitter"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="about-eschool.html">About e-school</a>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">
            <a href="https://www.eschool-ng.com/login.php" target="_blank">e-school Login</a>
          </li>
        </ul>
      </div> <!-- END END row-->
    </div> <!-- END container-->
  </header><!-- END site header--> 
  

  <nav class="ec-nav sticky-top bg-white">
  <div class="container">
    <div class="navbar p-0 navbar-expand-lg">
      <div class="navbar-brand">
        <a class="logo-default" href="index.html"><img alt="" src="images\logox.jpg" class='main-logo'></a>
      </div>
      <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
        <div class="hamburger hamburger--spin js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </span>
      <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
        <ul class="nav navbar-nav ec-nav__navbar ml-auto">

            <li class="nav-item nav-item__has-megamenu megamenu-col-2">
              <a class="nav-link" href="index.html">HOME</a>
             
            </li>

            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="about.html">ABOUT US</a>
                
            </li>

            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="gallery.html">GALLERY</a>
              
            </li>

             <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link" href="admission.html"> ADMISSIONS </a>
                
              </li>

             <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> ACADEMICS </a>
                <div class="dropdown-menu">
                  <ul class="list-unstyled">
                    <li>
                    <a class="nav-link__list" href="academics.html#nursery"> PLAY GROUP</a>
                  </li>  
                  <li>
                    <a class="nav-link__list" href="academics.html#nursery"> NURSERY</a>
                  </li>
                  <li>
                    <a class="nav-link__list" href="academics.html#primary"> PRIMARY</a>
                  </li>
                  <li>
                    <a class="nav-link__list" href="academics.html#secondary"> SECONDARY</a>
                  </li>

                  </ul>
                </div>
              </li>

            <li class="nav-item nav-item__has-megamenu">
            <a class="nav-link" href="news">NEWS</a>
            </li>
        </ul>
      </div>
      </div>
      </div>
      </nav>

    <!-- What People Say Section -->
         <section class="padding-y-100 bg-light">
        <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
                    <!--<div class="irs-section-title">-->
                        <h2 class="mb-4">
        All <span class="text-primary">News</span></h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div><br>
                        <!--<div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>-->
            <h4>Latest news about our school events, activities and extracurricular activities </h4>
                    <!--</div>-->
                </div>
            </div>
                <div class="col-md-12">
                <div class="row">
                <?php
$conx = mysqli_connect("localhost","geomartins","sunday19#", "vokeseel");	//XpertProCombined
$query = "SELECT * FROM vokeseel_news ORDER BY id DESC";
$result = mysqli_query($conx, $query);
if(!$result){
    
  die("QUERY FAILED". mysqli_error($conx)); 
}    
$rows = mysqli_num_rows($result);

// total number of results to be displayed per page //
    $page_rows = 9;
    
//this displays the page number of our last page //
    
   $last = ceil($rows/$page_rows);

//  This makes sure $last cannot be less than one //
    
   if($last < 1) {
       
       $last = 1;
       
   } 
            
                
// Establish the pagenum variable //
    
   $pagenum = 1;
   
// Get pagenum from url variable if it is present, else it is one //
                
   if(isset($_GET['page'])) {
       
// this filters the variables to make sure they are only numbers //       
     $pagenum = preg_replace('#[^0-9]#', ' ', $_GET['page']);
       
   }
                
// This makes sure the $pagenum isn't below 1 or more than our $last page //
                
    if($pagenum < 1 ) {
        
        $pagenum = 1;
        
    } else if($pagenum > $last){
        
        $pagenum = $last;
    }
                
// This sets the range of rows to query for the choosen pagenum //
                
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .' ,' .$page_rows;
                
   
// this query is for grabbing just one page worth of rows by applying limit //

$query = "SELECT * FROM vokeseel_news ORDER BY id DESC {$limit}";
$result = mysqli_query($conx, $query);
if(!$result){
    
  die("QUERY FAILED". mysqli_error($conx)); 
}    

// This shows the user what page they are on, and the total number of pages // 
                
    $textline1 = "Posts (<strong>$rows</strong>)";
    $textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
                
// Establist the pagination control variables //
   
   $paginationctrls = " ";
                
   if($last != 1) {
       
       /* first we check if we are on page one. if we are, then we dont need a link to the previous page or the first page. If we aren't, then we generate links to the first page, and to the previous page */
       
    if($pagenum > 1) {
        
      $previous = $pagenum - 1;
      $paginationctrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$previous.' " class="text-primary"><< Previous<Previous</a>&nbsp;&nbsp;';
        
       }
       
// Render clickable number links that should appear on the left of the target page number //
       
       for($i = $pagenum - 1; $i < $pagenum; $i++){
       
       if($i > 0) { 
           
         $paginationctrls .= '<a href=" '.$_SERVER['PHP_SELF'].'?page='.$i.' " class="text-primary">'.$i.'</a>&nbsp;&nbsp;';
       }
          }

   }
                
// Render the target page number, but without it been a link //
                
   $paginationctrls .= "<strong>$pagenum</strong>"."&nbsp;&nbsp;";
                
// Render a clickable number links that should appear on the right of the target page number //
                
    for($i = $pagenum + 1; $i < $last; $i++) {
        
      $paginationctrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'" class="text-primary">'.$i.'</a> &nbsp; ';
        
    if($i >= $pagenum + 4) {
        
        break;
        
      }
        
    }
                
// Checks that we are not on the last page, then generate the Next //
                
    if($pagenum != $last) {
        
      $next = $pagenum + 1;
      $paginationctrls .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$next.'" class="text-primary">Next>></a>';
        
    }           
                    
        
               while($row = mysqli_fetch_array($result)){ 
                $id      = $row['id'];
                $title   = $row['title'];
                $content = substr($row['content'], 0, 200);
                $author  = $row['author'];
                $date    = $row['date'];
                $picture = $row['picture'];
                $news_url = $row['news_url'];
               ?>     
             
                <div class="col-md-4">
                <div class="well">
                    <div class="irs-courses-col irs-blog-col animated fadeInLeftShort">
                        <div class="irs-courses-img">
                            <img class="w-100" src="images/<?php echo $picture ?>" alt="">
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                    <p><i class="far fa-calendar-alt text-primary">&nbsp;&nbsp;</i><?php echo $date;?></p>
                            </div>
                            <div class="col-md-6">
                                    <p><i class="fas fa-user text-primary">&nbsp;&nbsp;</i><?php echo $author;?></p>
                            </div>
                        </div>
                        <div class="">
                            <h4><a href="news_details/<?php echo $news_url;?>"><?php echo $title?></a></h4>
                            <p><?php echo $content?></p>
                            <a class="btn btn-primary" href="news_details/<?php echo $news_url;?>" role="button">read more</a>
                        </div>
                    </div>
                </div><br>
            </div>
            
            <?php } ?>
            
            </div>
            <!--<ul class="pager text-center">-->
        
           <div id="pagination" class="text-center"><?php echo $paginationctrls; ?></div>
        
        <!--</ul>-->
             </div>
              
        </div>
    </section>

   <!-- Testimonial End -->
  

 
<footer class="site-footer">
  <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
    <div class="container"> 
      <div class="row">

        <div class="col-lg-3 col-md-6 mt-5">
         <img src="assets/img/logo-white.png" alt="Logo">
         <div class="margin-y-40">
           <p>
           To create and maintain an effective learning environment by establishing behavioral support and social cultural need for all pupils in our school to achieve social, emotional and academic success.
 
          </p>
         </div>
          <ul class="list-inline"> 
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-facebook"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-twitter"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-linkedin"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-pinterest"></i></a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mt-5">
          <h4 class="h5 text-white">Contact Us</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <ul class="list-unstyled marginTop-40">
            <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="tel:+234 ">08068783389 </a></li>
            <li class="mb-3"><i class="ti-email mr-3"></i><a href="mailto:lightitschool@gmail.com">lightitschool@gmail.com</a></li>
            <li class="mb-3">
             <div class="media">
              <i class="ti-location-pin mt-2 mr-3"></i>
              <div class="media-body">
                <span> 5, Close B, A shade Estate
Igbo-elerin Okokomiako.
Lagos State.</span>
              </div>
             </div>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mt-5">
          <h4 class="h5 text-white">Quick links</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <ul class="list-unstyled marginTop-40">
            <li class="mb-2"><a href="page-about.html">About Us</a></li>
            <li class="mb-2"><a href="page-contact.html">Contact Us</a></li>
            <li class="mb-2"><a href="page-sp-student-profile.html">Gallery</a></li>
            <li class="mb-2"><a href="page-sp-admission-apply.html">Admission</a></li>
            <li class="mb-2"><a href="page-events.html">Academics</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <h4 class="h5 text-white">Newslatter</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <div class="marginTop-40">
            <p class="mb-4">Subscribe to get update and information. Don't worry, we won't send spam!</p>
            <form class="marginTop-30" action="#" method="POST">
              <div class="input-group">
                <input type="text" placeholder="Enter your email" class="form-control py-3 border-white" required="">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Join Us</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div> <!-- END row-->
    </div> <!-- END container-->
  </div> <!-- END footer-top-->

  <div class="footer-bottom bg-black-0_9 py-5 text-center">
    <div class="container">
      <p class="text-white-0_5 mb-0">&copy; 2018 Lightit School. All rights reserved. Designed by <a href="http://akisolutions.com.ng" target="_blank">AKI Solutions</a></p>
    </div>
  </div>  <!-- END footer-bottom-->
</footer> <!-- END site-footer -->


<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
     
    <script src="assets/js/vendors.bundle.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>
</html>