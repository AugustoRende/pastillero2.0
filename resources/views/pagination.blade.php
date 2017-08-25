<?php $cant_page =  floor($users->total()/$users->perPage())+1 ?>
<nav aria-label="pagination">
  	<ul class="pagination pagination-sm justify-content-center">
  		@if($users->currentPage() == 1)
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">First</a></li>
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
	    @else
		    	<li class="page-item"><a class="page-link" href="{{ route('user.index').'?page=1' }}">First</a></li>
		    	<li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}">Previous</a></li>
	    @endif

	    @for ($i=1; $i<($cant_page+1); $i++)
		    @if ($users->currentPage() == $i)
	    		<li class="page-item disabled"><a class="page-link" href="#">{{$i}}</a></li>
    		@else
	    		<li class="page-item"><a class="page-link" href="{{ route('user.index').'?page='.$i }}">{{$i}}</a></li>
    		@endif
		@endfor

  		@if($users->currentPage() == $cant_page)
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Last</a></li>
	    @else
    		<li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a></li>
    		<li class="page-item"><a class="page-link" href="{{ route('user.index').'?page='.$cant_page }}">Last</a></li>
	    @endif
  </ul>
</nav>
