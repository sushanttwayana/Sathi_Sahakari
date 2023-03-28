
<?php
        $host="localhost";
        $user="root";
        $password="";
        $database="sathisahakari";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['submit']))
        {	
            // variable for customer
            
            $cfn = $_POST['cfn'];
            $cmn = $_POST['cmn'];
            $cln = $_POST['cln'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $mob = $_POST['mob'];
            $cno = $_POST['cno'];
            $idate = $_POST['idate'];
            $gender = $_POST['gender'];
            $nat = $_POST['nat'];
            $acctype = $_POST['acctype'];
            $prof = $_POST['prof'];
            $street = $_POST['street'];
            $mun = $_POST['mun'];
            $wno = $_POST['wno'];
            $district = $_POST['district'];
            $ffn = $_POST['ffn'];
            $fmn = $_POST['fmn'];
            $fln = $_POST['fln'];
            $mfn = $_POST['mfn'];
            $mmn = $_POST['mmn'];
            $mln = $_POST['mln'];
            $gfn = $_POST['gfn'];
            $gmn = $_POST['gmn'];
            $gln = $_POST['gln'];

            $filename = $_FILES["ppimg"]["name"];
            $tempname = $_FILES["ppimg"]["tmp_name"];
            $folder = "../images/".$filename;
            move_uploaded_file($tempname,$folder);

            $filename1 = $_FILES["cimg"]["name"];
            $tempname1 = $_FILES["cimg"]["tmp_name"];
            $folder1 = "../images/".$filename1;
            move_uploaded_file($tempname1,$folder1);

            $sql = "INSERT INTO `customertabletemp`(`cfn`, `cmn`, `cln`,`dob`,`email`, `mob`, `cno`, `idate`, `gender`, `nat`, `acctype`, `prof`, `ppimg`, `cimg`, `street`, `mun`, `wno`, `district`, `ffn`, `fmn`, `fln`, `mfn`, `mmn`, `mln`, `gfn`, `gmn`, `gln`) VALUES ('$cfn','$cmn','$cln','$dob','$email','$mob','$cno','$idate','$gender','$nat','$acctype','$prof','$folder','$folder1','$street','$mun','$wno','$district','$ffn','$fmn','$fln','$mfn','$mmn','$mln','$gfn','$gmn','$gln')";
                if (mysqli_query($con, $sql)) {
                    header('location:../html/home.php');
                }else {
                    echo 'Customer registration failed';
                }

	        mysqli_close($con);
        }
?>

