<?php require_once __DIR__ . '/../layout/header.php'; ?>


<div class="container mt-5">


<h1 class="text-center mb-4">
Nuestros Profesores
</h1>



<div class="row">


<?php foreach($profesores as $profesor): ?>


<div class="col-md-4 mb-4">


<div class="card shadow h-100">


<img 
src="img/<?= $profesor['foto'] ?>"
class="card-img-top"
height="250"
>


<div class="card-body">


<h5 class="card-title">
<?= $profesor['nombre'] ?>
</h5>


<p>
<strong>Especialidad:</strong>

<?= $profesor['especialidad'] ?>

</p>


<p>
<?= $profesor['bio'] ?>
</p>



<a 
href="index.php?controller=profesores&action=show&id=<?= $profesor['id'] ?>"
class="btn btn-primary">

Ver perfil

</a>


</div>


</div>


</div>


<?php endforeach; ?>


</div>


</div>


<?php require_once __DIR__ . '/../layout/footer.php'; ?>