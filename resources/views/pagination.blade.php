<?php 
	if (is_int($items->total()/$items->perPage())) {
		$cant_page = $items->total()/$items->perPage();
	} else {
		$cant_page = floor($items->total()/$items->perPage())+1; 
	}
?>
<nav aria-label="pagination">
  	<ul class="pagination pagination-sm justify-content-center">
  		@if($items->currentPage() == 1)
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">First</a></li>
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
	    @else
		    	<li class="page-item"><a class="page-link" href="{{ route($controller.'.index').'?page=1' }}">First</a></li>
		    	<li class="page-item"><a class="page-link" href="{{ $items->previousPageUrl() }}">Previous</a></li>
	    @endif

	    @for ($i=1; $i<($cant_page+1); $i++)
		    @if ($items->currentPage() == $i)
	    		<li class="page-item disabled"><a class="page-link" href="#">{{$i}}</a></li>
    		@else
	    		<li class="page-item"><a class="page-link" href="{{ route($controller.'.index').'?page='.$i }}">{{$i}}</a></li>
    		@endif
		@endfor

  		@if($items->currentPage() == $cant_page)
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Last</a></li>
	    @else
    		<li class="page-item"><a class="page-link" href="{{ $items->nextPageUrl() }}">Next</a></li>
    		<li class="page-item"><a class="page-link" href="{{ route($controller.'.index').'?page='.$cant_page }}">Last</a></li>
	    @endif
  </ul>
</nav>
