

<?php $__env->startSection('body'); ?>
<div class="container">
    <h2 class="bg-secondary text-white p-4"><?php echo e($book_list->name); ?></h2>
    <?php $__currentLoopData = $getbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row row-cols-3 gap-5">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
            <div class="card-body">
                <img src="<?php echo e(url('/images')); ?>/<?php echo e($get->image); ?>"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
                <h5 class="card-title"><?php echo e($get->title); ?></h5>
                <h5>By</h5>
                <p class="card-text"><?php echo e($get->author); ?></p>
                <hr>
                <button class="btn btn-primary"><a href="/book/<?php echo e($get->id); ?>" class="text-white " style="text-decoration: none"> Detail</a></button>
            </div>
        </div>
    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy  Book Store 2022</h2>
</footer>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\utsWebProg\resources\views/category.blade.php ENDPATH**/ ?>