
<?php include 'lib/init.php';
loadView('global/admin');
$scale = $_POST['scale'];
$size = $_POST['size'];
$name = $_POST['name'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$action = $_POST['action'];

settype($size, "string");

if(!empty($action))
{
    sql_insert("insert into products(prod_scale,prod_size,prod_name,prod_price,prod_stock)
    values ('$scale','$size','$name','$price','$stock')");
    echo"add complete";



        $target_dir = "img/payment";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["action"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $img = "img/".basename( $_FILES["fileToUpload"]["name"]);
                sql_insert("insert into products(prod_scale,prod_size,prod_name,prod_price,prod_img,prod_stock)
                values ('$scale','$size','$name','$price','$img','$stock')");

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }


}
?>

<html>

<form action="admin_product.php"method="post" enctype="multipart/form-data">
    Product Scale:
    <select name="scale">
      <option value="PG">PG</option>
      <option value="MG">MG</option>
      <option value="HG">HG</option>
      <option value="SD">SD</option>
    </select>
 </br> </br>
 Product Size:
      <select name="size">

      <option value="1/144">1/144</option>
      <option value="1/100">1/100</option>
      <option value="1/60">1/60</option>
      <option value="SD">SD</option>
    </select>
 </br> </br>
Product Name:
  <input type="text" name="name"></input>
   </br> </br>
Product Price:
<input type="text" name="price"></input>
</br> </br>
Upload Image
<input type="file" name="fileToUpload" id="fileToUpload">

 </br> </br>
 Stock:
 <input type="text" name="stock"></input>
 </br> </br>
 <input type="submit" name="action"></input>
</form>

</html>
