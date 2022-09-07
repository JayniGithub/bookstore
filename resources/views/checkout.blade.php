<x-layout>
    <main>
        <div class="container my-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">CHECKOUT FORM</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 border py-3">
                    <h4 class="my-4">Billing Address</h4>
                    <form>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="First Name">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
        
                            <div class="col-md-6 form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        </div>
        
                        <div class="form-group mb-3">
                            <label for="adress">Address</label>
                            <input type="text" class="form-control mb-1" id="adress" placeholder="Address Line 1" required>
                            <input type="text" class="form-control my-1" id="adress" placeholder="Address Line 2" required>
                            <input type="text" class="form-control my-1" id="adress" placeholder="Address Line 3" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <hr>
        
                        <h4 class="mb-4">Payment</h4>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="credit" name="payment-method" checked required>
                                    <label for="credit" class="form-check-label">Credit Card</label>
                                </div>
                            </div>
            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="debit" name="payment-method" required>
                                    <label for="debit" class="form-check-label">Debit Card</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6 form-group">
                                    <label for="card-name">Name on card</label>
                                    <input type="text" class="form-control" id="card-name" placeholder required>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
        
                                <div class="col-md-6 form-group">
                                    <label for="card-no">Card Number</label>
                                    <input type="text" class="form-control" id="card-no" placeholder required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                        </div>
        
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                    <label for="expiration">Expire Date</label>
                                    <input type="text" class="form-control" id="card-name" placeholder required>
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                            
        
                            <div class="col-md-6 form-group">
                                    <label for="ccv-no">Security Number</label>
                                    <input type="text" class="form-control" id="sec-no" placeholder required>
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                            </div>
                        </div>
                        
                            <div>
                                <a href="#" class="btn btn-primary bt-lg btn-block my-1" type="submit">Make Payment</a>
                            </div>
                            <div>
                                <a href="/home" class="btn btn-danger bt-lg btn-block my-1" type="submit">Cancel</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout>