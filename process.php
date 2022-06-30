<?php
session_start();
include 'db.php';
$conn = mysqli_connect("localhost", "root", "", "income");



$checkStatus = (isset($_POST['Password']) && $_POST['Password'] &&
    isset($_POST['Name']) && $_POST['Name'] &&
    isset($_POST['Phone']) && $_POST['Phone']  
) ? true : false;



if (empty($_POST["Password"])) {
    header("location:register.php?d=1&p=password is required");
    exit;
}




if ($checkStatus) 
    $m_sponID = strtoupper(trim($_POST['sponsorid']));

    if (isset($m_sponID) && $m_sponID) 
        $sqli = "SELECT * FROM `level` WHERE `user_id` = '" . $m_sponID . "'";
        $ressp = ($conn.$sqli);
        $numsp = ($ressp);


$time = time();
$a = substr($time, -6);
$user_id = 'reffer' . $a;

$signUpBonus = 60;

// $sponsorid=$user_id;










$Name = $_POST['Name'];
$Phone_no =  $_POST['Phone_no'];
$Password=  $_POST['Password'];  


$sql="SELECT * from `level` Where Phone_no='$Phone_no'";
// print_r($sql);
// die();

        $res=mysqli_query($conn,$sql);
        $persent=mysqli_num_rows($res);
        if($persent>0){
          // header("location:register.php?j=1&exist=phone_no already exist");

           echo "phone_no already exist";
            exit;
        }

        $sql="SELECT * from `level` Where `user_id`='$user_id'";
        // print_r($sql);
        // die();
        
                $res=mysqli_query($conn,$sql);
                $persent=mysqli_num_rows($res);
                if($persent>0){
                  header("location:register.php");

                }


// $sql="SELECT * from `level` Where `user_id`='$spon'";

// $rs=mysqli_query($conn,$sql);
// // print_r($sql);
// // die();

// {
        

// // header("location:register.php?spn=1&sponsor=sponsor id not valid");
           
            
// exit; 
// }    
 
$team_Spon = $sponsorid;
for ($ix = 1; $ix <= 500; $ix++) {
    if (isset($team_Spon) && $team_Spon) {

        if ($ix == 1) {
            $oksqlTeam = "UPDATE `level` SET `team1`=`team1`+1,`level_1`=`level_1`+1 WHERE `user_id` = '" . $sponsorid . "'";
            $oksqlqueryTeam = mysqli_query($conn, $oksqlTeam);
        } elseif ($ix == 2) {
            $oksqlTeam = "UPDATE `level` SET `team1`=`team1`+1,`level_2`=`level_2`+1 WHERE `user_id` = '" .$sponsorid . "'";
            $oksqlqueryTeam = mysqli_query($conn, $oksqlTeam);
        } elseif ($ix == 3) {
            $oksqlTeam = "UPDATE `level` SET `team1`=`team1`+1,`level_3`=`level_3`+1 WHERE `user_id` = '" . $sponsorid . "'";
            $oksqlqueryTeam = mysqli_query($conn, $oksqlTeam);
        } else {
            $oksqlTeam = "UPDATE `level` SET `team1`=`team1`+1 WHERE `user_id` = '" .$sponsorid . "'";
            $oksqlqueryTeam = mysqli_query($conn, $oksqlTeam);
        }

        // $nextSponsor1 = ($conn. $team_Spon. 'sponsorid');
        if (isset($nextSponsor1) && $nextSponsor1) {
            $team_Spon = $nextSponsor1;
        } else {
            break;
        }
    }
}


// $user_id=$sponsorid;

$sqfdf3333222dl1 = "INSERT INTO `level` (`Name`,`Phone_no`,`Password`,`signUpBonus`,`user_id`,`sponsorid`) VALUES ('" .$Name. "', '" . $Phone_no . "', '" . $Password . "', '" . $signUpBonus. "', '" . $user_id. "', '" . $sponsorid. "')";
   
        
// $sql = "INSERT INTO `level`(`Name`,`Phone_no`,`Password`,`signUpBonus`,`user_id` )VALUES(`$Name`,`$Phone_no`,`$Password`,`$signUpBonus`,`$user_id`)";
// print_r($sqfdf3333222dl1);
// die;
if(mysqli_query($conn, $sqfdf3333222dl1)){
echo "<h3>Data stored in a database successfully." 
. " Please browse your localhost php my admin" 
. " to view the updated data</h3>"; 
    
    }
     else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
     }
    
?>
  



