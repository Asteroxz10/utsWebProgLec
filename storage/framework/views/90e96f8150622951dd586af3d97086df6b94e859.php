
<?php $__env->startSection('document_title', 'home'); ?>

<?php $__env->startSection('body'); ?>
<div class="container bg-secondary text-white p-3 mb-2">
    <h1 >Book List</h1>
</div>

<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
    <div class="row row-cols-3 gap-5">
    <?php $__currentLoopData = $book_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
            <div class="card-body">
                <img src="<?php echo e(url('/images')); ?>/<?php echo e($book->image); ?>"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
                <h5 class="card-title"><?php echo e($book->title); ?></h5>
                <h5>By</h5>
                <p class="card-text"><?php echo e($book->author); ?></p>
                <hr>
                <button class="btn btn-primary"><a href="/book/<?php echo e($book->id); ?>" class="text-white " style="text-decoration: none"> Detail</a></button>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy  Book Store 2022</h2>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\utsWebProg\resources\views/home.blade.php ENDPATH**/ ?>