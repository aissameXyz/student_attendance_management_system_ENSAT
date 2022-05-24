<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body>
    <h1>liste des filieres</h1>
    <?php if($message = Session::get('success')): ?>
    <p><?php echo e($message); ?></p>
    <?php endif; ?>
    <a href="<?php echo e(route('Filieres.create')); ?>">Creer une filiere</a>
    <table class="table table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Designation</th>
      <th scope="col">Teacher_id</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
     <?php $__currentLoopData = $filieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($filiere->id); ?></td>
      <td><?php echo e($filiere->Designation); ?></td>
      <td><?php echo e($filiere->teacher_id); ?></td>
      <td><a href="<?php echo e(route('Filieres.show', $filiere->id)); ?>">afficher <?php echo e($filiere->Designation); ?></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</body>
</html>
<?php /**PATH C:\Users\Service ok!\Desktop\projet\student_attendance_management_system_ENSAT\resources\views/Filieres/index.blade.php ENDPATH**/ ?>