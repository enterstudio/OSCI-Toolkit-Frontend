<figure id="<?php print $item['fig_id']; ?>" data-position="<?php print $item['position']; ?>" data-columns="<?php print $item['columns']; ?>" data-options="<?php print htmlspecialchars($item['options']); ?>">
	<div class='figure_content'><?= $figure_content ?></div>
	<figcaption><?php print $item['number_template'] . ' ' . $item['caption']; ?></figcaption>
</figure>