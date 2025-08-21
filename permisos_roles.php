<?php include './header.php'; ?>
<div class="d-flex justify-content-between align-items-center mt-3 mb-2">
    <h2 class="fw-bold">Permisos y Roles</h2>
</div>
<div class="row">
    <?php
    $usuarios = [
        [
            "nombre" => "Alejandra Molina",
            "rol" => "Administrador",
            "foto" => "https://randomuser.me/api/portraits/women/44.jpg"
        ],
        [
            "nombre" => "Carlos Pérez",
            "rol" => "Editor",
            "foto" => "https://randomuser.me/api/portraits/men/32.jpg"
        ],
        [
            "nombre" => "Lucía Gómez",
            "rol" => "Usuario",
            "foto" => "https://randomuser.me/api/portraits/women/68.jpg"
        ]
    ];
    foreach ($usuarios as $u): ?>
    <div class="col-md-4 mb-4">
        <div class="card text-center">
            <img src="<?= $u['foto'] ?>" class="card-img-top rounded-circle mx-auto mt-3" style="width:100px;height:100px;object-fit:cover;">
            <div class="card-body">
                <h5 class="card-title"><?= $u['nombre'] ?></h5>
                <p class="card-text"><span class="badge bg-primary"><?= $u['rol'] ?></span></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php include './footer.php'; ?>