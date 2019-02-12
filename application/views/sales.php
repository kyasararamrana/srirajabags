<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sri Raja Bags</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.min.css'); ?>">
</head>
<body>
  <div class="info">
    <h1>Sri Raja Bags</h1>
  </div>
  <div class="container">
    <form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
      <ul id="progressbar">
        <li class="active" style="margin-left: 20%;">Bag Section</li>
        <li>Printing Section</li>
        <li>Qty & Cost Section</li>
      </ul>
      <!-- USER INFORMATION FIELD SET -->
      <fieldset>
        <h2 class="fs-title">Bag Section</h2>
        <h3 class="fs-subtitle">&nbsp;</h3>
        <div class="row">
          <div class="form-group col-md-6">
            <label>Material Type</label>
            <select class="form-control" name="mtype" id="mtype">
              <option value="0">Select</option>
              <option value="1">Nonwoven</option>
              <option value="2">Plastic</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Quality</label>
            <select class="form-control" name="quality" id="quality">
              <option value="0">Select</option>
              <option value="1">Dotted</option>
              <option value="2">Small dots</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Layout</label>
            <select class="form-control" name="layout" id="layout">
              <option value="0">Select</option>
              <option value="1">Horizontal</option>
              <option value="2">Vertical</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Bag Size</label>
            <select class="form-control" name="bsize" id="bsize">
              <option value="0">Select</option>
              <option value="" data-width="10" data-length="14">10x14</option>
              <option value="" data-width="12" data-length="14">12x14</option>
              <!-- <option value="2">10x14</option> -->
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Bag Color</label>
            <select class="form-control" name="bcolor" id="bcolor">
              <option value="0">Select</option>
              <option value="1">Ivory</option>
              <option value="2">White</option>
              <option value="3">R.Green</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Bag GSM</label>
            <select class="form-control" name="bgsm" id="bgsm">
              <option value="0">Select</option>
              <option value="55">55</option>
              <option value="70">70</option>
              <option value="90">90</option>
              <option value="110">110</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Bag Type</label>
            <select class="form-control" name="handletype" id="handletype">
              <option value="0">Select</option>
              <option value="1">D-cut</option>
              <option value="2">Plastic</option>
              <option value="3">Woolen</option>
              <option value="4">Stick</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Handle Material Type</label>
            <select class="form-control handle" name="handletype" id="handlematrialtype">
              <option value="0">Select</option>
              <option value="1">Cloth</option>
              <option value="2">Plastic</option>
              <option value="3">Woolen</option>
              <option value="4">Stick</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Handle Size</label>
            <select class="form-control handle" name="handlesize" id="handlesize">
              <option value="0">Select</option>
              <option value="1">10x30</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Handle Color</label>
            <select class="form-control handle" name="handlecolor" id="handlecolor">
              <option value="0">Select</option>
              <option value="1">Ivory</option>
              <option value="2">White</option>
              <option value="3">R.Green</option>
              <option value="4">Printed Red</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Handle GSM</label>
            <select class="form-control handle" name="handlegsm" id="handlegsm">
              <option value="0">Select</option>
              <option value="1">70</option>
              <option value="2">90</option>
              <option value="3">110</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Sidepatty Type</label>
            <select class="form-control handle" name="sidepattytype" id="sidepattytype">
              <option value="0">Select</option>
              <option value="1">Piping</option>
              <option value="2">Common</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Sidepatty Size</label>
            <select class="form-control handle" name="sidepattysize" id="sidepattysize">
              <option value="0">Select</option>
              <option value="1">4</option>
              <option value="2">6</option>
              <option value="3">8</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Sidepatty Color</label>
            <select class="form-control handle" name="sidepattycolor" id="sidepattycolor">
              <option value="0">Select</option>
              <option value="1">Ivory</option>
              <option value="2">White</option>
              <option value="3">R.Green</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Sidepatty GSM</label>
            <select class="form-control handle" name="sidepattygsm" id="sidepattygsm">
              <option value="0">Select</option>
              <option value="1">70</option>
              <option value="2">90</option>
              <option value="3">110</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Sidepatty Printing Color</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select" name="sidepattyprintcolor" id="" style="width: 100%;">
              <option value="0">Select</option>
              <option value="1">Red</option>
              <option value="2">Green</option>
              <option value="3">Black Blue</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Sidepatty Printing</label>
            <select class="form-control" name="sidepattyprint" id="">
              <option value="0">Select</option>
              <option value="1">Digital Print</option>
              <option value="2">Single Color</option>
              <option value="3">None</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Zip Color</label>
            <select class="form-control" name="zipcolor" id="zipcolor">
              <option value="0">Select</option>
              <option value="1">Red</option>
              <option value="2">Green</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Zip Size</label>
            <select class="form-control" name="zipsize" id="zipsize">
              <option value="0">Select</option>
              <option value="1">50</option>
              <option value="2">60</option>
              <option value="3">70</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Zip Quality</label>
            <select class="form-control" name="zipquality" id="zipquality">
              <option value="0">Select</option>
              <option value="1">First</option>
              <option value="2">Second</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Others</label>
            <select class="form-control" name="others" id="others">
              <option value="0">Select</option>
              <option value="1">Lays</option>
              <option value="2">Bits</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Stitching Type</label>
            <select class="form-control" name="stitchtype" id="stitchtype">
              <option value="0">Select</option>
              <option value="1">Old</option>
              <option value="2">New</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Stitching Thread Color</label>
            <select class="form-control" name="stitchcolor" id="stitchcolor">
              <option value="0">Select</option>
              <option value="1">White</option>
              <option value="2">Red</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Stitching Design</label>
            <select class="form-control" name="stitchtype" id="stitchtype">
              <option value="0">Select</option>
              <option value="1">both sides same design</option>
              <option value="2">different designs</option>
            </select>
          </div>
        </div>
        <input type="button" data-page="1" id="first-tab" name="next" class="next action-button" value="Next" />
      </fieldset>
      <!-- ACQUISITION FIELD SET -->
      <fieldset>
        <h2 class="fs-title">Printing Section</h2>
        <h3 class="fs-subtitle">&nbsp;</h3>
        <div class="row">
          <div class="form-group col-md-6">
            <label>Printing Method</label>
            <select class="form-control" name="printmethod" id="printmethod">
              <option value="0">Select</option>
              <option value="1">Offset</option>
              <option value="2">Screen</option>
              <option value="3">Roll</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Printing Color Type</label>
            <select class="form-control" name="printcolor" id="printcolor">
              <option value="0">Select</option>
              <option value="1">Single</option>
              <option value="2">Double</option>
              <option value="3">Four</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Printing Style</label>
            <select class="form-control" name="printstyle" id="printstyle">
              <option value="0">Select</option>
              <option value="1">Half and Half</option>
              <option value="2">Same Image & Different Printing</option>
              <option value="3">One Side Printing</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Suggested Printing color</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select" name="sugprintcolor" id="sugprintcolor" style="width: 100%;">
              <option value="0">Select</option>
              <option value="1">Red</option>
              <option value="2">Green</option>
              <option value="3">Black Blue</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Language</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select" name="language" id="" style="width: 100%;">
              <option value="0">Select</option>
              <option value="1">Telugu</option>
              <option value="2">English</option>
              <option value="3">Kannada</option>
              <option value="4">Hindi</option>
              <option value="5">Tamil</option>
            </select>
          </div>
        </div>
        <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
        <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
      </fieldset>
      <!-- RETENTION FIELD SET -->
      <fieldset>
        <h2 class="fs-title">Quantity & Cost Section</h2>
        <h3 class="fs-subtitle">&nbsp;</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Expenses</label>
              <input type="text" class="form-control" name="expenses" id="expenses" placeholder="Expenses" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Other Charges</label>
              <input type="text" class="form-control" name="other_charges" id="other_charges" placeholder="Other Charges" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Printing Cost</label>
              <input type="text" class="form-control" name="printing_cost" id="printing_cost">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Block Charges</label>
              <input type="text" class="form-control" name="blockCharges" id="block_charges">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Quantity (in kg's)</label>
              <input type="text" class="form-control" name="quantitykg" id="quantity_kg" placeholder="in kg's" value="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Quantity (required no.of bags per kg)</label>
              <input type="text" class="form-control" name="quantityperkg" id="quantity_per_kg" placeholder="required no.of bags per kg" value="">
            </div>

          </div>
        </div>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td><b>Weight Of Bag</b></td>
              <td id="weight_of_bag">0</td>
            </tr>
            <tr>
              <td><b>Number Of Bags per kg</b></td>
              <td id="no_of_bags_per_kg">0</td>
            </tr>
            <tr>
              <td><b>Cost per bag</b></td>
              <td id="cost_per_bag_value">0</td>
            </tr>
            <tr>
              <td><b>Total Price</b></td>
              <td id="total_price">0</td>
            </tr>
            <tr>
              <td><b>Final Cost</b></td>
              <td id="final_cost">0</td>
            </tr>
          </table>
        </div>
        <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
      </fieldset>
    </form>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
  <script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/js/index.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/select2.full.min.js'); ?>"></script>
  <script type="text/javascript">
    $(function () {
    $('.select2').select2();
    //price calculation
    var additional_gsm = 3;
    $('#handletype').change(function(){
      if ($(this).find('option:selected').text() == 'D-cut') {
        //$('#handlematrialtype,#handlesize,#handlecolor,#handlegsm,#sidepattytype,#sidepattysize,#sidepattycolor,#sidepattygsm').prop('disabled',true);
        $('.handle').prop('disabled',true);
      } else {
        //$('#handlematrialtype,#handlesize,#handlecolor,#handlegsm,#sidepattytype,#sidepattysize,#sidepattycolor,#sidepattygsm').prop('disabled',false);
        $('.handle').prop('disabled',false);
      }
    });
    $('#first-tab').click(function(){
      if ($('#mtype').find('option:selected').text() == 'Nonwoven') {
        //$('').prop('disabled',true);
      } else {
        //$('').prop('disabled',false);
      }
    });
    $('#quantity_kg').keyup(function(){
      if ($('#handletype').find('option:selected').text() == 'D-cut') {
        var handle_weight = 0;
        var cost_per_kg = 170;
        var handle_rate = 0;
        var Weight_of_the_sidepatty = 0;
        var zip_rate = 0;
        var stitching = 0;
        var expenses = $('#expenses').val();
        var other_charges = $('#other_charges').val();
        var printing_cost = $('#printing_cost').val();
        var quantity_kg = $('#quantity_kg').val();
        var block_charges = $('#block_charges').val();
        var minimum_quantity = 0;
        var percentage = 0.45;
        var width = $('#bsize').find('option:selected').data('width');
        var length = $('#bsize').find('option:selected').data('length');
        var bgsm = $('#bgsm').find('option:selected').val();
        //weight of bag
        var weight_of_bag_formula = (width * ((length * 2) + 5) * (parseInt(bgsm) + parseInt(additional_gsm))) / 1550;
        var weight_of_bag = weight_of_bag_formula;
        $('#weight_of_bag').text(weight_of_bag);
        //no of bags per kg
        var no_of_bags_per_kg_formula = 1000/weight_of_bag;
        var no_of_bags_per_kg = no_of_bags_per_kg_formula;
        $('#no_of_bags_per_kg').text(no_of_bags_per_kg);
        //cost of the bag
        var cost_per_bag_formula = ((weight_of_bag / 1000) * cost_per_kg);
        var cost_per_bag_value = cost_per_bag_formula;
        var final_cost_per_bag = cost_per_bag_value + (cost_per_bag_value * percentage) + (parseInt(printing_cost));
        $('#cost_per_bag_value').text(final_cost_per_bag);
        //total bag cost
        var total_cost = final_cost_per_bag * parseInt(quantity_kg) * no_of_bags_per_kg;
        $('#total_price').text(total_cost);
        //final cost
        var final_cost = (parseInt(total_cost)) + (parseInt(other_charges)) + (parseInt(expenses)) + (parseInt(block_charges));
        $('#final_cost').text(final_cost);

      }
    });
  });
  </script>
</body>
</html>
