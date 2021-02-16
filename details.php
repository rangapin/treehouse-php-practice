<?php 
include ("inc/data.php");
include ("inc/functions.php");

if (isset($_GET["id"])) {
    //create a new ID variable
    $id = $_GET["$id"];
    //check for the ID in the catalog
    if (isset($catalog[$id])) {
    //create a item variable in case the ID is found
        $item = $catalog[$id];
    }
}
    //if not found we redirect to a new location
if(!isset($item)) {
    header("location:catalog.php");
    //nothing else is processed
    exit;
}

$pageTitle = $item["title"];
$section = null;

include("inc/header.php"); 

?>

<div class="section page">

    <div class="wrapper">

        <div class="media-picture">

<span>

    <img src="<?php echo $item["img"]; ?> " alt="<?php echo $item["title"]; ?>" />

</span>

        </div>

    </div>
    
</div>
