<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="uk-child-width-expand@s uk-text-center prev-next-list" uk-grid>
	<@ newPagelist { type: 'siblings' } @>
	<@ if @{ :pagelistCount } @>
		<div>
			<@ with prev @>
				<@ prev_next-item.php @>
			<@ end @>
		</div>
		<div>
			<@ with next @>
				<@ prev_next-item.php @>
			<@ end @>
		</div>
	<@ end @>
</div>