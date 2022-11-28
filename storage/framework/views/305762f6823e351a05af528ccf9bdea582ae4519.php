

<?php $__env->startSection('body'); ?>
<div class="container bg-secondary text-white p-3">
<h2><?php echo e($publisher_data->name); ?></h2>
<h2><?php echo e($publisher_data->address); ?></h2>
<h2><?php echo e($publisher_data->phone); ?></h2>
<h2><?php echo e($publisher_data->email); ?></h2>
</div>
<div class="container-sm d-flex flex-row flex-wrap gap-4 mt-4 mb-4 ">
    <?php $__currentLoopData = $publisher_data->show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
            <div class="card-body">
                
                <img src="<?php echo e(url('/images')); ?>/<?php echo e($show->image); ?>"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
                <h5 class="card-title"><?php echo e($show->title); ?></h5>
                <h5>By</h5>
                <p class="card-text"><?php echo e($show->author); ?></p>
                <hr>
                <button class="btn btn-primary"><a href="/book/<?php echo e($show->id); ?>" class="text-white " style="text-decoration: none"> Detail</a></button>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy  Book Store 2022</h2>
</footer>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\utsWebProg\resources\views/publishers.blade.php ENDPATH**/ ?>