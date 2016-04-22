<!DOCTYPE html>
<!--

    @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
    @Since Apr 22, 2016
    @Time 9:05:23 PM
    @Encoding UTF-8
    @Project Metode-SAW
    @Package Expression package is undefined on line 9, column 16 in Templates/Scripting/EmptyPHPWebPage.php.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Metode Saw</title>

        <?php $this->load->view('admin/layout/CssLayout') ?>

    </head>
    <body>

        <div id="wrapper">

            <?php $this->load->view('admin/layout/HeaderLayout') ?>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Data Normalisasi
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="glyphicon glyphicon-dashboard"></i> Data Normalisasi
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">

                            <a href="<?php echo base_url(); ?>index.php/admin/NormalisasiController/prosesNormalisasi">
                                <button class="btn btn-primary">Proses Normalisasi</button>  
                            </a>

                            <p></p>

                            <table id="calonsiswa" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Criteria 1</th>
                                        <th>Criteria 2</th>
                                        <th>Criteria 3</th>
                                        <th>Criteria 4</th>
                                        <th>Criteria 5</th>
                                        <th>Total Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($normalisasi as $n) { ?>
                                        <tr>
                                            <td><?php echo $n->nim; ?></td>
                                            <td><?php echo $n->nama; ?></td>
                                            <td><?php echo $n->nilai_c1; ?></td>
                                            <td><?php echo $n->nilai_c2; ?></td>
                                            <td><?php echo $n->nilai_c3; ?></td>
                                            <td><?php echo $n->nilai_c4; ?></td>
                                            <td><?php echo $n->nilai_c5; ?></td>
                                            <td><?php echo $n->total_nilai; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('admin/layout/JsLayout') ?>
    </body>
</html>
