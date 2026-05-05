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
                <div class="card-body"><!--  Stock Actual * Precio -->
                  <h5 class="card-title">Total <span>| Monetario en Stock</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo (isset($simbolo_moneda) ? $simbolo_moneda : '') . ' ' . (isset($total_monetario) ? $total_monetario : 0); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files 2023-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File 2023-->
  <script src="assets/js/main.js"></script>

</body>

</html>
