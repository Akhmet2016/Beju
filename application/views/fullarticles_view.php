<div class="articles">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				foreach($data as $row)
				{
					?> <h1> <? print_r($row['article_name']); ?> </h1>
					<!--<img src= <? print_r($row['article_img']); ?> alt="meizu m6 note">-->
					<? print_r($row['article_full_text']);
					?> <p><a href="/articles">Вернуться</a></p> <?
				}
			?>		
			</div>
		</div>
	</div>
</div>