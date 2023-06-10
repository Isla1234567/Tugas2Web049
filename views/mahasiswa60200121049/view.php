<?php
    use yii\widgets\DetailView;
?>
<!-- ======= Databases Section ======= -->
<section id="Databases" class="Databases">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Databases</h2>
      <p>Details Databases</p>
    </div>
    <div>
        <?=
            DetailView::widget([
                'model' => $mahasiswa60200121049,
                'attributes' => [
                    'id049',
                    'no_induk_mahasiswa049',
                    'nama_mahasiswa049',
                    'kelas049',
                    'status049',                                
                ],
            ]);
        ?>
    </div>
  </div>
</section><!-- End Databases Section -->

