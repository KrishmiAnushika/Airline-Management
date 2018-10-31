<?php


$customerID = $_GET["custID"];
$customerName = $_GET["name"];
$customerAddress = $_GET["address"];
?>
<?php
include "header.php";
?>
    <section class="content-header">
        <h1>
            <?=$title?>
            <small>update customer</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index-1.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?=$title?></li>
        </ol>
    </section>
    <!--            <div class="row">-->
    <!--                <section class="col-lg-5 connectedSortable">-->
    <section class="invoice">
        <div class="form-group">
            <label>Flight ID</label>
            <input type="text" class="form-control" id="txtCustomerID" value=<?=$customerID?> name="Customer-id" readonly>
        </div>
        <div class="form-group">
            <label>Flight Name</label>
            <input type="text" class="form-control" id="txtCustomerName" value=<?=$customerName?> name="Customer-name">
        </div>
        <div class="form-group">
            <label>Flight Number</label>
            <input type="text" class="form-control" id="txtCustomerAddress" value=<?=$customerAddress?>  name="Customer-Address">
        </div>
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" id="txtCustomerAddress" value=<?=$customerAddress?>  name="Customer-Address">
        </div>
        <div>
            <button id="btnupdate" class="btn btn-primary" type="submit">Update Customer</button>
        </div>
    </section>
<?php
include "footer.php";
?>