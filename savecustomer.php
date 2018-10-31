<?php

include "header.php";
?>
<section class="content-header">
    <h1>
        <?=$title?>
        <small>new flight</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index-1.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$title?></li>
    </ol>
</section>
<!--            <div class="row">-->
<!--                <section class="col-lg-5 connectedSortable">-->
<section class="invoice">
    <div class="row">
        <div class="col-sm-1">
            Airline ID
        </div>
        <div class="col-sm-4">
            <select class="form-control" name='custID' id="combo">
                <?php
                while ($rowData = mysqli_fetch_row($resultset1)) {
                    echo "<option id='cmbCustomer' value='$rowData[0]'>$rowData[0]</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    Airline Name
                </div>
                <div class="col-sm-5">
                    <input id="custName" name="txtName" class="form-control" value="" readonly>
                </div>

        </div>

    <div class="form-group">
        <label>Flight ID</label>
        <input type="text" class="form-control" id="txtCustomerID" placeholder="Enter Flight ID" name="Customer-id">
    </div>
    <div class="form-group">
        <label>Flight Name</label>
        <input type="text" class="form-control" id="txtCustomerName" placeholder="Enter Flight Name" name="Customer-name">
    </div>
    <div class="form-group">
        <label>Flight Number</label>
        <input type="text" class="form-control" id="txtCustomerAddress" placeholder="Enter Flight Number" name="Customer-Address">
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" id="txtCustomerAddress" placeholder="Enter Type" name="Customer-Address">
    </div>
    <div>
        <button id="btnsave" class="btn btn-primary" type="submit">Save Flight</button>
    </div>
</section>
<?php
include "footer.php";
?>
