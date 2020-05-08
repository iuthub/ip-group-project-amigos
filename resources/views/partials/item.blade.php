<div class="card" style="width: 16rem; height: 31rem;">
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
        <a class="btn btn-success" href="{{ route('order', ['id' => $menu->id]) }}">Order</a>
      @endif

    </div>
</div>

