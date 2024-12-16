
<?php $__env->startSection('title', 'Branch Edit'); ?>
<?php $__env->startSection('main'); ?>
<div class="main-content">
   <section class="section">
      <div class="section-body"> 
          <div class="row">
              <div class="col-12">
                  <div class="card card-primary" x-data="app">
                     <form method="post" id="myForm"  action="<?php echo e(route('branch.update', $branch->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                      <div class="card-body">


                      <div class="row">

                        <div class="col-md-12 col-sm-12 mb-3">
                            <h6 class="col-deep-purple">Update Branch</h6>
                        </div>

                        <div class="form-group col-lg-3">
                           <label>Name</label>
                            <input type="text" name="name" value="<?php echo e($branch->name); ?>" class="form-control form-control-sm" required>
                       </div>
                      
                      
                  <div class="form-group col-lg-3">
                    <label>Address Line1</label>
                    <input type="text" name="address_line_1" value="<?php echo e($branch->address_line_1); ?>" class="form-control form-control-sm" required>
                </div>

                <div class="form-group col-lg-3">
                  <label>Address Line2</label>
                  <input type="text" name="address_line_2" value="<?php echo e($branch->address_line_2); ?>" class="form-control form-control-sm" required>
              </div>

              <div class="form-group col-lg-3">
                <label>City</label>
                 <select name="city" id="city" class="form-control form-control-sm" required>
                   <option value="">Select City</option>
                   <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($district->District); ?>" <?php if($branch->city == $district->District): ?> selected <?php endif; ?>><?php echo e($district->District); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
            </div>

            <div class="form-group col-lg-3">
                <label>State</label>
                <select name="state" class="form-control form-control-sm" required>
                  <option value="">Select State</option>
                  <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($state->State); ?>" <?php if($branch->state == $state->State): ?> selected <?php endif; ?>><?php echo e($state->State); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
           </div>

              <div class="form-group col-lg-3">
                <label>Pincode</label>
                <input type="number" name="pincode" value="<?php echo e($branch->pincode); ?>" class="form-control form-control-sm" required>
            </div>

            <div class="form-group col-lg-3">
              <label>Contact Mobile No</label>
              <input type="text" name="mob_no" value="<?php echo e($branch->mob_no); ?>" maxlength="10" class="form-control form-control-sm <?php $__errorArgs = ['mob_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
              <?php $__errorArgs = ['mob_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="alert alert-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
           </div>

           <div class="form-group col-lg-3"> 
            <label>Email</label>
            <input type="text" name="email" value="<?php echo e($branch->email); ?>" class="form-control form-control-sm">
         </div>

         <div class="form-group col-lg-3">
            <label>Manager Name</label>
             <input type="text" name="manager_name" value="<?php echo e($branch->manager_name); ?>" class="form-control form-control-sm">    
         </div>

         <div class="form-group col-lg-12">
             <button type="submit" class="btn btn-primary">Submit</button>
         </div> 
                      </div>
                      </div>
                     </form>
                  </div>
              </div>
          </div>
      </div>
   </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gp\resources\views\branch\edit.blade.php ENDPATH**/ ?>