<?php

/**
 * @author Ardha-PC
 * @copyright 2014
 */

?>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?= $this->location(); ?>">Simpel Reservasi Online</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?= $this->location('home/jadwal') ?>">Jadwal</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://www.facebook.com/ardha.down">@ardha</a></li>
					</ul>
				</div>
			</nav>