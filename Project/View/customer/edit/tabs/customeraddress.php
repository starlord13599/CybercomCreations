<h2 class="display-6">Address Details</h2>


<form class="row g-3">
    <div class="col-12">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address[address]" class="form-control">
    </div>

    <div class="col-md-6">
        <label for="city" class="form-label">City</label>
        <input type="text" name="address[city]" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="state" class="form-label">State</label>
        <input type="text" name="address[state]" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="zip" class="form-label">Zip</label>
        <input type="text" name="address[zip]" class="form-control" id="zip">
    </div>
    <div class="col-6">
        <label for="country" class="form-label">Country</label>
        <input type="text" name="address[country]" class="form-control">
    </div>

    <div class="col-6">
        <label for="addresstype" class="form-label">Address Type</label>
        <input type="text" name="address[addresstype]" class="form-control">
    </div>

    <div class="col-6">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>