<div class="nav-header">
    <ul class="nav-header-content">
        <li class="nav_parent"><a href="{{route('home')}}">Home</a></li>
        @foreach ($categoriesLimit as $categoriesLimitItem)

    <li class="nav_parent ">
        <a 
        {{-- href="{{route('category.product', 
        ['slug' => $categoriesLimitItem->slug, 'categoryId' => $categoriesLimitItem->id]
        )}}" --}}
        >{{$categoriesLimitItem->name}}
                @if ($categoriesLimitItem->categoryChildrent->count())
                <i style="font-size: 16px;
            color: #33333361;
            padding-left: 10px;
            position: absolute;" class="fa">&#xf107;</i>
                @endif

            </a>
            @if ($categoriesLimitItem->categoryChildrent->count())
            <ul class="nav_child">

                @include('components.child_menu', ['categoriesLimitItem' => $categoriesLimitItem])
            </ul>
            @endif
        </li>
        @endforeach
    <li class="nav_parent" ><a href="{{route('showCart')}}"><img width="60%" src="{{asset('images/icons8-shopping-cart-48.png')}}" alt=""></a></li>
        
    </ul>
</div>

