<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- PHP file uploading form -->
    <form action="Home.php" method="post" enctype="multipart/form-data">
        <h1> Select Your Image </h1>
        <input type="file" name="stdimages"> <hr>
        <label> Enter Rename File </label>
        <input type="text" name="file_Name"> <hr>
        <input type="submit" name="submit" value="Upload">
        <br> <br> <br> <br> <hr>
    </form>
<?php
// Read all information
if(!empty($_FILES['stdimages']['name'])) // True or false
{
    echo "File name is :". $_FILES['stdimages']['name'] . "<hr>";
    echo "File name type :". $_FILES['stdimages']['type'] . "<hr>";
    echo "File name size :". $_FILES['stdimages']['size'] . "<hr>";
    echo "File name Temp Name :". $_FILES['stdimages']['tmp_name'] ."<hr>";

    
    //While taking file and moving to the destinaiton file change the name of the new uploaded file
    // Using explode function: wuxuu kaa caawina inuu kuu kala jaro (seperate) file name io extention like Ahmed.jpg become Ahmed and jpg
    // we use dot(.) to separate the file name and extention
    $ext = explode(".", $_FILES['stdimages']['name']); //First waxay ka koobneed Ahmed.png then seperated
    $ext = end($ext); // to take the qaybta hore isticmaal end function deedna txt ku shub like now ext = Ahmed
    
    // move file temp to Final Destination
    $temp = $_FILES['stdimages']['tmp_name']; // what ever temp file aa hesto iigu shub tmp_name (tmp_name waa argument uu lee yhy super global of files)
    // $Destination = "A:\JUST Docs\Semester 7 Docs\PHP & MySQL\PHP_test/". $_FILES['stdimages']['name']; // it takes folder path and file name

    // to rename the name the input type whill turn into POST
    $Destination = "A:\JUST Docs\Semester 7 Docs\PHP & MySQL\PHP_test/". $_POST['file_Name'] . "." . $ext;  // ext waxa ku jira last return element of array
    
    //Checking whether function exists or not
    if (file_exists($Destination))
        {
            echo "Already Exists";
        } else 
        {
            // Checking file size
            if ($_FILES['stdimages']['size'] < 100 * 1024)
                {
                    //Limit the extentions to upload
                    $exten = array ("jpg", "pdf");
                    $exts = explode(".", $_FILES['stdimages']['name']);
                    $ext = (strtolower(end($exts))); //
                    if (!in_array($ext, $exten))
                    {
                        echo "Not Allowed File Type";
                    }
                    else
                    {

                    // Move Upload fucntion
                    if (move_uploaded_file($temp, $Destination))
                    {
                        echo "File Uploaded Successfully";
                    }
                    else 
                    {
                        echo "Not Moved File";
                    }
                }
                }
                else 
                    {
                        echo "Exceeds the limit";
                    }
} 
} 
 else 
{
  echo "Please select file";
        
}
?>
</body>
</html>