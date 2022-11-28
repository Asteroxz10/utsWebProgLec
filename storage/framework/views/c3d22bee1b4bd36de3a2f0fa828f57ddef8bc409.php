

<?php $__env->startSection('body'); ?>
 <div class="container">
    <div class="bg-secondary text-white p-3">
        <h2>Book detail</h2>
    </div>
    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(url('/images')); ?>/<?php echo e($detail->image); ?>"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
    <p><b>Title     :</b> <?php echo e($detail->title); ?></p>
    <p><b>Author    :</b> <?php echo e($detail->author); ?></p>
    <p><b>Publisher :</b> <?php echo e($detail->name); ?></p>
    <p><b>Year      :</b> <?php echo e($detail->year); ?></p>
    <p><b>Synopsis  :</b></p>
    <p style="width: 50%"><?php echo e($detail->synopsis); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
 <footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy  Book Store 2022</h2>
</footer>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\utsWebProg\resources\views/book_detail.blade.php ENDPATH**/ ?>