<aside class="shadow">
  <div class="headerside text-center pt-3">
      <h2>Data <br> Penjualan</h2>
      <hr>
  </div>

  <main>
      <div class="utama @yield('dash')">
        <a href="/dashboard" class=""><i class="bi bi-house-door-fill"></i>Dashboard</a>
        <hr>
      </div>

      <div class="utama @yield('trans')">
        <a href="/transaksi" class=""><i class="bi bi-cash-stack"></i>Transaksi</a>
        <hr>
      </div>
      <div class="utama @yield('payment')">
        <a href="/payment" class=""><i class="bi bi-credit-card-fill"></i>Pembayaran</a>
        <hr>
      </div>

      <div class="utama @yield('buyer')">
        <a href="/buyer" class=""><i class="bi bi-person-circle"></i>Pembeli</a>
        <hr>
      </div>

      <div class="utama @yield('item')">
        <a href="/item" class=""><i class="bi bi-bag-fill"></i>Barang</a>
        <hr>
      </div>

      <div class="utama @yield('supply')">
        <a href="/supply" class=""><i class="bi bi-people-fill"></i>Supplier</a>
        <hr>
      </div>

      <br><br><br><br>
      <div class="utama keluar">
        <a href="" class=""><i class="bi bi-box-arrow-left"></i>Log Out</a>
      </div>
  </main>
</aside>