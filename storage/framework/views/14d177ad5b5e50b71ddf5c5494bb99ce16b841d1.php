

<?php $__env->startSection('content'); ?>

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Add Student
            </div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('student.store')); ?>" id="myForm">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="Nim">Nim</label>
                    <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim" >
                </div>
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="Name" name="Name" class="form-control" id="Name" ariadescribedby="Name" >
                </div>
                <div class="form-group">
                    <label for="Class">Class</label>
                    <input type="Class" name="Class" class="form-control" id="Class" ariadescribedby="Class" >
                </div>
                <div class="form-group">
                    <label for="Major">Major</label>
                    <input type="Major" name="Major" class="form-control" id="Major" ariadescribedby="Major" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Intel\academicIS\resources\views/student/create.blade.php ENDPATH**/ ?>