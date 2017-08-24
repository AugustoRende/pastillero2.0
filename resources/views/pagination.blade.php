<nav aria-label="pagination">
  	<ul class="pagination pagination-sm justify-content-center">
  		@if($users->currentPage() == 1)
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
	    @else
		    	<li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}">Previous</a></li>
	    @endif

	    @for ($i=1; $i<(round($users->total()/$users->perPage())+2); $i++)
		    @if ($users->currentPage() == $i)
	    		<li class="page-item disabled"><a class="page-link" href="#">{{$i}}</a></li>
    		@else
	    		<li class="page-item"><a class="page-link" href="{{ route('user.index').'?page='.$i }}">{{$i}}</a></li>
    		@endif
		@endfor

  		@if($users->currentPage() == (round($users->total()/$users->perPage())+1))
		    	<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Next</a></li>
	    @else
    		<li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a></li>
	    @endif
  </ul>
</nav>
