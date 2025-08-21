<?php include './header.php'; ?>
<div class="d-flex justify-content-between align-items-center mt-3 mb-2">
    <h2 class="fw-bold">Histórico de Precios</h2>
    <a href="#" class="btn btn-outline-secondary">
        <i class="fas fa-download"></i> Exportar Histórico
    </a>
</div>
<div class="card mb-4">
    <div class="card-body">
        <form class="row g-3 align-items-end" method="GET">
            <div class="col-md-4">
                <label for="sku" class="form-label fw-semibold">SKU</label>
                <input type="text" name="sku" id="sku" class="form-control" placeholder="Buscar SKU">
            </div>
            <div class="col-md-4">
                <label for="fecha" class="form-label fw-semibold">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button class="btn btn-primary w-100" type="submit">
                    <i class="fas fa-search"></i> Filtrar
                </button>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="th-blue">Fecha</th>
                    <th class="th-blue">País</th>
                    <th class="th-grey">SKU</th>
                    <th class="th-grey">Precio Anterior</th>
                    <th class="th-green">Precio Nuevo</th>
                    <th class="th-pink">Usuario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2025-07-01</td>
                    <td>México</td>
                    <td>SKU-001</td>
                    <td>$100</td>
                    <td>$110</td>
                    <td>Alejandra Molina</td>
                </tr>
                <tr>
                    <td>2025-06-15</td>
                    <td>Colombia</td>
                    <td>SKU-002</td>
                    <td>$200</td>
                    <td>$210</td>
                    <td>Carlos Pérez</td>
                </tr>
                <tr>
                    <td>2025-05-20</td>
                    <td>Perú</td>
                    <td>SKU-003</td>
                    <td>$150</td>
                    <td>$160</td>
                    <td>Lucía Gómez</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card mt-4">
    <div class="card-header fw-bold">Evolución de Precios (Ejemplo)</div>
    <div class="card-body">
        <canvas id="evolucionPrecios"></canvas>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('evolucionPrecios').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'SKU-001',
            data: [100, 105, 102, 110, 108, 112, 115],
            borderColor: '#007bff',
            fill: false
        }]
    }
});
</script>
<?php include './footer.php'; ?>