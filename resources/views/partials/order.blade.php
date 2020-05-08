<div class="menues" style="margin-top:60px">
    <div class="card" style="width: 20rem; height: 31rem;">
        <img class="card-img-top" src="{{ $menu->food_image ? asset('food_image/' .$menu->food_image) : 
        asset('img/pic1.jpg')
        }}" alt="Menu image">
        <div class="card-body">
        <h5 class="card-title">{{ $menu->food_name }}</h5>
        <p class="card-text">{{ $menu->food_description }}.</p>
        <p class="card-text">Price: <span id="val">{{ $menu->food_price }}</span>$</p>
        @if(auth()->check() && auth()->user()->isAdmin())
            <a class="deleteBtn mr-4" href="{{ route('deleteMenu', ['id' => $menu->id]) }}">
                <i class="far fa-lg fa-trash"></i>
            </a>
            <a class="editBtn" href="{{ route('editMenu', ['id' => $menu->id]) }}">
                <i class="fas fa-lg fa-edit"></i>
            </a>
        @else
            <span class="totalPrice mr-3"></span>
            <input value="{{ $menu->id }}" type="hidden" name="food_id">
            <input id="inputNumber" max="100" value="1" name="inputNumber" class="inputNumber" min="1" type="number">
            <input value="{{ auth()->user()->id }}" type="hidden" name="user_id">
        @endif
        </div>
    </div>
</div>