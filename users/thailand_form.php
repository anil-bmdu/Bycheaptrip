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
                        <form class="row g-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control date-input" placeholder="Date" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" placeholder="PAX" required>
                            </div>
                            <!-- <div class="col-12">
                                <input type="text" class="form-control" placeholder="Address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="City" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Pincode">
                            </div> -->
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
                                            <select class="form-control" name="rooms">
                                                <option value="disabled" selected>Select Rooms</option>
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
                                            <select class="form-control" name="nights">
                                                <option value="disabled" selected>Select Nights</option>
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
                                            <select class="form-control" name="adults">
                                                <option value="disabled" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Childs(optional):</label>
                                            <select class="form-control" name="childs">
                                                <option value="disabled" selected>Select Childs</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="checkinDate">
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
                                                <option value="disabled" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="rooms">
                                                <option value="disabled" selected>Select Persion</option>
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
                                            <input type="date" class="form-control checkin-date" name="checkinDate">
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
                                                <option value="disabled" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="rooms">
                                                <option value="disabled" selected>Select Persion</option>
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
                                            <input type="date" class="form-control checkin-date" name="checkinDate">
                                        </div>

                                    </div>
                                </div>
                                <button type="button" id="addButton2" class="btn btn-primary">Add</button>
                            </div>
                            <!-- main div close -->
                            <table>
                                <tr class="">
                                    <th>Remarks:</th>
                                    <td><input type="text" name="remarks"><br></td>
                                </tr>
                                <tr class="p-3">
                                    <th>Total THB:
                                    <th>
                                        <!-- <td>12334</td> -->

                                </tr>
                                <tr>
                                    <th>THB TO INR Rate:</th>
                                    <!-- <td>15</td> -->
                                </tr>
                                <tr>
                                    <th>Srvice per person INR Rate:</th>
                                    <!-- <td>1522</td> -->
                                </tr>
                                <tr>
                                    <th>Total INR:</th>
                                    <!-- <td>1522</td> -->
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-sm btn-block btn-primary" name="submit">Calculate</button>
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