<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title ; ?></title>
        <!-- Font Awesome icons (free version)-->
        <script src="<?= base_url(); ?>assets/frontend/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="<?= base_url(); ?>assets/frontend/css/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url() ; ?>assets/frontend/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/argon.css?v=1.2.') ?>0" type="text/css">

        <style type="text/css">
            .jumbotron {
                background-image: url('<?= base_url() ;?>/assets/img/covid.jpg');
                /*background tidak bergerak*/
                background-attachment: fixed;
                background-size: cover;
                background-position: 0 -100px;
                height: 470px;
                color: #eaeaea;
                overflow: hidden;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger text-light" href="#page-top">MAY KOMPUTER</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="#indonesia">Indonesia</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="#global">Global</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="#about">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron" id="home">
            <div class="container">
                <div class="text-center mt-5">
                    <br><br><br><br><br><br>
                    <h1 class="display-4" style="color: white; font-style: bold;"><b>Pantau Teroos</b></h1>
                    <h1 class="display-4" style="color: white;"><b>Covid 19 / Virus Corona</b></h1>
                </div>
            </div>
        </div>
        
        <!-- Services section-->
        <section class="page-section bg-light" id="indonesia">
            <div class="container">
                <h1 class="text-center mt-0">Total Kasus di Indonesia</h1>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                      <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Positif</h5>
                              <span class="h2 font-weight-bold mb-0"><?= $positif ;?></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="fas fa-briefcase-medical"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                            <a href="#detail-ind" ><span class="text-nowrap">Detail</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                      <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Sembuh</h5>
                              <span class="h2 font-weight-bold mb-0"><?= number_format($sembuh) ;?></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fas fa-home"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                            <a href="#detail-ind" ><span class="text-nowrap">Detail</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                      <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Meninggal</h5>
                              <span class="h2 font-weight-bold mb-0"><?= number_format($meninggal) ;?></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fas fa-procedures"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                            <a href="#detail-ind" ><span class="text-nowrap">Detail</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                      <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Jam</h5>
                              <span class="h2 font-weight-bold mb-0" id="jam"></span>
                              <span class="h2 font-weight-bold mb-0">:</span>
                              <span class="h2 font-weight-bold mb-0" id="menit"></span>
                              <span class="h2 font-weight-bold mb-0">:</span>
                              <span class="h2 font-weight-bold mb-0" id="detik"></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="far fa-clock"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                            <span class="text-nowrap"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                    
                  </div>
            </div>
        </section>

        <section class="page-section mt-5" id="detail-ind">
            <div class="container">
                <h1 class="text-center mt+3">Detail Kasus di Indonesia</h1>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-transparent">
                            <div class="table-responsive">
                                <table id="example" class="table table-hover table-bordered align-items-center" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="table table-warning">
                                            <th>#</th>
                                            <th>Provinsi</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($detail_ind as $dt) : ?>
                                            <tr>
                                                <th><?= $i++ ?></th>
                                                <th><?= $dt['attributes']['Provinsi'] ;?></th>
                                                <th><?= number_format($dt['attributes']['Kasus_Posi']) ;?></th>
                                                <th><?= number_format($dt['attributes']['Kasus_Semb']) ;?></th>
                                                <th><?= number_format($dt['attributes']['Kasus_Meni']) ;?></th>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section bg-light" id="global">
            <div class="container">
                <h1 class="text-center mt-0">Total Kasus Seluruh Dunia</h1>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                      <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Positif</h5>
                              <span class="h2 font-weight-bold mb-0"><?= number_format($confirmed) ;?></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="fas fa-briefcase-medical"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                            <a href="#detail-dunia" ><span class="text-nowrap">Detail</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                      <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Sembuh</h5>
                              <span class="h2 font-weight-bold mb-0"><?= number_format($recovered) ;?></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fas fa-home"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                            <a href="#detail-dunia" ><span class="text-nowrap">Detail</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                      <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Meninggal</h5>
                              <span class="h2 font-weight-bold mb-0"><?= number_format($deaths) ;?></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fas fa-procedures"></i>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                            <a href="#detail-dunia" ><span class="text-nowrap">Detail</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                    
                  </div>
            </div>
        </section>

        <section class="page-section mt-5" id="detail-dunia">
            <div class="container">
                <h1 class="text-center mt+3">Detail Kasus Seluruh Dunia</h1>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-transparent">
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover table-bordered align-items-center" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="table table-warning">
                                            <th>#</th>
                                            <th>Negara</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($detail_dunia as $dt) : ?>
                                            <tr>
                                                <th><?= $i++ ?></th>
                                                <th><?= $dt['attributes']['Country_Region'] ;?></th>
                                                <th><?= number_format($dt['attributes']['Confirmed']) ;?></th>
                                                <th><?= number_format($dt['attributes']['Recovered']) ;?></th>
                                                <th><?= number_format($dt['attributes']['Deaths']) ;?></th>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section-->
        <section class="page-section bg-light" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="mt-0">Covid 19 / Virus Corona</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-10 text-justify" style="color: black;">
                        <p class="mb-3">Penyakit koronavirus 2019 (bahasa Inggris: coronavirus disease 2019, disingkat COVID-19) adalah penyakit menular yang disebabkan oleh SARS-CoV-2, salah satu jenis koronavirus. Penyakit ini mengakibatkan pandemi koronavirus 2019–2020.
                        Penderita COVID-19 dapat mengalami demam, batuk kering, dan kesulitan bernapas. Sakit tenggorokan, pilek, atau bersin-bersin lebih jarang ditemukan.[15] Pada penderita yang paling rentan, penyakit ini dapat berujung pada pneumonia dan kegagalan multiorgan.</p>
                        <p class="mb-3">Infeksi menyebar dari satu orang ke orang lain melalui percikan (droplet) dari saluran pernapasan yang sering dihasilkan saat batuk atau bersin. Waktu dari paparan virus hingga timbulnya gejala klinis berkisar antara 1–14 hari dengan rata-rata 5 hari. Metode standar diagnosis adalah uji reaksi berantai polimerase transkripsi-balik (rRT-PCR) dari usap nasofaring atau sampel dahak dengan hasil dalam beberapa jam hingga 2 hari. Pemeriksaan antibodi dari sampel serum darah juga dapat digunakan dengan hasil dalam beberapa hari. Infeksi juga dapat didiagnosis dari kombinasi gejala, faktor risiko, dan pemindaian tomografi terkomputasi pada dada yang menunjukkan gejala pneumonia.</p>
                        <p class="mb-2">Mencuci tangan, menjaga jarak dari orang yang batuk, dan tidak menyentuh wajah dengan tangan yang tidak bersih adalah langkah yang disarankan untuk mencegah penyakit ini. Disarankan untuk menutup hidung dan mulut dengan tisu atau siku yang tertekuk ketika batuk. Organisasi Kesehatan Dunia (WHO) dan Pusat Pengendalian dan Pencegahan Penyakit AS (CDC) merekomendasikan kepada orang-orang yang menduga bahwa mereka telah terinfeksi untuk memakai masker bedah dan mencari nasihat medis dengan memanggil dokter dan tidak langsung mengunjungi klinik. Masker juga direkomendasikan bagi mereka yang merawat seseorang yang diduga terinfeksi tetapi tidak untuk digunakan masyarakat umum. Belum ada vaksin atau obat antivirus khusus untuk COVID-19; tata laksana yang diberikan meliputi pengobatan terhadap gejala, perawatan suportif, dan tindakan eksperimental. Angka fatalitas kasus diperkirakan antara 1–3%.</p>
                        <a href="https://id.wikipedia.org/wiki/Penyakit_koronavirus_2019" target="_blank"><p class="mb-5"><i> Sumber (https://id.wikipedia.org/wiki/Penyakit_koronavirus_2019)</i></p></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fab fa-sourcetree fa-3x mb-3"></i>
                        <p><a href="https://api.kawalcorona.com" target="_blank">api.kawalcorona.com</a> & <a href="https://covid19.mathdro.id" target="_blank">covid19.mathdro.id</a></p>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3"></i
                        ><p>bastian.nazaromi@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-dark py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © May Komputer <?= date('Y') ; ?></div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="<?= base_url() ; ?>assets/frontend/js/jquery.min.js"></script>
        <script src="<?= base_url() ; ?>assets/frontend/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="<?= base_url() ; ?>assets/frontend/js/jquery.easing.min.js"></script>
        <script src="<?= base_url() ; ?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url() ; ?>assets/frontend/js/scripts.js"></script>
        
        <script src="<?php echo base_url() ;?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ;?>assets/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/@fortawesome/fontawesome-free/js/all.min.js"></script>
        <script src="<?php echo base_url() ;?>assets/js/argon.js?v=1.2.0"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable( {

                });
                $('#example2').DataTable( {

                });
            } );
        </script>
    </body>
</html>

<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        $('#jam').text(tanggal.getHours());
        $('#menit').text(tanggal.getMinutes());
        $('#detik').text(tanggal.getSeconds());
    }
</script>