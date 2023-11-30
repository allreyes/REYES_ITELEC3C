<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          All Brands
            </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
      <div class="container">
      <div class="row">
      <div class="col-md-8">
        <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo e(session('success')); ?>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?> 
        <div class="card">
            <div class="card-header">
                All Brands
              </div>  
          <div class="card-body">
          
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Brand Image</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $i = 1;
                ?>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row"><?php echo e($i++); ?></th>
                    <td><?php echo e($brand->brand_name); ?></td>
                    <td><img src="<?php echo e(asset($brand->brand_image)); ?>" alt ="" style="width: 70px; height: 40px;"></td>
                    <td><?php echo e($brand->created_at->diffForHumans()); ?></td>
                   
                    <td>
                      <a href="<?php echo e(url('brand/edit/'.$brand->id)); ?>" class="btn btn-info">Edit</a>
                      <a href="<?php echo e(url('brand/remove/'.$brand->id)); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Remove</a>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </tbody>
              </table>
              <?php echo e($brands->links()); ?>

            </div>
        
            </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    Add Brands
                  </div>  
                  <div class="card-body">
                   
                    <form action="<?php echo e(route('add.brand')); ?>" method="POST" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for= "brandname" class="form-label">Brand Name</label>
                        <input type="text" name ="brand_name"class="form-control">
                        <?php $__errorArgs = ['brand_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="form-group">
                        <label for= "brandimage" class="form-label">Brand Image</label>
                        <input type="file" name ="brand_image"class="form-control">
                        <?php $__errorArgs = ['brand_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Allyson\Downloads\New folder (25)\REYES_ITELEC3C\resources\views/brand/index.blade.php ENDPATH**/ ?>