<div class="card" style="width: 16rem; height: 31rem;">
    <img class="card-img-top" src="{{ $menu->food_image ? asset('food_image/' .$menu->food_image) : 
      asset('img/pic1.jpg')
    }}" alt="Menu image">
    <div class="card-body">
      <h5 class="card-title">{{ $menu->food_name }}</h5>
      <p class="card-text">{{ $menu->food_description }}.</p>
      <p class="card-text">Price: {{ $menu->food_price }}$</p>
      <a href="#" class="btnCategory">Go somewhere</a>
    </div>
</div>