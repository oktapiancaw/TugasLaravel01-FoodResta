<div class="form-group">
    <label class="ml-2 mb-0" for="name">Name</label>
    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $resta->name }}" id="name">
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label class="ml-2 mb-0" for="type">Type</label>
    <select name="type" class="form-control @error('type') is-invalid @enderror" id="type">
        <option value="">-- Choose type of data --</option>
        <option value="Foods" {{ old('type') == 'Foods' ? 'selected' : ( $resta->type == 'Foods' ? "selected" : "" ) }}>Food</option>
        <option value="Drinks" {{ old('type') == 'Drinks' ? 'selected' : ( $resta->type == 'Drinks' ? "selected" : "" ) }}>Drink</option>
        <option value="Desserts" {{ old('type') == 'Desserts' ? 'selected' : ( $resta->type == 'Desserts' ? "selected" : "" ) }}>Dessert</option>
    </select>
    @error('type')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group row">
    <div class="col-md-6">
        <label class="ml-2 mb-0" for="stock">Stock</label>
        <input type="number" name="stock" max="1000" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') ?? $resta->stock }}" id="stock">
        @error('stock')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="ml-2 mb-0" for="price">Price</label>
        <input type="number" name="price" min="1000" max="10000000" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') ?? $resta->price }}" id="price">
        @error('price')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
<button type="submit" class="btn btn-primary float-right px-4">{{ $submit ?? 'Update'}}</button>