<style>
.pagination {
  padding: 0;
}
.pagination li { 
  display: inline; 
  list-style-type: none;
  padding: 0;
}
.pagination li a { 
  text-decoration: none; 
  color: #000; 
}
.pagination li a, 
.pagination li span {
  display: inline-block; 
  padding: 5px 14px; 
  background: #fff; 
  border: 1px solid #ddd; 
  border-radius: 15px;
}
.pagination li a:hover:not(.active) { 
  color: #fff;
  background: #000;
  border: none;
}
/*-------------------*/
.pagination .nothing {
  cursor: not-allowed; 
  text-decoration: none;
  color: #777; 
}
.pagination .active {
  color: #fff; 
  background: #5cb85c; 
  border: 1px solid #5cb85c;
  border-radius: 15px; 
  padding: 5px 14px; 
  display: inline-block; 
  pointer-events: none;
}
</style>

@if ($paginator->hasPages())
<ul class="pagination">
  <!-- Previous Page Link -->
  @if ($paginator->onFirstPage())
    <li class="nothing"><span>← Previous</span></li>
  @else
    <li><a href="{{ $paginator->previousPageUrl() }}">← Previous</a></li>
  @endif

  <?php
    $start = $paginator->currentPage() - 1; // show 1 pagination links before current
    $end = $paginator->currentPage() + 1; // show 1 pagination links after current
    if($start < 1) {
      $start = 1; // reset start to 1
      $end += 1;
    } 
    if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
  ?>

  @if($start > 1)
    <li>
      <a class="page-link" href="{{ $paginator->url(1) }}">{{1}}</a>
    </li>
    @if($paginator->currentPage() != 4)
      <!-- "Three Dots" Separator -->
      <li class="nothing"><span>...</span></li>
    @endif
  @endif

  @for ($i = $start; $i <= $end; $i++)
    <li>
      <a class="{{ ($paginator->currentPage() == $i) ? 'active' : '' }}" href="{{ $paginator->url($i) }}">{{$i}}</a>
    </li>
  @endfor
    
  @if($end < $paginator->lastPage())
    @if($paginator->currentPage() + 3 != $paginator->lastPage())
      <!-- "Three Dots" Separator -->
      <li class="nothing"><span>...</span></li>
    @endif
    <li><a href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a></li>
  @endif

  <!-- Next Page Link -->
  @if ($paginator->hasMorePages())
    <li><a href="{{ $paginator->nextPageUrl() }}">Next →</a></li>
  @else
    <li class="nothing"><span>Next →</span></li>
  @endif
</ul>
@endif