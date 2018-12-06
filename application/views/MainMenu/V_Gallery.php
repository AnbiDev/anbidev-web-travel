<div class="masonry-gallery">
	<div class="masonry-container">
    
			<?php if (!empty($gallery) && is_array($gallery)): ?>
            <?php foreach ($gallery as $value): ?>
			
			<div class="masonry-block">
				 <div class="baguetteBoxOne">
				 <a href="<?php echo base_url('assets/images/'.$value['file_name']); ?>" data-caption="<?php echo $value['judul']; ?>">
					<img class="animate-box" src="<?php echo base_url('assets/images/'.$value['file_name']); ?>" title="<?php echo $value['judul']; ?>" alt="<?php echo $value['file_name']; ?>"">
                  </a>
				</div>	
			</div>
			
			<?php endforeach ?>
            <?php endif ?>

	</div>
</div>
