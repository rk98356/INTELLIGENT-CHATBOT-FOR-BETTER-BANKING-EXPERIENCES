<?php include 'header.php'?>
                    <!-- Data Of View Profile -->
                    <br/><br/><br/>
<div style="background:#1E6466;"> 
<center><b style="font-size:25px;color:white;">                        
&nbsp;&nbsp;&nbsp;&nbsp;Account Details
</b></center>
<div style="width:500px;padding:10px; color:black;margin-left: 450px;font-size:20px;background:lightgrey;opacity:0.7;">
    <div id='a'>
    <center>
        <b style="font-size:20px;">                        
            Basic Details
        </b>
    </center>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "fms"); 
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM register where name ='Rohit Kumar'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
        <label>Name</label>
        <br/>
        <input type="text" class="frm_det"placeholder="Agasthya Prasad" value="<?php echo $row['name'];?>" required="true" id="name" disabled>
        <br/>
        <label>Account Number</label>
        <br/>
        <input type="number" placeholder="32828742095" class="frm_det" value="32828742095" required="true" id="ac_no" disabled>
        <br/>
        <label>Balance</label>
        <br/>
        <input type="number" placeholder="4800.00" class="frm_det" value="4800.00" required="true" id="ac_bl" disabled>
        <br/>
        <label>Mobile-no</label>
        <br/>
        <input type="number" placeholder="9546125789" class="frm_det" value="<?php echo $row['mobileno'];?>" required="true" id="mobileno" disabled>
        <br/>
        <label>Email</label>
        <br/>
        <input type="email" placeholder="agasthyap@hotmail.com" class="frm_det"value="<?php echo $row['email'];?>" required="true" id="email" disabled>
        <br/>
    </div>
    <div id='b'>
        <center>
            <b style="font-size:20px;">                        
                Personal Details
            </b>
        </center>     
        <label style="margin-top:10px; margin-bottom:0px;">DOB</label>
        <br/>
        <input type="text" placeholder="18/07/2000" class="frm_det" value="<?php echo $row['dob'];?>"required="true" id="dob" disabled>
        <br/>
        <label style="margin-top:10px; margin-bottom:0px;">Address</label>
        <br/>
        <input type="text" placeholder="24*7 Church Road, Mombaya, India" class="frm_det" value="<?php echo $row['address'];?>" required="true" id="address" disabled/>
        <br/><br/>
    </div>
</div>
</div>
    <?php
            }
        } else {
            echo "No results";
            }
            $conn->close();
            ?>  <br/><br/><br/>
<?php include 'footer.php'?>
