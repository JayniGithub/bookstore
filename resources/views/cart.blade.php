<x-layout>
    <main>
        <div class="container my-3">
          <div class="row my-4">
            <div class="col-12 text-center">
              <h4 class=" font-weight-bold">Your Shopping Cart</h4>
            </div>
          </div>
          <div class="row bg-info py-4">
            <div class="col-12 col-md-2">
              <div class="img-div">
                <img src="./images/user.jpg" class="img-fluid img-thumbnail" alt="">
              </div>
            </div>
            <div class="col-12 col-md-10 align-self-center">
              <div class="d-flex user-name text-light">
                <h3>Mathew Heads</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <table class="table table-borderless table-responsive my-3">
                <thead class="bg-secondary text-light">
                  <tr>
                    <th scope="col">Item No</th>
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="3">Quantity</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" 
                        class="img-fluid"
                        alt="">
                    </td>
                    <td>
                      <div><strong>Book Title</strong></div>
                      <div>Author Name</div>
                    </td>
                    <td colspan="3">
                      <form class="form-inline">
                        <input type="text" class="form-control mb-2 mr-sm-2">
                        <button type="button" class="btn btn-primary mb-2 mr-1"><i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-danger mb-2 ml-1"><i class="fa fa-trash"></i></button>
                      </form>
                    </td>
                    <td></td>
                    <td></td>
                    <td>Rs: 1500</td>
                    <td>Rs: 1500</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" 
                          class="img-fluid"
                          alt="">
                    </td>
                    <td>
                      <div><strong>Book Title</strong></div>
                      <div>Author Name</div>
                    </td>
                    <td colspan="3">
                      <form class="form-inline">
                        <input type="text" class="form-control mb-2 mr-sm-2">
                        <button type="button" class="btn btn-primary mb-2 mr-1"><i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-danger mb-2 ml-1"><i class="fa fa-trash"></i></button>
                      </form>
                    </td>
                    <td></td>
                    <td></td>
                    <td>Rs: 1500</td>
                    <td>Rs: 1500</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row justify-content-md-end border bg-light my-2">
            <div class="col-12 col-lg-6 text-center text-lg-right">
              <div class="row">
                <div class="col-6">
                  <h5 class=" font-weight-bold">Total : </h5>
                </div>
                <div class="col-6">
                  <h5>Rs : 3000</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <h5 class=" font-weight-bold">Discount : </h5>
                </div>
                <div class="col-6">
                  <h5>Rs : 500</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <h5 class=" font-weight-bold">Sub Total : </h5>
                </div>
                <div class="col-6">
                  <h5>Rs : 2500</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="row py-3 my-2">
            <div class="d-md-flex col-12 justify-content-between">
              <a href="/shop" class="text-decoration-none"><button class="btn btn-primary btn-block my-1 font-weight-bold"><i class="fa fa-arrow-left mx-2"></i>Back to Shop</button></a>
              <a href="/checkout" class="text-decoration-none"><button class="btn btn-success btn-block my-1 font-weight-bold">Checkout<i class="fa fa-arrow-right mx-2"></i></button></a>
            </div>
          </div>
        </div>
      </main>
</x-layout>