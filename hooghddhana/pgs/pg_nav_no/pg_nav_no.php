<?php

echo '<div class="pg_navigation2">';

if ($pages >= 1 && $page <= $pages) {
			
			if ($page == 1) {
						
			} else {
				echo '<a class="page_link no_margin"  href="?page=1"><<</a>';
				echo '<a class="page_link"  href="?page='.($page - 1).'">Previous</a>';
			}
			
			if ($pages <= 11) {
				for ($x=1; $x<=$pages; $x++) {
				echo ($x == $page) ? '<a class="page_link active_page" href="?page='.$x.'">'.$x.'</a>' : '<a class="page_link" href="?page='.$x.'">'.$x.'</a>';
				}
				
			} else {
				
				if ($page < 11) {
					for ($x=1; $x<=11; $x++) {
					echo ($x == $page) ? '<a class="page_link active_page"  href="?page='.$x.'">'.$x.'</a>' : '<a class="page_link" href="?page='.$x.'">'.$x.'</a>';		
					}
					
				} else if ($page > ($pages - 10)) {
					for ($x=($pages - 10); $x<=$pages; $x++) {
					echo ($x == $page) ? '<a class="page_link active_page"  href="?page='.$x.'">'.$x.'</a>' : '<a class="page_link" href="?page='.$x.'">'.$x.'</a>';		
					}
					
				} else {
					for ($x=($page - 5); $x<=($page + 5); $x++) {
					echo ($x == $page) ? '<a class="page_link active_page"  href="?page='.$x.'">'.$x.'</a>' : '<a class="page_link" href="?page='.$x.'">'.$x.'</a>';		
					}
				}
				
			}
			
			if ($page == $pages) {
						
			} else {
				echo '<a class="page_link"  href="?page='.($page + 1).'">Next</a>';
				echo '<a class="page_link no_margin" href="?page='.($pages).'">>></a>';
			}
			
		}  
		
echo '</div>';

?>