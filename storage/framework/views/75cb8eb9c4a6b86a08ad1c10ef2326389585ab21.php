
<?php $__env->startSection('title', 'Enquiry'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('bundles/datatables/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div class="main-content">
   <section class="section">

    <div class="section-body"> 
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible show fade"> <?php echo e(session('success')); ?> </div>
            <?php endif; ?>
                 
        
                <div class="card card-primary">
  
                    <div class="card-body">
  
                    <div class="row">
                    <div class="col-md-10 col-sm-12 mb-3">
                    <h6 class="col-deep-purple">Branch Details</h6>
                    </div>
                    <div class="col-md-2 col-sm-12 mb-3">
                      <a href="<?php echo e(route('branch.create')); ?>" class="btn btn-primary btn-block">Add Branch</a>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="table-responsive">
      <table class="table table-striped table-sm" id="myTable">
  
      <thead>
  
        <tr role="row">
        <th>Branch ID</th>
          <th>Name</th>
          <th>Address Line 1</th>
          <th>Address Line 2</th>
          <th>City</th>
          <th>State</th>
          <th>Pin Code</th>
          <th>Mobile No</th>
          <th>Email</th>
          <th>Manager Name</th>
          <th>Edit </th>
          <th>Action</th>
        </tr>
  
        </thead>
  
        <tbody>
          <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($branch->id); ?></td>
            <td><?php echo e($branch->name); ?></td>
            <td><?php echo e($branch->address_line_1); ?></td>
            <td><?php echo e($branch->address_line_2); ?></td>
            <td><?php echo e($branch->city); ?></td>
            <td><?php echo e($branch->state); ?></td>
            <td><?php echo e($branch->pincode); ?></td>
            <td><?php echo e($branch->mob_no); ?></td>
            <td><?php echo e($branch->email); ?></td>
            <td><?php echo e($branch->manager_name); ?></td>
            <td>
              <a href="<?php echo e(route('branch.edit', $branch->id)); ?>" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a>
            </td>
        
            <td>
              <form action="<?php echo e(route('branch.destroy', $branch->id)); ?>" method="post" onsubmit="return confirm('Are you sure you want to Delete This branch?')">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </tbody>
      </table>
    </table>
                </div>
            </div>
        </div>
    </div>

    

            </div>
          

        </div>
    </div>

   </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('bundles/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
<script>
  const table = $('#myTable').DataTable({

    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],

  });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gp\resources\views\branch\index.blade.php ENDPATH**/ ?>