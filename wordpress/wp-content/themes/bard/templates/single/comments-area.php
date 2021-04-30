<?php

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {

	echo '<div class="comments-area" id="comments">';
		comments_template( '', true );
	echo '</div>';

}

?>