

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MTPL</title>
    <link rel="stylesheet" href="ptcss.css">
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="head">
        <center><h1>MTPL</h1></center>
    </div>>
    <div class="nav">
        <ul>
        <li><input type="button" value="Register" id="btn1" class="active"></li>
        <li><input type="button" value="Show Registration" id="btn2" ></li>
        </ul>
    </div>
    <section>
        <div id="content1">
        <div id="details" >
          <div id="Modif" >
            <center><h3>Details</h3></center>
            <div id="detl">


               


           

             <form id="form" name="myform" action="" method="POST" onsubmit="return validateForm()">
                <br><br>

                <?php 
            
            include "connection.php";
             $STB_No= $_GET['STB_No'];
            
             $showquery = "select * from registrations where STB_No=$STB_No";
             $showdata = mysqli_query($conn,$showquery);
             $arrdata = mysqli_fetch_assoc($showdata);

            if(isset($_POST['submits'])){

            $STB_No = $_GET['STB_No'];
            $stbs = $_POST['STB_No'];
             $fnames = $_POST['Name'];
            $mnums = $_POST['Mobile_no'];
            $emails = $_POST['Email'];
             $addresses = $_POST['Address'];
            $pcodes = $_POST['Pincode'];
            $adnos = $_POST['Adhar_no'];

    //$insertquery = "insert into registrations(
		//STB_No,Name,Mobile_No,Email,Address,Pincode,Adhar_No) values('$stbs','$fnames',
        //'$mnums','$emails','$addresses','$pcodes','$adnos')";


        $query = " UPDATE registrations SET Name='$fnames',Mobile_no='$mnums',Email='$emails',
        Address='$addresses',Pincode='$pcodes',Adhar_no='$adnos' WHERE STB_No=$STB_No";
        $res = mysqli_query($conn,$query);

        if($res){
            header("location:pform.php");
        }else{
            echo "error occured";
        }       
    }
    
            
            ?>
                <label for="STB_No">STB NO. :</label>&nbsp &nbsp &nbsp &nbsp
               <input type="number" name="STB_No" value="<?php echo $arrdata['STB_No'];?>" ><br><br><br><br>

               <label for="Name">Name &nbsp &nbsp : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="text" name="Name"  value="<?php echo $arrdata['Name'];?>"><br><br><br><br>

               <label for="Mobile_no">Mobile NO.    : </label>&nbsp 
               <input type="text" name="Mobile_no" value="<?php echo $arrdata['Mobile_no'];?>" ><br><br><br><br>

               <label for="Email">Email : </label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               <input type="Email" name="Email" value="<?php echo $arrdata['Email'];?>"><br><br><br><br>

               <label for="Address">Address : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="textarea" name="Address" value="<?php echo $arrdata['Address'];?>"><br><br><br><br>

               <label for="Pincode">Pincode : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="text" name="Pincode" value="<?php echo $arrdata['Pincode'];?>"><br><br><br><br>

               <label for="Adhar_no">Aadhar No. : </label>&nbsp &nbsp 
               <input type="text" name="Adhar_no" value="<?php echo $arrdata['Adhar_no'];?>"><br><br><br><br>
               
                <input type="submit" name="submits" value="update" id="change">
                   <br><br><br>
            </form>
            </div>
          </div>
        </div>
        </div>
        </section>
    <script src="javast.js"></script>
</body>
</html>