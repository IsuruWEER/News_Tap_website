<?php 
session_start();
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Tap:Get the latest news from around the world.</title>
    <!-- Custom styles for this template -->
    <link href="css/slider.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet" type="text/css">
    <link href="css/card.css" rel="stylesheet" type="text/css">
    
    <script src="js/slider.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .page-link {
            font-family: 'Georgia', 'Times New Roman', serif; /* Serif font similar to the one in the image */
            color: red; }
        #preloader{
          background : #000 url(images/loader.gif) no-repeat center center;
          height: 100vh;
          width: 100%;
          z-index: 100;
        }
    </style>

  </head>

  <body>
  <div id="preloader"></div>
    <!-- Navigation bar -->
   <?php include('includes/header.php');?>
   <?php include('includes/header2.php');?>

   <div class="rectangle">
   <div class="slides slowFade">
        <div class="slide">
            <img src="01.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="02.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="03.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="04.jpg" alt="img"/>
        </div>
    </div>
   </div>

    <!-- Page Content -->
    <div class="container" >


     
      <div class="row" style="margin-top: 1%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

          <div>
        <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2> <hr> <div><p><b class="catego">Category</b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?> </a> </p> </div>
              <div class="cadfoot">Posted on <?php echo htmlentities($row['postingdate']);?> </div>
                 
            <div>
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"  class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i><b>READ MORE</b></a>
            </div>

            </div>
          </div>
          <div class="b-padding"><p></p></div>
          
<?php } ?>
       

      

          <!-- Pagination -->


    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function(){
        loader.style.display = "none";
      })
    </script>
    
    

 
</head>
  </body>

</html>
