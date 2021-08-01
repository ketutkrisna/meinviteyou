<?php foreach($forkomen as $fk): ?>
                    <div class="d-flex" style="margin-bottom:10px;">
                      <img class="rounded-circle" width="30" height="30" src="<?=base_url('assets/img/'.$fk['foto_komentar']); ?>">
                      <span style="margin-left:5px;border:1px solid #ddd;padding:7px;border-radius:0 15px 15px 15px;background-color:#ededed;">
                        <span class="mr-2"><b><?=$fk['nama_komentar']; ?></b>
                      <?php if($fk['level_komentar']=='admin'){echo '<i class="fas fa-award fa-1x text-warning"></i>';} ?>
                        </span> 
                        <span style="font-size:12px;float:right;">
                          <?php 
                            $waktu=time()-$fk['tanggal_komentar'];
                            if($waktu<60){
                              echo $waktu.' detik lalu';
                            }else if($waktu>=60&&$waktu<=3600){
                              $waktumenit=$waktu/60;
                              echo floor($waktumenit).' menit lalu';
                            }else if($waktu>=3600&&$waktu<=86400){
                              $waktujam=$waktu/3600;
                              echo floor($waktujam).' jam lalu';
                            }else if($waktu>=86400&&$waktu<=604800){
                              $waktuhari=$waktu/86400;
                              echo floor($waktuhari).' hari lalu';
                            }else if($waktu>=604800&&$waktu<=2592000){
                              $waktuminggu=$waktu/604800;
                              echo floor($waktuminggu).' minggu lalu';
                            }else if($waktu>=2592000&&$waktu<=31536000){
                              $waktubulan=$waktu/2592000;
                              echo floor($waktubulan).' bulan lalu';
                            }else{
                              $waktutahun=$waktu/31536000;
                              echo floor($waktubulan).' tahun lalu';
                            }
                          ?>
                        </span><br>
                          <?=$fk['isi_komentar']; ?><br>
                        <?php if($this->session->userdata('level_user')){ ?>
                          <span class="deletekomen text-danger" data-iddeletekomen="<?=$fk['id_komentar']; ?>" data-idpostkomen="<?=$fk['id_postkomen'] ?>">Hapus</span>
                        <?php } ?>
                      </span>
                    </div>
                <?php endforeach; ?>