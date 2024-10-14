<?php

	// Подсчёт времени чтения статьи
	function estimated_reading_time(){
		$post = get_post();
		$postcnt = strip_tags( $post->post_content );
		$words = count(preg_split('/\s+/', $postcnt));
		$minutes = floor( $words / 120 );
		$seconds = floor( $words % 120 / ( 120 / 60 ) );
		if (1 <= $minutes){$estimated_time = $minutes . ' read' . ' min ' . ($minutes == 1 ? '' : '');}
		else{$estimated_time =  $seconds . ' read ' . 'seconds' . ($seconds == 1 ? '' : '');}
		echo $estimated_time;
	}