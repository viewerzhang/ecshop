<style>
        body{background:#fff;}
        .pagination-outer{ text-align: center; }
        .pagination{
            font-family: 'Rubik', sans-serif;
            display: inline-flex;
            position: relative;
        }
        .pagination li a.page-link{
            color: #10ac84;
            /*background-color: transparent;*/
            display: block;
            font-size: 15px;
            height: 25px;
            margin: 0 0px 0px;
            border: none;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            transition: all 0.4s ease 0s;
            color: #777;
            background-color: #fff;
            border-color: #ddd;
        }
        .pagination li.active a.page-link,
        .pagination li a.page-link:hover,
        .pagination li.active a.page-link:hover{
            color: #fff;
            background-color: #10ac84;
        }
        .pagination li:first-child a.page-link:hover,
        .pagination li:last-child a.page-link:hover{
            box-shadow: 0 0 10px rgba(0,0,0,0.9);
        }
        .pagination li a.page-link:before{
            content: attr(data-hover);
            color: rgba(255,255,255,0.2);
            font-size: 10px;
            opacity: 1;
            position: absolute;
            top: 100%;
            left: 0;
        }
        .pagination li a.page-link:hover:before,
        .pagination li.active a.page-link:before{
            opacity: 1;
            top: 10px;
        }
        @media only screen and (max-width: 480px){
            .pagination{ display: block; }
            .pagination li{
                margin-bottom: 10px;
                display: inline-block;
            }
        }
    </style>
@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">第一页</span></li>
        @else
            <li class="page-item"><a class="page-link" 
            href="{{ $paginator->previousPageUrl() }}" rel="prev">上一页</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled">
                <span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                        <span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item">
                        <a class="page-link" href="{{ $url }}">
                        {{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" 
            href="{{ $paginator->nextPageUrl() }}" rel="next">下一页</a></li>
        @else
            <li class="page-item disabled"><span 
            class="page-link">最后一页</span></li>
        @endif
    </ul>
@endif