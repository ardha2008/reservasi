<?php

/**
 * @author Ardha-PC
 * @copyright 2014
 */



?>


            <form role="form" method="post">
            
                <input type="hidden" name="tanggal" value="<?php echo $tanggal ?>"/>
                
				<div class="form-group">
					 <label>Nama </label>
                     <input type="text" name="nama" class="form-control" />
				</div>
                
                <div class="form-group">
					 <label>Email </label>
                     <input type="text" name="email" class="form-control" />
				</div>
                
                <div class="form-group">
					 <label>Alamat </label>
                     <input type="text" name="alamat" class="form-control" />
				</div>
                
                <div class="form-group">
					 <label>Telepon </label>
                     <input type="text" name="telepon" class="form-control" />
				</div>
                
				 <button class="btn btn-default" name="step2">Submit</button>
			</form>