<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link href="css/sideb.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div class="col-md-4">

          <!-- Search Widget -->
          
              <div class="search-body">
                  <form name="search" action="search.php" method="post">
                      <div class="search-input-group">
                          <input type="text" name="searchtitle" class="search-input" placeholder="Search for..." required>
                          <button class="search-button" type="submit">Search</button>
                      </div>
                  </form>
              </div>
          

          <!-- Categories Widget -->
          <div >
          <h5 class="section-title">Categories</h5>
            <div class="section-content">
              <div class="category-list">
                <div class="category-item">
                  <ul class="list-style">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>

                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
                </div>
       
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div>
          <h5 class="section-heading">Recent News</h5>
            <div class="news-container">
              <ul class="news-list">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>

        </div>
</body>
</html>