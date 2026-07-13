<?php require_once __DIR__ . '/../layout/header.php'; ?>


<div class="container mt-5">


<?php if($profesor): ?>


<div class="card shadow">


<div class="card-body text-center">


<img
src="img/<?= $profesor['foto'] ?>"
width="200"
class="rounded-circle"
>


<h2 class="mt-3">
<?= $profesor['nombre'] ?>
</h2>



<h5>
<?= $profesor['especialidad'] ?>
</h5>



<p class="mt-3">

<?= $profesor['bio'] ?>

</p>



<a 
href="index.php?controller=profesores&action=index"
class="btn btn-secondary">

Volver

</a>


</div>


</div>


<?php else: ?>


<h3>
Profesor no encontrado
</h3>


<?php endif; ?>


</div>


<?php require_once __DIR__ . '/../layout/footer.php'; ?>