  <!-- Earnings (Monthly) Card Example -->
          <?php foreach($allanggota as $ag): ?>
            <?php
              if($ag['status_anggota']=='aktif'){
                $border='border-left-primary';
              }else if($ag['status_anggota']=='non aktif'){
                $border='border-left-success';
              }else if($ag['status_anggota']=='menikah'){
                $border='border-left-warning';
              }else{
                $border='border-left-danger';
              }
              if($ag['jabatan_anggota']=='anggota'){
                $warna='#fff';
                $pengurus='';
              }else{
                $warna='#ddd';
                $pengurus='<i class="fas fa-award fa-1x text-warning"></i>';
              }
            ?>
            <div class="col-md-6 mb-1">
              <div class="card <?=$border; ?> shadow h-100 py-0 reqdetail" data-toggle="modal" data-target="#modalDetail" data-idanggota="<?=$ag['id_anggota']; ?>">
                <div class="card-body py-1">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2 d-flex">
                      <div style="margin-right:5px">
                        <img class="rounded-circle materialboxed fotoprofil" src="<?=base_url('assets/img/anggota/'.$ag['foto_anggota']); ?>" width="40" height="40">
                      </div>
                      <div>
                        <div class="h5 mb-0 font-weight-bold text-primary"><?=$ag['nama_anggota']; ?> <?=$pengurus; ?></div>
                        <div class="text-xs font-weight-bold text-gray-800 mb-1"><?=$ag['jabatan_anggota']; ?></div>
                      </div>
                    </div>
                    <div class="col-auto">
            <?php if($ag['kelamin_anggota']=='laki-laki'){ ?>
                      <i class="fas fa-mars fa-1x" style="color:#f51d1d"></i>
            <?php }else{ ?>
                      <i class="fas fa-venus fa-1x" style="color:#f72ad5"></i>
            <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>