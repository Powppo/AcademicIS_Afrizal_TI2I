

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>INFORMATION TECHNOLOGY-STATE POLYTECHNIC OF MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="<?php echo e(route('student.create')); ?>"> Input Student Data</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Name</th>
            <th>Class</th>
            <th>Major</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td><?php echo e($mhs ->nim); ?></td>
            <td><?php echo e($mhs ->name); ?></td>
            <td><?php echo e($mhs ->class); ?></td>
            <td><?php echo e($mhs ->major); ?></td>
            <td>
            <form action="<?php echo e(route('student.destroy',['student'=>$mhs->nim])); ?>" method="POST">

                <a class="btn btn-info" href="<?php echo e(route('student.show',$mhs->nim)); ?>">Show</a>

                <a class="btn btn-primary" href="<?php echo e(route('student.edit',$mhs->nim)); ?>">Edit</a>
            
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Intel\academicIS\resources\views/student/index.blade.php ENDPATH**/ ?>