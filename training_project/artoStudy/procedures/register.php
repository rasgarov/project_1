<?php 
error_reporting(0);
include_once("connection/connect.php");

if (isset($_POST['registered'])) {

    // register-email - Email
    // register_user - Istifadeci adi
    // register_password - Shifre
    // register_conpassword - Shifre tesdiqi

    $query1 = sprintf("select count(*) as haveEmail from users where email='".$_POST['register-email']."'");
    $result1 = mysqli_query($conn, $query1);
    $userParams1 = mysqli_fetch_assoc($result1);

    $query2 = sprintf("select  count(*) as haveUser from users where username='".$_POST['register_user']."'");
    $result2 = mysqli_query($conn, $query2);
    $userParams2 = mysqli_fetch_assoc($result2);


    if ($userParams1['haveEmail'] > 0 || $userParams2['haveUser'] > 0) {

        echo '<script type="text/javascript">alert("DİQQƏT!!!\nBu istifadəçi adı və ya email ilə istifadəçi artıq mövcuddur.");</script>';

        echo "<script>window.location = '../login.php#contMain'</script>";

    }else{

        $teacher=0;
        $student=0;
        $parent=0;

        switch ($_POST['user-type']) {
            case 'teacher':
                # code...
                $teacher=1;
                break;
                case 'student':
                # code...
                $student=1;
                break;
                case 'parent':
                # code...
                $parent=1;
                break;
            default:
                echo "Wrong choice";
                break;
        }

        $query3=sprintf("INSERT INTO users (username,password) VALUES('".$_POST['register_user']."','".$_POST['register_password']."');",mysqli_real_escape_string($conn,$_POST['register_user']),mysqli_real_escape_string($conn,$_POST['register_password']));
        $result3 = mysqli_query($conn,$query3);
    
    

        // ,is_student=0,is_teacher=0,is_parent=0 +
        $query4="UPDATE users SET email='".$_POST['register-email']."',is_student=".$student.",is_teacher=".$teacher.",is_parent=".$parent." where username='".$_POST['register_user']."';";
        $result4 = mysqli_query($conn,$query4);
    
       
        echo '<script type="text/javascript">alert("Hörmətli istifadəçi, qeydiyyatınız uğurla tamamlandı!\nEmail,istifadəçi adı və şifrənizi daxil edərək sistemə daxil ola bilərsiniz.");</script>';
        echo "<script>window.location = '../login.php#contMain'</script>";
        
    }

}

?>