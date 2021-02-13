<?php $__env->startSection('inner_block'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('table/css/main_publish_option.css')); ?>">
<div class="a">
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
          <li>Product upload Failed...</li>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
   <li>Product uploaded Successfully</li>
</div> 
<?php endif; ?>
     <form class="form-group" method="POST" action="<?php echo e(route('hub-add_product_submit')); ?>" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

    <!-- ----------------------------------------- option menu------------------------------------ -->
    <div ><select id="product_category" class="form-control" name="product_category" required>
     <option value="">Product Category</option>
     <option value="Grocery">Grocery</option>
     <option value="Vegetables">Vegetables</option>
     <option value="Fruits">Fruits</option>
     <option value="Dried Fruits & Nuts">Dried Fruits & Nuts</option>
     <option value="Ghasitaram Sweets">Ghasitaram Sweets</option>
     <option value="Bread & Bakery">Bread & Bakery</option>
     <option value="Biscuits & Cookies">Biscuits & Cookies</option>
     <option value="Snacks & Beverages">Snacks & Beverages</option>
     <option value="Soft Drinks">Soft Drinks</option>
     <option value="Personal Care">Personal Care</option>
     <option value="Offers">Offers</option>
      </select></div>

  

   <div id="quantity_type" ><select class="form-control" name="quantity_type" required> 
    <option value="">Quantity Type</option>
     <option value="Kg">Kg</option>
     <option value="grams">grams</option>
     <option value="Piece">Piece</option> 
     <option value="Liter">Liter</option> 
     <option value="ml">ml</option> 
     <option value="Dozen">Dozen</option>
     <option value="Pack">Pack</option>
   </select> </div>
     <div class="col-lg-12" >
      <label>Product Image</label>
      <input class="form-control" type="file" name="image" required>
    </div>
      <div class="col-lg-12" >
      <label>Product Name</label>
      <input class="form-control" type="text" name="product_name" value = "" required>
    </div>
    <div class="col-lg-12" >
      <label>Quantity</label>
      <input class="form-control" type="number" name="quantity" value = "" required>
    </div>
    
    <div class="col-lg-12" >
      <label>MRP</label>
      <input class="form-control" type="number" name="mrp" value = "" required>
    </div>
    <div class="col-lg-12" >
      <label>Selling Price</label>
      <input class="form-control" type="number" name="selling_price" value = "" required>
    </div>
<div class="col-lg-12" style="margin-top: 20px;">
      <button type="submit" style="background-color: #fd6e70" class="btn btn-block btn-lg" name="reg_user">Upload Product</button>
    </div>
  </form>
  </div> 
</div>
<style type="text/css">
  .header h2{
    margin-left: 36%;
    color: #4f4f4f;
     padding-top: 8%;
    font-family: 'Arial Black', Gadget, sans-serif;
    margin-bottom: 20px;
  }
  
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/hub_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>