<!DOCTYPE html>
<html>
<head><title>Admin | Add New Story</title>
<link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
        <form name="addStoryfrm" method="post" class="m-4" action="">
            <div class="row">
                <h1>Add New Story</h1>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Story name</label>
                    <input type="text" class="form-control" size="80" name="Story_title" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Story Author</label>
                    <input type="text" name="Story_author" class="form-control" size="80" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label>Posted Date:</label>
                    <input type="date" name="story_release_date" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md">
                    <label>Story</label>
                    <textarea cols="60" rows="4" name="story_text" class="form-control" required></textarea>
                </div>
            </div>
            <input type="submit" name="savebtnstory" class="btn btn-primary" id="button" value="SAVE STORY">
            <input type="submit" id="button1" value="BACK TO MANAGE TESTIMONIAL"  class="btn btn-info" onclick="location.href = 'manage testimonial.php'">
        </form>
</body>
</html>

<?php include "data_connection.php";

if (isset($_POST['savebtnstory']))
{
    $stitle = $_POST["Story_title"];
    $sAuthor = $_POST["Story_author"];
    $sImg = $_POST["img"];
    $spost_date = $_POST["story_release_date"];
    $sStory = $_POST['story_text'];;

    $q = "INSERT INTO story (storyAuthor, storyDate, storyBoard, storyMedia, storyTitle)
          values ('$sAuthor', '$spost_date', '$sStory', '$sImg', '$stitle')";

    if($result = mysqli_query($conn, $q)) {
        ?>
        <script type="text/javascript">
            alert("The Story is saved!");
        </script>
        <?php
    }
    else
    {
        ?>
<script>
    alert("Error Happened");
</script>
<?php
    }
}
?>

