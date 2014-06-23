<?php $this->output('header') ?>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<?php $this->output('navbar'); ?>
			<div class="jumbotron well">
				<h1>
					Simpel Reservasi Jadwal
				</h1>
				<p>
					Simpel Reservasi adalah aplikasi simpel tentang studi kasus reservasi menggunakan tanggal, aplikasi ini tentunya banyak kekurangan karena yang membuat baru belajar php
				</p>
				
			</div>
		</div>
	</div>
	<div class="row clearfix">
        <?php if($pages=='jadwal'){?>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <?php $this->output('kalender'); ?>
                </div>
            </div>
        <?php } ?>
        
		<div class="col-md-6 column">
            <?php 
            
            if($pages == 'start') $this->output('forms/start');
            if($pages == 'step1') $this->output('forms/step1');
            if($pages == 'step2') $this->output('forms/step2');
            if($pages == 'step3') $this->output('forms/step3');
            
            ?>
		</div>
        
		<div class="col-md-6 column">
			<?php $this->output('sidebar'); ?>
		</div>
	</div>
    
    <hr />
	<div class="row clearfix">
		<div class="col-md-12 column">
			 <p>&COPY;2014 - Ardha Herdianto , Lisensi bebas boleh ditukar tambah</p>
		</div>
	</div>
</div>
</body>
</html>
