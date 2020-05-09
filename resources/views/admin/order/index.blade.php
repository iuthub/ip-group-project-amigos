@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-2">
                        <h3>Orders</h3>
                    </div>
                </div>
                <ul class="list-group">
                    @foreach($orders as $order)
                        @if($order->recived)
                        <li class="list-group-item">
                            <span class="mr-2">
                                {{ $order->food_type }}
                            </span>
                                |
                            <span class="ml-2 recived-span">delivered</span>
                            <i class=" far fa-check-circle"></i>
                            <a href="{{ route('adminOrderCancel', ['id' => $order->id]) }}" class="float-right">
                                <i class="recived-trash-btn mt-1 far fa-lg fa-trash"></i>
                            </a>
                        </li>
                        @else
                            <li class="list-group-item">
                                {{ $order->food_type }}
                                <a class="float-right ml-2"href="{{ route('adminOrderCancel', ['id' => $order->id]) }}">Cancel</a>
                                <a href="{{ route('delivered', ['id' => $order->id]) }}" class="float-right mr-4" href="">Deliver</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="pagination-links">
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        function SetData(){
        var select = document.getElementById('agent');
        var agent_id = select.options[select.selectedIndex].value;
        document.myform.action = "index.php?action=contact_agent&agent_id="+agent_id ; # or .getAttribute('action')
        myform.submit();
}
    </script> --}}
@endsection