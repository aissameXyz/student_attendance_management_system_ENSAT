<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
</head>
<body>
    <h1>afficher une filiere</h1>
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
    <tr>
      <td><?php echo e($filiere->id); ?></td>
      <td><?php echo e($filiere->Designation); ?></td>
      <td><?php echo e($filiere->teacher_id); ?></td>
      <td><a href="<?php echo e(route('Filieres.edit',$filiere->id)); ?>" >Modifier <?php echo e($filiere->Designation); ?></a>
      <form action="<?php echo e(route('Filieres.destroy',$filiere->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <input type="submit" value="suprimer <?php echo e($filiere->Designation); ?>">
      </form>
    </td>
    </tr>
  </tbody>
</table>
</body>
</html>






<?php /**PATH C:\Users\Service ok!\Desktop\projet\student_attendance_management_system_ENSAT\resources\views/Filieres/show.blade.php ENDPATH**/ ?>