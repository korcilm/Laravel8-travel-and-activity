<ul class="submenu position-relative ml-3" >
    @foreach($children as $subcategory)
            @if(count($subcategory->children))
                <li ><a href="blog.html">{{$subcategory->title}} <i class="fa fa-angle-double-down float-right" style="font-size: 10pt;"></i></a>
                        @include('home.categorytree',['children'=>$subcategory->children])
                </li>
            @else
                <li><a href="blog.html">{{$subcategory->title}}</a>
            @endif
    @endforeach
</ul>
