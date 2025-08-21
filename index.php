<?php include './header.php'; ?>

<div class="d-flex justify-content-between align-items-center mt-3 mb-2">
    <h2 class="fw-bold">Dashboard de Precios</h2>
    <a href="#" class="btn btn-outline-primary">
        <i class="fas fa-file-alt"></i> Ver Reporte
    </a>
</div>

<div class="card mb-4">
    <div class="card-body">
        <form class="row g-3 align-items-end" method="GET">
            <div class="col-md-4">
                <label for="pais" class="form-label fw-semibold">País</label>
                <select name="pais" id="pais" class="form-select">
                    <option value="">Todos los países</option>
                    <option value="México">México</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Perú">Perú</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="sku" class="form-label fw-semibold">SKU</label>
                <input type="text" name="sku" id="sku" class="form-control" placeholder="Ingrese SKU" value="<?= htmlspecialchars($_GET['sku'] ?? '') ?>">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button class="btn btn-primary w-100" type="submit">
                    <i class="fas fa-search"></i> Filtrar
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .table thead th {
        text-align: center;
        vertical-align: middle;
        border: 2px solid #dee2e6;
    }
    .th-blue { background: #007bff; color: #fff; }
    .th-grey { background: #f1f1f1; color: #333; }
    .th-pink { background: #f8d7da; color: #721c24; }
    .th-green { background: #d4edda; color: #155724; }
    .table td, .table th {
        text-align: center;
        vertical-align: middle;
        border: 1.5px solid #dee2e6;
    }
</style>

<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="th-blue">País</th>
                    <th class="th-blue">SKU</th>
                    <th class="th-grey">Precio A</th>
                    <th class="th-grey">Precio B</th>
                    <th class="th-grey">Precio C</th>
                    <th class="th-grey">Precio D</th>
                    <th class="th-grey">Precio E</th>
                    <th class="th-pink">IVA</th>
                    <th class="th-green">Margen B2C</th>
                    <th class="th-grey">Vigencia Inicial</th>
                    <th class="th-grey">Vigencia Final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>México</td>
                    <td>SKU-001</td>
                    <td>$100</td>
                    <td>$110</td>
                    <td>$120</td>
                    <td>$130</td>
                    <td>$140</td>
                    <td>16%</td>
                    <td>15%</td>
                    <td>2025-01-01</td>
                    <td>2025-12-31</td>
                </tr>
                <tr>
                    <td>Colombia</td>
                    <td>SKU-002</td>
                    <td>$200</td>
                    <td>$210</td>
                    <td>$220</td>
                    <td>$230</td>
                    <td>$240</td>
                    <td>19%</td>
                    <td>18%</td>
                    <td>2025-02-01</td>
                    <td>2025-11-30</td>
                </tr>
                <tr>
                    <td>Perú</td>
                    <td>SKU-003</td>
                    <td>$150</td>
                    <td>$160</td>
                    <td>$170</td>
                    <td>$180</td>
                    <td>$190</td>
                    <td>18%</td>
                    <td>17%</td>
                    <td>2025-03-01</td>
                    <td>2025-10-31</td>
                </tr>
                <!-- Puedes agregar más filas aquí -->
            </tbody>
        </table>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header fw-bold">Ventas por País</div>
            <div class="card-body">
                <canvas id="ventasPais" height="150"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header fw-bold">Ingresos Mensuales</div>
            <div class="card-body">
                <canvas id="ingresosMes" height="150"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header fw-bold">Ventas vs Objetivo</div>
            <div class="card-body">
                <canvas id="ventasObjetivo" height="150"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
new Chart(document.getElementById('ventasPais').getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['México', 'Colombia', 'Perú'],
        datasets: [{
            label: 'Ventas',
            data: [120, 90, 60],
            backgroundColor: ['#007bff', '#28a745', '#ffc107']
        }]
    }
});
new Chart(document.getElementById('ingresosMes').getContext('2d'), {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
        datasets: [{
            label: 'Ingresos ($)',
            data: [1000, 1200, 900, 1400, 1300, 1500],
            borderColor: '#17a2b8',
            backgroundColor: 'rgba(23,162,184,0.1)',
            fill: true
        }]
    }
});
new Chart(document.getElementById('ventasObjetivo').getContext('2d'), {
    type: 'doughnut',
    data: {
        labels: ['Ventas', 'Objetivo'],
        datasets: [{
            data: [75, 25],
            backgroundColor: ['#28a745', '#e0e0e0']
        }]
    }
});
</script>

<div class="row mt-3">
    <div class="col-md-3">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>
                <p>Nuevas Ventas</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Tasa de Retención</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44</h3>
                <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Visitantes Únicos</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header fw-bold">Ventas Mensuales</div>
            <div class="card-body">
                <canvas id="ventasMes" height="120"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header fw-bold">Ventas por Región</div>
            <div class="card-body">
                <canvas id="ventasRegion" height="220"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
new Chart(document.getElementById('ventasMes').getContext('2d'), {
    type: 'line',
    data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Ventas',
            data: [120, 150, 170, 140, 180, 200, 220],
            borderColor: '#007bff',
            backgroundColor: 'rgba(0,123,255,0.1)',
            fill: true,
            tension: 0.4
        }]
    }
});
new Chart(document.getElementById('ventasRegion').getContext('2d'), {
    type: 'doughnut',
    data: {
        labels: ['Bogotá', 'Medellín', 'Cali', 'Otras'],
        datasets: [{
            data: [120, 90, 60, 30],
            backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545']
        }]
    }
});
</script>


<?php include './footer.php'; ?>