<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">
    <div class="card-body">
      <h5 class="card-title">PRODUCTOS <span>| Cantidad para la venta web</span></h5>
      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-patch-check-fill"></i>
        </div>
        <div class="ps-3">
          <h6><?php echo isset($total_productos_web) ? $total_productos_web : 0; ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">
    <div class="card-body">
      <h5 class="card-title">Total <span>| Monetario en Stock</span></h5>
      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-currency-dollar"></i>
        </div>
        <div class="ps-3">
          <h6><?php echo obtener_simbolo_moneda($moneda) . ' ' . $total_monetario; ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">
    <div class="card-body">
      <h5 class="card-title">Grupo:</h5>
      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
          <span class="card-title">
            Natalia Sablich - Ezequiel Di Giacomo
          </span>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</footer>