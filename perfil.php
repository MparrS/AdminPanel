<?php include './header.php'; ?>
<div class="row justify-content-center mt-4">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle mb-3" style="width:120px;height:120px;object-fit:cover;">
                <h4 class="fw-bold mb-1">Alejandra Molina</h4>
                <p class="text-muted mb-3">Administrador</p>
                <form>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold">Nombre</label>
                        <input type="text" class="form-control" value="Alejandra Molina">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold">Correo</label>
                        <input type="email" class="form-control" value="alejandra@email.com">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold">Nueva Contraseña</label>
                        <input type="password" class="form-control" placeholder="********">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold">Foto de Perfil</label>
                        <input type="file" class="form-control">
                    </div>
                    <button class="btn btn-primary w-100" type="submit">
                        <i class="fas fa-save"></i> Guardar Cambios
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>