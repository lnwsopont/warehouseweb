<?
include 'lib/init.php';

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

if(isLogin()){
    echo 'yes';
    $orders = get_orders_of($_SESSION['user']['user_id']);
    $order_id = $_POST['order_id'];

    /*$ext = '';
    if(endsWith($_FILES["fileToUpload"]["tmp_name"], '.png')){
        $ext = '.png';
    }
    elseif(endsWith($_FILES["fileToUpload"]["tmp_name"], '.jpg') || endsWith($_FILES["fileToUpload"]["tmp_name"], '.jpeg')){
        $ext = '.jpg';
    }

    $target_dir = "img/payment/";
    $target_file = $target_dir . $order_id;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file . $ext)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $full = $target_file . $ext;
            sql_insert("insert into admin_order_check(order_id,user_id,slip_img)
            values($order_id,{$_SESSION['user']['user_id']},'img/payment/$full')");
             sql_update("update orders set status = 1 where orders_id = $order_id");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
*/



        $target_dir = "img/payment/";
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
                sql_insert("insert into admin_order_check(order_id,user_id,slip_img) values($order_id,{$_SESSION['user']['user_id']},'$img')");
            }
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        }




















    loadView('confirmation', [
        'order_list' => $orders,
        'confirm_img' => $target_file . $ext
    ]);
}
else{
    // no login
    echo 'no';
}


?>

