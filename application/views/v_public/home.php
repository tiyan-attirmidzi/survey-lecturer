    <div class="content-wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    PENILAIAN KINERJA DOSEN TEKNIK INFORMATIKA UNIVERSITAS HALU OLEO
                    <small>SURVEY</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- col -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">

                            <!-- START Form -->
                            <?php echo form_open_multipart(); ?>
                                <div class="box-header with-border">
                                    <h3 class="box-title">Data Diri Responden</h3>
                                </div>
                                <div class="box-body">
                                    <p>
                                        <!-- skajsjkajskjaksjkaJSKJSKDJAKJDKASJDKJASKDJASKDJKASJDKAJSKDJASK -->
                                    </p>
                                </div>
                                <div class="box-body">
                                    <div id="form-alternative">
                                        <!-- START Alternative -->
                                        <div class="form-group">
                                            <label>Pilih Dosen</label>
                                            <span class="text-danger"> *</span><br>
                                            <small>Pilih Dosen Yang Telah Anda Dapatkan</small>
                                        </div>
                                        <?php foreach ($alternative as $key) { ?>
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" class="minimal lectures_group" name="lecturer[]" id="lecturer-<?php echo $key->id; ?>" value="<?php echo $key->id; ?>">
                                                    <?php echo $key->name; ?>
                                                </label>
                                            </div>
                                        <?php } ?>
                                        <!-- END Alternative -->
                                    </div>
                                    <div id="form-biodata">
                                        <!-- START NIM -->
                                        <div class="form-group">
                                            <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                                            <span class="text-danger"> *</span>
                                            <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
                                        </div>
                                        <!-- END NIM -->


                                        <!-- START Full Name -->
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <span class="text-danger"> *</span>
                                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap" name="name">
                                        </div>
                                        <!-- END Full Name -->

                                        <!-- START Since -->
                                        <div class="form-group">
                                            <label>Angkatan</label>
                                            <span class="text-danger"> *</span>
                                            <select class="form-control" name="since" id="angkatan">
                                                <option>Angkatan 2016</option>
                                                <option>Angkatan 2017</option>
                                                <option>Angkatan 2018</option>
                                            </select>
                                        </div>
                                        <!-- END Since -->
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <?php
                                    echo "<script> var alternative = ".json_encode($alternative)."</script>";
                                    echo "<script> var criteria = ".json_encode($criteria)."</script>";
                                ?>
                                <div id="form-criteria">
                                    <div id="nama_dosen"></div>
                                    <!-- <?php foreach ($alternative as $keyForAlt) { ?>
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><b><?php echo $keyForAlt->name; ?></b></h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="biodata">
                                                <div class="form-group">
                                                    <?php foreach ($criteria as $keyForCri) { ?>
                                                        <label for="nim"><?php echo $keyForCri->name; ?></label><span class="text-danger"> *</span><br>
                                                        <div class="form-group">
                                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                                <input type="radio" name="Value-<?php echo $keyForCri->id . "" . $keyForAlt->id; ?>" class="minimal" required> <?php echo $i; ?>
                                                                <label style="margin-right: 50px">
                                                                </label>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                </div>

                                <div class="box-footer">
                                    <!-- <bu3 class="box-title"><b><?php echo $keyForAlt->name; ?></b></h3>
                                    </div>tton type="submit" class="btn btn-primary" >Selanjutnya</button> -->
                                    <button type="button" class="btn btn-secondary" id="proses">Selanjutnya</button>
                                    <button type="button" class="btn btn-danger" id="cancel_btn">Batal</button>
                                    <button type="button" class="btn btn-primary" id="submit_btn">Proses</button>
                                </div>

                            <?php echo form_close(); ?>
                            <!-- END Form -->

                        </div>
                        <!-- /.box -->

                    </div>
                    <!--/.col -->

                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>

<script>
    $(document).ready(function() {
      $('#submit_btn, #cancel_btn').hide();

        $('#proses').click(function(){
            $('#proses').hide();
            $('#submit_btn, #cancel_btn').show();
            var v = [];
            $('.lectures_group:checked').each(function(i){
                v[i] = $(this).val();
            });
            // console.log(v);
            // console.log(alternative);

            var content  = document.getElementById('nama_dosen');
            var content_display = '';

            content_display += '<div id="content_dosen">'
            $.each(alternative, function(i, alt){
              if(v.includes(alt['id'])){
                content_display += '<div class="box-header with-border"><h3 class="box-title"><b>';
                content_display += alt['name'];
                content_display += '</b></h3></div>';

                content_display += '<div class="box-body"><div id="biodata"><div class="form-group">';

                $.each(criteria, function(j, crit){
                  content_display += '<label for="nim">'+crit['name']+'</label><span class="text-danger"> *</span><br>';
                  content_display += '<div class="form-group">';

                  for (var index = 1; index <= 5; index++) {
                    if(index == 1){
                      content_display += '<input type="radio" name="Value-'+alt['id']+''+crit['id']+'" value="'+index+'" class="minimal" checked required>'+index;
                    }else {
                      content_display += '<input type="radio" name="Value-'+alt['id']+''+crit['id']+'" value="'+index+'" class="minimal" required>'+index;
                    }
                    content_display += '<label style="margin-right: 50px">';
                    content_display += '</label>';
                  }

                  content_display += '</div>';

                });

                content_display += '</div></div></div>';

              }
            });
            content_display += '</div>';

            content.innerHTML = content_display;
        });

        $('#cancel_btn').click(function(){
          $('#submit_btn, #cancel_btn').hide();
          $('#proses').show();

          var element = document.getElementById("content_dosen");
          element.parentNode.removeChild(element);
        });

        $('#submit_btn').click(function(){
          var content = {};
          content['biodata'] = {};
          content['biodata']['nim'] = $('#nim').val()
          content['biodata']['name'] = $('#name').val()
          content['biodata']['angkatan'] = $('#angkatan').val()
          content['dosen'] = {};

          var v = [];
          $('.lectures_group:checked').each(function(i){
            v[i] = $(this).val();
            content['dosen']['dosen'+(v[i])] = {};
          });

          $.each(alternative, async function(i, alt){
            if(v.includes(alt['id'])){
              data = {}
              $.each(criteria, async function(j, crit){
                data[''+alt['id']+'-'+crit['id']] = $('input[name=Value-'+alt['id']+''+crit['id']+']:checked').val();;
              });
              content['dosen']['dosen'+alt['id']] = data;
            }
          });
          console.log(content);
          var json_data = JSON.stringify(content);
          console.log(json_data);
          $.ajax({
            type: "POST",
            url: "post_data",
            data: {data : json_data},
            cache: false,

            success: function(data){
              console.log(data);
                // alert("OK");
            }
          });

        });

    });

</script>
