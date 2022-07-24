<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt"></i>Dashboard
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang</h4>
    <p>Selamat datang <strong><?= $username ?></strong> di sistem informasi Desa Kragailan , Anda Login Sebagai <strong><?= $level ?></strong></p>
    <hr>
    
      <i class="fas fa-cogs"></i>Control Panel
    </button>
  </div>

    <!-- Button trigger modal -->
  

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>Control Panel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
      </div>
    </div>
  </div>
</div>