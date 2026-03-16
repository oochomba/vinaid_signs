@if (!empty($products->count()))
    <p>Select product to link</p>
    @foreach ($products as $product)
        <div class="col-lg-12 mb-3">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><input value="{{ $product->id }}" name="product_id" type="radio" required></span>
                </div>
                <input type="text" value="{{ $product->title }}" class="form-control" readonly  style="height: 30px !important">
            </div>
        </div>
    @endforeach
@else
    <p class="text text-danger">Opps!!! No product found</p>
@endif
