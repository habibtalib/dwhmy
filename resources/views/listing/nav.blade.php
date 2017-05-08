<div class="center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            @if($data->onFirstPage())
                <li class="disabled previous">
                    <a href="#" aria-label="Previous">
                        <i class="arrow_left"></i>
                    </a>
                </li>
            @else
                <li class="previous">
                    <a href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                        <i class="arrow_left"></i>
                    </a>
                </li>
            @endif

            @for ($i = 1; $i <= $data->lastPage(); $i++)
                <li class="{{ ($data->currentPage() == $i) ? 'active': ''}}"><a href="{{$data->url($i)}}">{{$i}}</a></li>
            @endfor

                @if($data->hasMorePages())
                    <li class="next">
                        <a href="{{ $data->nextPageUrl() }}" aria-label="Next">
                            <i class="arrow_right"></i>
                        </a>
                    </li>
                @else
                    <li class="next">
                        <a href="#" aria-label="Next">
                            <i class="arrow_right"></i>
                        </a>
                    </li>
                @endif

        </ul>
    </nav>
</div>