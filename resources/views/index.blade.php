<x-layout>
  <x-navigation-bar />
    {{-- <x-caraousal/> --}}
      <section class="body-section">
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-12 pt-5">
              <div class="book-search-div">
                <form class="form-inline">
                  <input class="form-control mr-2" type="search" placeholder="Search Book Here...">
                  <button type="search" class="btn btn-primary">Search</button>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-5 py-5">
              <div class="category-table">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Book Category</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#" class="text-decoration-none text-dark">Novels</a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-decoration-none text-dark">IT</a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-decoration-none text-dark">Engineering</a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-decoration-none text-dark">Medicine</a></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-decoration-none text-dark">Management</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="recent-books">
                <table class="table mt-5">
                  <thead class="thead-dark">
                    <tr>
                      <th>Recent Arrivals</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="d-flex align-items-center text-sm-center text-lg-left">
                        <div class="row">
                          <div class="col-12 col-lg-5 py-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="book-image">
                          </div>
                          <div class="col-12 col-lg-7 py-2">
                            <div class="book-title">Book Title Here</div>
                            <div class="book-author">Book Author Here</div>
                            <div class="book-description">Book Fescription Here</div>
                            <div class="updated_at">Updated Time Here</div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="d-flex align-items-center text-sm-center text-lg-left">
                        <div class="row">
                          <div class="col-12 col-lg-5 py-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="book-image">
                          </div>
                          <div class="col-12 col-lg-7 py-2">
                            <div class="book-title">Book Title Here</div>
                            <div class="book-author">Book Author Here</div>
                            <div class="book-description">Book Fescription Here</div>
                            <div class="updated_at">Updated Time Here</div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="d-flex align-items-center text-sm-center text-lg-left">
                        <div class="row">
                          <div class="col-12 col-lg-5 py-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="book-image">
                          </div>
                          <div class="col-12 col-lg-7 py-2">
                            <div class="book-title">Book Title Here</div>
                            <div class="book-author">Book Author Here</div>
                            <div class="book-description">Book Fescription Here</div>
                            <div class="updated_at">Updated Time Here</div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-12 col-md-7">
              <div class="engineering-books">
                <table class="table mt-5">
                  <thead class="thead-dark">
                    <tr>
                      <th>Engineering Books</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td class="d-flex align-self-center text-sm-center text-lg-left">
                      <div class="row">
                        <div class="col-12 col-lg-3 pb-3">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-3 pb-2">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-3 pb-2">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-3 pb-2">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tbody>
                </table>
                <div class="seemore-link float-right mb-3">
                  <div class="row bg-light">
                    <div class="col-12">
                      <a href="#" class="text-decoration-none">See More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="it-books">
                <table class="table mt-5">
                  <thead class="thead-dark">
                    <tr>
                      <th>IT Books</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td class="d-flex align-self-center text-sm-center text-lg-left">
                      <div class="row">
                        <div class="col-12 col-lg-3 pb-3">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-3 pb-2">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-3 pb-2">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-3 pb-2">
                          <div class="img-div">
                            <a href="/details">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                            </a>
                          </div>
                          <div class="details-div">
                            <h5>Book Title</h5>
                            <div>By Author Name</div>
                            <div>Rs: 1500 </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tbody>
                </table>
                <div class="seemore-link float-right">
                  <div class="row bg-light">
                    <div class="col-12">
                      <a href="#" class="text-decoration-none">See More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-layout>