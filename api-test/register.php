<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

function msg($success,$status,$message,$extra = []){
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message
    ],$extra);
}

// INCLUDING DATABASE AND MAKING OBJECT
require __DIR__.'/classes/Database.php';
$db_connection = new Database();
$conn = $db_connection->dbConnection();

// GET DATA FORM REQUEST
$data = json_decode(file_get_contents("php://input"));
$returnData = [];

// IF REQUEST METHOD IS NOT POST
if($_SERVER["REQUEST_METHOD"] != "POST"):
    $returnData = msg(0,404,'Page Not Found!');

// CHECKING EMPTY FIELDS
elseif(!isset($data->username)
    || !isset($data->email)
    || !isset($data->password)
    || !isset($data->fullname)
    || !isset($data->address)
    || !isset($data->dob)
    || !isset($data->gender)
    || !isset($data->phone)
    || empty(trim($data->username))
    || empty(trim($data->email))
    || empty(trim($data->password))
    || empty(trim($data->fullname))
    || empty(trim($data->address))
    || empty(trim($data->dob))
    || empty(trim($data->gender))
    || empty(trim($data->phone))
    ):

    $fields = ['fields' => ['username','email','password','fullname','address','dob','gender','phone']];
    $returnData = msg(0,422,'Please Fill in all Required Fields!',$fields);

// IF THERE ARE NO EMPTY FIELDS THEN-
else:

    $username = trim($data->username);
    $email = trim($data->email);
    $password = trim($data->password);
    $fullname = trim($data->fullname);
    $address = trim($data->address);
    $dob = trim($data->dob);
    $gender = trim($data->gender);
    $phone = trim($data->phone);
    $valid_phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    $valid_phone = str_replace("-", "", $valid_phone);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $returnData = msg(0,422,'Invalid Email Address!');

    elseif(strlen($password) < 8):
        $returnData = msg(0,422,'Your password must be at least 8 characters long!');

    elseif(strlen($username) < 10):
        $returnData = msg(0,422,'Your username must be at least 10 characters long!');

    elseif(strlen($valid_phone) < 10 || strlen($valid_phone) >11):
        $returnData =msg(0,422,'Invalid Phone Number!');

    else:
        try{
            $check_username = "SELECT `username` FROM `customers` WHERE `username`=:username";
            $check_username_stmt = $conn->prepare($check_username);
            $check_username_stmt->bindValue(':username', $username,PDO::PARAM_STR);
            $check_username_stmt->execute();

            $check_email = "SELECT `email` FROM `customers` WHERE `email`=:email";
            $check_email_stmt = $conn->prepare($check_email);
            $check_email_stmt->bindValue(':email', $email,PDO::PARAM_STR);
            $check_email_stmt->execute();

            $check_phone = "SELECT `phone` FROM `customers` WHERE `phone`=:phone";
            $check_phone_stmt = $conn->prepare($check_phone);
            $check_phone_stmt->bindValue(':phone', $phone,PDO::PARAM_STR);
            $check_phone_stmt->execute();



            if($check_email_stmt->rowCount()):
                $returnData = msg(0,422, 'This E-mail already in use!');

            elseif($check_username_stmt->rowCount()):
                $returnData = msg(0,422, 'This Username already in use!');

            elseif($check_phone_stmt->rowCount()):
                $returnData = msg(0,422, 'This phone already in use!');

            else:
                $insert_query = "INSERT INTO `users`(`username`,`password`,`full_name`,`address`,`email`,`DOB`,`gender`,`phone`) VALUES(:name,:password,:fullname,:address,:email,:dob,:gender,:phone)";

                $insert_stmt = $conn->prepare($insert_query);

                // DATA BINDING
                $insert_stmt->bindValue(':name', htmlspecialchars(strip_tags($name)),PDO::PARAM_STR);
                $insert_stmt->bindValue(':email', $email,PDO::PARAM_STR);
                $insert_stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT),PDO::PARAM_STR);
                $insert_stmt->bindValue(':fullname', $fullname,PDO::PARAM_STR);
                $insert_stmt->bindValue(':address', $address,PDO::PARAM_STR);
                $insert_stmt->bindValue(':dob', $dob,PDO::PARAM_STR);
                $insert_stmt->bindValue(':gender', $gender,PDO::PARAM_INT);
                $insert_stmt->bindValue(':phone', $phone,PDO::PARAM_STR);

                $insert_stmt->execute();

                $returnData = msg(1,201,'You have successfully registered.');

            endif;

        }
        catch(PDOException $e){
            $returnData = msg(0,500,$e->getMessage());
        }
    endif;

endif;

echo json_encode($returnData);



/* raw data test
{
    "username":"nguyen thanh long",
    "password":"long1234",
    "fullname":"Nguyễn Thành Long",
    "address":"265 Vũ Trọng Phụng",
    "email":"thanhlong1102@gmail.com",
    "dob":"2002-10-09",
    "gender":2,
    "phone":"0989289067"
}

*/
