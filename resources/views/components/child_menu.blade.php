@foreach ($categoriesLimitItem->categoryChildrent as $categoryChild)

<li class="nav_child_parent"><a 
    href="{{route('category.product', 
    ['slug' => $categoryChild->slug, 'categoryId' => $categoryChild->id ]
    )}}">{{$categoryChild->name}}
        @if ($categoryChild->categoryChildrent->count())
        <i style="font-size: 16px;
    color: #33333361;
    padding-left: 10px;
    position: absolute; top:9px" class="fa">&#xf107;</i>
        @endif
    </a>
    @if ($categoryChild->categoryChildrent->count())

    <ul class=" nav_child_recursive">
        @include('components.child_menu', ['categoriesLimitItem' =>$categoryChild ])
    </ul>
    @endif
</li>
@endforeach