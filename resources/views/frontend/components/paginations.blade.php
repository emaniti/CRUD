<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>
<div class="row">
    <div class="col-md-12">
        <div class="pagination-content">
            <div class="pagination-button">
                <ul class="pagination">
                    
                    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                        <a href="{{ $paginator->url(1) }}"><i class="fa fa-caret-left"></i></a>
                    </li>
                    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                        <?php
                            $half_total_links = floor($link_limit / 2);
                            $from = $paginator->currentPage() - $half_total_links;
                            $to = $paginator->currentPage() + $half_total_links;
                            if ($paginator->currentPage() < $half_total_links) {
                            $to += $half_total_links - $paginator->currentPage();
                            }
                            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                            }
                        ?>
                        @if ($from < $i && $i < $to)
                            <li class="{{ ($paginator->currentPage() == $i) ? ' current' : '' }}">
                                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor

                    {{-- @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                        <li class="{{ ($paginator->currentPage() == $i) ? ' current' : '' }}">
                            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor --}}
                    {{-- <li class="current"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li> --}}
                    <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                        <a href="{{ $paginator->url($paginator->currentPage()+1) }}">
                            <i class="fa fa-caret-right"></i>
                        </a>
                    </li>
                    {{-- <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
                    </li> --}}
                </ul>
                <span>Page:</span>
            </div>
        </div>
    </div>
</div>

{{-- @if ($paginator->lastPage() > 1)
<ul class="pagination">
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
    </li>
</ul>
@endif --}}