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
             <form id="form" name="myform" action="Insert.php" method="POST" onsubmit="return validateForm()">
                <br><br>
                <label for="STB_No">STB NO. :</label>&nbsp &nbsp &nbsp &nbsp
               <input type="number" name="STB_No"><br><br><br><br>

               <label for="Name">Name &nbsp &nbsp : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="text" name="Name" ><br><br><br><br>

               <label for="Mobile_no">Mobile NO.    : </label>&nbsp 
               <input type="text" name="Mobile_no" ><br><br><br><br>

               <label for="Email">Email : </label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               <input type="Email" name="Email"><br><br><br><br>

               <label for="Address">Address : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="textarea" name="Address"><br><br><br><br>

               <label for="Pincode">Pincode : </label>&nbsp &nbsp &nbsp &nbsp
               <input type="text" name="Pincode"><br><br><br><br>

               <label for="Adhar_no">Aadhar No. : </label>&nbsp &nbsp 
               <input type="text" name="Adhar_no"><br><br><br><br>
               
                <input type="submit" value="submit" id="change">
                   <br><br><br>
            </form>
            </div>
          </div>
        </div>
        </div>
        <br><br><br>
        
        <div id="content2" style="display:none" >
            <center>
            <table Border="4" id="show">
            <tr>
            <th>STB No</th>
            <th>Name</th>
            <th>Mobile no</th>
            <th>Email</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>Adhar no</th>
            <th>Delete</th>
            <th>Update</th>
            </tr>
            <?php include "read.php" ?>
            </table>
            </center>
        </div>
    </section>
    <script src="javast.js"></script>
</body>
</html>