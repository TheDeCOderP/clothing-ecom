<?php 
include "includes/header.php";
?>

<div class="container" id="slider"><!-- container Starts -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Starts --->

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

<li data-target="#myCarousel" data-slide-to="1"></li>

<li data-target="#myCarousel" data-slide-to="2"></li>

<li data-target="#myCarousel" data-slide-to="3"></li>


</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner"><!-- carousel-inner Starts -->

<?php

$get_slides = "select * from slider LIMIT 0,1";

$run_slides = mysqli_query($con,$get_slides);

while($row_slides=mysqli_fetch_array($run_slides)){

$slide_name = $row_slides['slide_name'];
$slide_image = $row_slides['slide_image'];

echo "

<div class='item active'>

<img src='myadmin/slides_images/$slide_image'>

</div>

";
}

?>

<?php

$get_slides = "select * from slider LIMIT 1,3 ";

$run_slides = mysqli_query($con,$get_slides);

while($row_slides = mysqli_fetch_array($run_slides)) {


$slide_name = $row_slides['slide_name'];

$slide_image = $row_slides['slide_image'];

echo "

<div class='item'>

<img src='myadmin/slides_images/$slide_image'>

</div>

";


}



?>

</div><!-- carousel-inner Ends -->

<a class="left carousel-control" href="#myCarousel" data-slide="prev"><!-- left carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a><!-- left carousel-control Ends -->

<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a><!-- right carousel-control Ends -->

</div><!-- carousel slide Ends --->

</div><!-- col-md-12 Ends -->

</div><!-- container Ends -->

<div id="advantages"><!-- advantages Starts -->
<div class="container"><!-- container Starts -->

<div class="same-height-row"><!-- same-height-row Starts -->

<div class="col-sm-4"><!-- col-sm-4 Starts -->

<div class="box same-height"><!-- box same-height Starts -->

<div class="icon">

<i class="fa fa-heart" ></i>

</div>

<h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>

<p>
We are known to provide best possible service ever
</p>


</div><!-- box same-height Ends -->

</div><!-- col-sm-4 Ends -->

<div class="col-sm-4"><!-- col-sm-4 Starts -->

<div class="box same-height" ><!-- box same-height Starts -->

<div class="icon" >

<i class="fa fa-tags" ></i>

</div>

<h3><a href="#" > BEST PRICES </a></h3>

<p>

You can check on all others sites about the prices and than compare with us.


</p>


</div><!-- box same-height Ends -->

</div><!-- col-sm-4 Ends -->

<div class="col-sm-4"><!-- col-sm-4 Starts -->

<div class="box same-height" ><!-- box same-height Starts -->

<div class="icon" >

<i class="fa fa-thumbs-up" ></i>

</div>

<h3><a href="#" > 100% SATISFACTION GUARANTEED </a></h3>

<p>

Free returns on everything for 3 months.



</p>


</div><!-- box same-height Ends -->

</div><!-- col-sm-4 Ends -->


</div><!-- same-height-row Ends -->

</div><!-- container Ends -->
</div><!-- advantages Ends -->

<div id="hot"><!-- hot Starts -->

<div class="box"><!-- box Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<h2>Latest this week</h2>

</div><!-- col-md-12 Ends -->

</div><!-- container Ends -->

</div><!-- box Ends -->

</div><!-- hot Ends -->


<div id="content" class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<?php

getPro();

?>

</div><!-- row Ends -->

</div><!-- container Ends -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>