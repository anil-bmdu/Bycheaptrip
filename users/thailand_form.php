<?php
include "../connection.php";
session_start();
if (($_SESSION["usersID"] == "")) {
    header("Location:../index");
 
}
?>
<style>
    .d-flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .form-row {
        margin: 5px;
    }
</style>

<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Thailand Package Form</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thailand Trip Package</h5>
                        <form class="row g-3" action="" method="post">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="date" id="date" class="form-control date-input" placeholder="Date" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="pax" id="pax" class="form-control" placeholder="PAX" required>
                            </div>
                            <br>
                            <br>
                            <h1 class="text-center text-info">THAILAND</h1>
                            <div class="main bg-info">
                                <div id="formContainer" class="d-flex justify-content-center">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT *
                                                     FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control select2" name="city" id="city">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                        <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control" name="hotel" id="hotel">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control" name="category" id="category">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room" id="room">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night" id="night">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult" id="adult">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="checkinDate" id="checkinDate">
                                        </div>
                                    </div>
                                </div>

                                <button type="button" id="addButton" class="btn btn-primary">Add</button>
                                <!-- city transport -->
                                <div id="formContainer1" class="d-flex justify-content-center">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT *
                                                     FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control select2" name="transcity" id="transcity">
                                                <option value="disabled" selected>Select City</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                        <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>                                                                              
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control" name="transport" id="transport">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory" id="transCategory">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <button type="button" id="addButton1" class="btn btn-primary">Add</button>

                                <!-- end transport -->
                                <div id="formContainer2" class="d-flex justify-content-center">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT *
                                                     FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control select2" name="sightcity" id="sightcity">
                                                <option value="disabled" selected>Select City</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                        <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>  
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing" id="sightseeing">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="addButton2" class="btn btn-primary">Add</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-block btn-primary" id="fetchDataButton">Calculate</button>
                        </form>
                        <form action="insert_data.php" method="post">
                            <!-- main div close -->
                            <table>
                                <tr class="">
                                    <th>Remarks:</th>
                                    <!-- <td><input type="text" name="remarks"> -->
                                    <input type="hidden" name="customer_name" id="dname"/>
                                    <input type="hidden" name="email" id="demail"/>
                                    <input type="hidden" name="phone" id="dphone"/>
                                    <input type="hidden" name="pax" id="dpax"/>
                                    <input type="hidden" name="package_inr" id="totalSumDisplay"/>
                                    <input type="hidden" name="account_id" value="<?php echo $_SESSION['userEmail']; ?>"/>
                                   
                                </span></td>
                                </tr>
                                <tr>
                                    <th>Total THB:</th>
                                        <td><div id="totalthb"></div></td>
                                </tr>
                                <tr>
                                    <th>THB TO INR Rate:</th>
                                    <td><input type="text" name="thbtoinr" value="2.7" /></td>
                                </tr>
                                <tr>
                                    <th>Srvice per person INR Rate:</th>
                                    <td><input type="text" name="inrperpersion" id="inrperpersion" /></td>
                                </tr>
                                <tr>
                                    <th>Total INR:</th>
                                    <td><input type="text" name="total" id="totalSumDisplay" /></td>
                                 
                                </tr>
                            </table>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End No Labels Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->


<?php include("footer.php") ?>




<script>
    var totalSum = 0;
    var allTotalSum = 0;
    // Function to calculate and store data in array format for sightseeing form
    let sightseeingDataArray = [];
    function calculateSightseeingData() {
        // var sightseeingDataArray = []; // Initialize an empty array to store form data
        var totalData = { totalPrice: 0 };
        // Get all form rows for sightseeing
        var formRows = document.querySelectorAll('.form-rows-container-2');

        // Iterate over each form row
        formRows.forEach(function(row) {
            var sightCity = row.querySelector('#sightcity').value;
            var sightseeing = row.querySelector('#sightseeing').value;
            var sightPersion = row.querySelector('#sightPersion').value;
            // var sightCheckinDate = row.querySelector('#sightCheckinDate').value;
            var totalPrice = sightseeing * sightPersion;
            // Create an object with the extracted data
            var formData = {
                sightCity: sightCity,
                sightseeing: sightseeing,
                sightPersion: sightPersion,
                // sightCheckinDate: sightCheckinDate
            };

            // Push the formData object to the sightseeingDataArray
            sightseeingDataArray.push(formData);
            totalData.totalPrice += totalPrice;
        });

        totalSum += totalData.totalPrice;
        // Output the array for demonstration (you can modify this as per your requirement)
        console.log(sightseeingDataArray);
        console.log(totalData);
    }


    // Function to calculate data
    let formDataArray1 = [];
    function calculateData1() {
    // Clear the formDataArray before populating it again
    // formDataArray1 = [];
    var totalData = { totalPrice: 0 };

    // Get all form rows
    var formRows = document.querySelectorAll('.form-rows-container-1');

    // Iterate over each form row
        formRows.forEach(function(row) {
            var city = row.querySelector('#transcity').value;
            var transport = row.querySelector('#transport').value;
            alert(transport);
            var persion = row.querySelector('#transCategory').value;
            alert(persion);
            const temp = 1;
            // var checkinDate = row.querySelector('.checkin-date').value;
            var totalPrice = temp * persion;
            // Create an object with the extracted data
            var formData = {
                city: city,
                transport: transport,
                persion: persion,
                totalPrice: totalPrice,
                // checkinDate: checkinDate
            };

        // Push the formData object to the formDataArray
        formDataArray1.push(formData);
        totalData.totalPrice += totalPrice;
        });
        totalSum += totalData.totalPrice;
        // Output the array for demonstration (you can modify this as per your requirement)
        console.log("All data:", formDataArray1);
        console.log("Total data:", totalData);
    }


    // Function to calculate and store data in array format
    // var formDataArray=[];
    let formDataArray = [];
    function calculateData() {
        // var formDataArray = []; // Initialize an empty array to store form data
        var totalData = { totalPrice: 0 }; // Initialize total data object
        
        // Get all form rows
        var formRows = document.querySelectorAll('.form-rows-container');

        // Iterate over each form row
        formRows.forEach(function(row) {
            var city = row.querySelector('#city').value;
            var hotel = row.querySelector('#hotel').value;
            var category = row.querySelector('#category').value;
            var room = row.querySelector('#room').value;
            var night = row.querySelector('#night').value;
            var adult = row.querySelector('#adult').value;
            // For example, calculate total price
            var totalPrice = category * room * night; // Sample calculation
            
            // Create an object with the extracted data
            var formData = {
                city: city,
                hotel: hotel,
                category: category,
                room: room,
                night: night,
                adult: adult,
                // checkinDate: checkinDate,
                totalPrice: totalPrice
            };

            // Push the formData object to the formDataArray
            formDataArray.push(formData);

            // Accumulate total price
            totalData.totalPrice += totalPrice;
        });

        // Output the array for demonstration (you can modify this as per your requirement)
        console.log("All:",formDataArray);
        console.log("Total:",totalData); // Log total data

        // Return total data if needed
        totalSum += totalData.totalPrice;
        return formDataArray;
    }

    // Function to send data to PHP script
    function sendDataToPHP(formDataArray) {
        var xhr = new XMLHttpRequest();
        var url = "store_data.php";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Log the response from PHP
            }
        };
        var data = JSON.stringify({formDataArray: formDataArray}); // Wrap formDataArray in an object
        xhr.send(data);
    }
    

    // Event listener for the "Add" button click
    document.getElementById('fetchDataButton').addEventListener('click', function() {

        this.style.display = 'none';
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        // var date = document.getElementById('date').value;
        var pax = document.getElementById('pax').value;

        document.getElementById('dname').value = name;
        document.getElementById('demail').value = email;                    
        document.getElementById('dphone').value = phone;
        // document.getElementById('ddate').value = date;
        document.getElementById('dpax').value = pax;
        calculateData(); // Call the function to calculate and store data
        // console.log(formDataArray);
        console.log("formDataArray",formDataArray);
        sendDataToPHP(formDataArray);
       
        calculateData1(formDataArray1);
        console.log("formDataArray1",formDataArray1);
        calculateSightseeingData(sightseeingDataArray);
        console.log("formDataArray2",sightseeingDataArray);
        
        // allTotalSum += totalSum;
        var thb = totalSum/2.7;
        var thbTotalFormatted = thb.toFixed(2);
        var inrPer = Number(totalSum)/Number(pax);
        document.getElementById('totalSumDisplay').value = totalSum;
        document.getElementById('totalSumDisplay1').value = totalSum;
        document.getElementById('totalthb').innerHtml = thbTotalFormatted;
        document.getElementById('inrperpersion').value = inrPer;
        
      
    });
</script>






<script>
    $(document).ready(function() {
        $("#addButton").click(function() {
            var clone = $("#formContainer").find(".form-rows-container").first().clone();
            clone.find('input, select').val('');
            clone.find("select").val("");
            clone.find('.removeButton').remove();
            clone.find('.form-row').last().append('<button type="button" class="btn btn-danger removeButton">Remove</button>');
            $("#formContainer").append(clone);
        });

        $(document).on("click", ".removeButton", function() {
            $(this).closest(".form-rows-container").remove();
        });
    });
    $(document).ready(function() {
        $("#addButton1").click(function() {
            var clone = $("#formContainer1").find(".form-rows-container-1").first().clone();
            clone.find('input, select').val('');
            clone.find("select").val("disabled");
            clone.find('.removeButton').remove();
            clone.find('.form-row').last().append('<button type="button" class="btn btn-danger removeButton">Remove</button>');
            $("#formContainer1").append(clone);
        });

        $(document).on("click", ".removeButton", function() {
            $(this).closest(".form-rows-container-1").remove();
        });
    });
    $(document).ready(function() {
        $("#addButton2").click(function() {
            var clone = $("#formContainer2").find(".form-rows-container-2").first().clone();
            clone.find('input, select').val('');
            clone.find("select").val("disabled");
            clone.find('.removeButton').remove();
            clone.find('.form-row').last().append('<button type="button" class="btn btn-danger removeButton">Remove</button>');
            $("#formContainer2").append(clone);
        });

        $(document).on("click", ".removeButton", function() {
            $(this).closest(".form-rows-container-2").remove();
        });
    });
</script>


<script>
    //date
    $(document).ready(function() {
        $('.date-input').change(function() {
            var selectedDate = $(this).val();
            $('.checkin-date').val(selectedDate);
        });
    });
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#city").change(function(){
            var city_id = this.value;
            // alert(city_id);
            $.ajax({
                url: "hotel.php",
                type:"POST",
                data:{
                    city_id:city_id
                },
                cache: false,
                success:function(result){
                    $("#hotel").html(result);
                    // $("#city").html(<option value="">Select State</option>)
                }
            });
        });

        $("#hotel").change(function(){
            var hotel_id = this.value;
            // alert(hotel_id);
            $.ajax({
                url: "category.php",
                type:"POST",
                data:{
                    hotel_id:hotel_id
                },
                cache: false,
                success:function(result){
                    $("#category").html(result);
                }
            });
        });

        $("#transcity").change(function(){
            var city_id = this.value;
            // alert(city_id);
            $.ajax({
                url: "trans.php",
                type:"POST",
                data:{
                    city_id:city_id
                },
                cache: false,
                success:function(result){
                    $("#transport").html(result);
                    // $("#city").html(<option value="">Select State</option>)
                }
            });
        });

        $("#transport").change(function(){
            var trans_id = this.value;
            // alert(trans_id);
            $.ajax({
                url: "transcategory.php",
                type:"POST",
                data:{
                    trans_id:trans_id
                },
                cache: false,
                success:function(result){
                    $("#transCategory").html(result);
                    // $("#city").html(<option value="">Select State</option>)
                }
            });
        });

        $("#sightcity").change(function(){
            var city_id = this.value;
            // alert(city_id);
            $.ajax({
                url: "sightseeing.php",
                type:"POST",
                data:{
                    city_id:city_id
                },
                cache: false,
                success:function(result){
                    $("#sightseeing").html(result);
                    // $("#city").html(<option value="">Select State</option>)
                }
            });
        });
        
    });
</script>

<!-- <script>
    function populateFirstForm(){
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        // var date = document.getElementById('date').value;
        var pax = document.getElementById('pax').value;
        // //thailand hotel details
        var city = document.getElementById('city').value;
        var hotel = document.getElementById('hotel').value;
        var category = document.getElementById('category').value;
        var room = document.getElementById('room').value;
        var night = document.getElementById('night').value;
        var adult = document.getElementById('adult').value;
        // var checkindate = document.getElementById('checkindate').value;
        // //thailand transport details
        var transcity = document.getElementById('transcity').value;
        var transport = document.getElementById('transport').value;
        var transpersion = document.getElementById('transpersion').value;
        // var transCheckinDate = document.getElementById('transCheckinDate').value;
        // //sightseeing details
        var sightcity = document.getElementById('sightcity').value;
        var sightseeing = document.getElementById('sightseeing').value;
        var sightPersion = document.getElementById('sightPersion').value;
        // var sightCheckinDate = document.getElementById('sightCheckinDate').value;
        var firstTotalInr = category*room*night;
       
        var transTotal = transport*transpersion;
       
        var sightTotal = sightseeing*sightPersion;

      
        var Total = firstTotalInr+transTotal+sightTotal;
        var thbTotal = Number(Total)/2.7;
        var thbTotalFormatted = thbTotal.toFixed(2);
        alert(thbTotalFormatted);
        const thbToInr = 2.7;

        //fetch data in second form
        // Fill data into the second form
        document.getElementById('dname').value = name;
        document.getElementById('demail').value = email;                    
        document.getElementById('dphone').value = phone;
        // document.getElementById('ddate').value = date;
        document.getElementById('dpax').value = pax;

        document.getElementById('dcity').value = city;
        document.getElementById('dhotel').value = hotel;
        document.getElementById('dcategory').value = category;
        document.getElementById('droom').value = room;
        document.getElementById('dnight').value = night;
        document.getElementById('dadult').value = adult;
        // document.getElementById('dcheckindate').value = checkindate;
        document.getElementById('dtranscity').value = transcity;
        document.getElementById('dtransport').value = transport;
        document.getElementById('dtranspersion').value = transpersion;
        // document.getElementById('dtransCheckinDate').value = transCheckinDate;
        document.getElementById('dsightcity').value = sightcity;
        document.getElementById('dsightseeing').value = sightseeing;
        document.getElementById('dsightPersion').value = sightPersion;
        // document.getElementById('dsightCheckinDate').value = sightCheckinDate;
        document.getElementById('dfirstTotalInr').value = firstTotalInr;
        document.getElementById('dtransTotal').value = transTotal;
        document.getElementById('dsightTotal').value = sightTotal;
        document.getElementById('dTotal').value = Total;
        document.getElementById('thbtoinr').value = thbToInr;
        // alert(thbTotalFormatted);
        document.getElementById('thbTotalValue').value = thbTotalFormatted;
    }
    document.getElementById('fetchDataButton').addEventListener('click', function() {
        populateFirstForm();
        alert("hello"); // Call the function to populate the input fields in the first form
    });
            
            
           

</script> -->