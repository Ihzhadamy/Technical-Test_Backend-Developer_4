<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Page') }}
        </h2>
    </x-slot>
    <div>
        <form method="POST">
        @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="textarea">Product</label><br>
                        <textarea class="form-control" style="height:50px;width:200px" name="content" placeholder="Product"></textarea>
                    </div><br>
                    <div class="form-group">
                        <label for="textarea">Shipping</label><br>
                        <textarea class="form-control" style="height:50px;width:200px" name="content" placeholder="Shipping"></textarea>
                    </div>
                </div><br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <label for="number">Price</label><br>
                        <input type="number" name="Price" class="form-control" placeholder="Price">
                </div><br><br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    
        </form>
</x-app-layout>
