<?php
foreach($data as $row)
{
?>
	<div class="articles">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <h1><a href="/fullarticles"> <? print_r($row['article_name']); ?></a></h1>
					<img src= <? print_r($row['article_img']); ?> alt="meizu m6 note">
						<? print_r($row['article_short_text']);
						?> <p><a href="/fullarticles">Читать дальше...</a></p> 		
				</div>
			</div>
		</div>
	</div>
<?
}
?>
