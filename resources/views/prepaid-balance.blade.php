<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prepaid Balance') }}
        </h2>
    </x-slot>
    <div>
        <form method="POST">
        @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="text">Mobile Number</label><br>
                        <input type="text" name="Mobile Number" class="form-control" placeholder="Mobile Number">
                    </div>
                </div><br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="value">Value</label><br>
                            <select name="value" id="value">
                                <option value="10000">Rp10.000</option>
                                <option value="50000">Rp50.000</option>
                                <option value="100000">Rp100.000</option>
                            </select>
                    </div>
                </div><br><br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    
        </form>
</x-app-layout>
