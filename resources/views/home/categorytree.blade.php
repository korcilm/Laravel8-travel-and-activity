<ul class="submenu " style="position: absolute; left: 120%; top: 0; background: #d7cece ">
    @foreach($children as $subcategory)
        @if(count($subcategory->children))
            <li><a href="blog.html">{{$subcategory->title}} <i class="fa fa-angle-double-right float-right" style="font-size: 10pt;"></i></a>
                @include('home.categorytree',['children'=>$subcategory->children])
            </li>
        @else
            <li><a href="{{route('home_categoryplaces',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a>
        @endif
    @endforeach
</ul>
