<?php include './header.php'; ?>
<div class="d-flex justify-content-between align-items-center mt-3 mb-2">
    <h2 class="fw-bold">Lista de Precios</h2>
    <a href="#" class="btn btn-outline-success">
        <i class="fas fa-plus"></i> Nuevo Producto
    </a>
</div>
<div class="card mb-4">
    <div class="card-body">
        <form class="row g-3 align-items-end" method="GET">
            <div class="col-md-4">
                <label for="pais" class="form-label fw-semibold">País</label>
                <select name="pais" id="pais" class="form-select">
                    <option value="">Todos</option>
                    <option value="México">México</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Perú">Perú</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="sku" class="form-label fw-semibold">SKU</label>
                <input type="text" name="sku" id="sku" class="form-control" placeholder="Buscar SKU">
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
                    <th class="th-blue">País</th>
                    <th class="th-blue">SKU</th>
                    <th class="th-grey">Producto</th>
                    <th class="th-grey">Precio Actual</th>
                    <th class="th-green">Stock</th>
                    <th class="th-pink">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>México</td>
                    <td>SKU-001</td>
                    <td>Producto A</td>
                    <td>$110</td>
                    <td>25</td>
                    <td><span class="badge bg-success">Activo</span></td>
                </tr>
                <tr>
                    <td>Colombia</td>
                    <td>SKU-002</td>
                    <td>Producto B</td>
                    <td>$210</td>
                    <td>10</td>
                    <td><span class="badge bg-danger">Inactivo</span></td>
                </tr>
                <tr>
                    <td>Perú</td>
                    <td>SKU-003</td>
                    <td>Producto C</td>
                    <td>$160</td>
                    <td>40</td>
                    <td><span class="badge bg-success">Activo</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header fw-bold">Distribución de Stock</div>
            <div class="card-body">
                <canvas id="stockChart" height="200"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header fw-bold">Precios por Producto</div>
            <div class="card-body">
                <canvas id="preciosChart" height="200"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const stockChart = document.getElementById('stockChart').getContext('2d');
new Chart(stockChart, {
    type: 'doughnut',
    data: {
        labels: ['Producto A', 'Producto B', 'Producto C'],
        datasets: [{
            data: [25, 10, 40],
            backgroundColor: ['#007bff', '#dc3545', '#28a745']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

const preciosChart = document.getElementById('preciosChart').getContext('2d');
new Chart(preciosChart, {
    type: 'bar',
    data: {
        labels: ['Producto A', 'Producto B', 'Producto C'],
        datasets: [{
            label: 'Precio Actual',
            data: [110, 210, 160],
            backgroundColor: ['#007bff', '#dc3545', '#28a745']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>
<?php include './footer.php'; ?>