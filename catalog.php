<?php 

include ("inc/data.php");
include ("inc/functions.php");


$pageTitle = "Full catalogue";
$section = null;

if (isset($_GET["cat"])) {
    if($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "Books";
} elseif ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "Movies";
} elseif ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "Music";

}
}


include("inc/header.php"); ?>

<div class="section catalog page">

    <div class="wrapper">
<h1>

<?php 
    if ($section != null) {
        echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
    }

echo $pageTitle; ?>

</h1>   

<ul class="items">
<?php $categories = array_category($catalog, $section); // call to function
	    foreach ($categories as $id) {
	        echo get_item_html($id, $catalog[$id]);
    }		
?> 

</ul>
    </div>
    
</div>

<?php include("inc/footer.php"); ?>