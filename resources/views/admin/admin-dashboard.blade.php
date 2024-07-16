<x-layout>
    <div class="container-fluid">
        <x-Admin.adminheader/>
        <div class="row">
            <div class="col-0 col-lg-2 d-none d-lg-block px-0">
                <x-Admin.adminsidebar/>
            </div>
            <div class="col-12 col-lg-10 px-3 bg-light">
                <div class="row m-1 py-2">
                    <div class="breadcrumb-div w-100">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row m-1 py-2">
                    <div class="dashboard-card-grid">
                        <div class="dashboard-card card px-2">
                            <img src="/images/profile.png" class="card-img-top img-fluid img-size" alt="...">
                            <div class="card-body text-center">
                              <h5 class="card-title">USERS</h5>
                              <h3 class="card-text">100</h3>
                            </div>
                        </div>
                        <div class="dashboard-card card px-2">
                            <img src="/images/profile.png" class="card-img-top img-fluid img-size" alt="...">
                            <div class="card-body text-center">
                              <h5 class="card-title">BOOKS</h5>
                              <h3 class="card-text">100</h3>
                            </div>
                        </div>
                        <div class="dashboard-card card px-2">
                            <img src="/images/profile.png" class="card-img-top img-fluid img-size" alt="...">
                            <div class="card-body text-center">
                              <h5 class="card-title">AUTHORS</h5>
                              <h3 class="card-text">20</h3>
                            </div>
                        </div>
                        <div class="dashboard-card card px-2">
                            <img src="/images/profile.png" class="card-img-top img-fluid img-size" alt="...">
                            <div class="card-body text-center">
                              <h5 class="card-title">PUBLISHERS</h5>
                              <h3 class="card-text">10</h3>
                            </div>
                        </div>
                        <div class="dashboard-card card px-2">
                            <img src="/images/profile.png" class="card-img-top img-fluid img-size" alt="...">
                            <div class="card-body text-center">
                              <h5 class="card-title">CATEGORIES</h5>
                              <h3 class="card-text">5</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ml-4">
                        <table class="table table-responsive table-bordered w-100">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Book Thumbnail</th>
                                <th scope="col">Book Name</th>
                                <th scope="col">Book Category</th>
                                <th scope="col">Book Author</th>
                                <th scope="col">Book Publisher</th>
                                <th scope="col">Updated Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                    <div class="book-thumbnail">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                                    </div>
                                </td>
                                <td>Book Title</td>
                                <td>Novel</td>
                                <td>Book Author</td>
                                <td>New Publisher</td>
                                <td>14/11/2023</td>
                              </tr>
                              <tr>
                                <td>
                                    <div class="book-thumbnail">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                                    </div>
                                </td>
                                <td>Book Title</td>
                                <td>Novel</td>
                                <td>Book Author</td>
                                <td>New Publisher</td>
                                <td>14/11/2023</td>
                              </tr>
                              <tr>
                                <td>
                                    <div class="book-thumbnail">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTuVNiRWYREKQ7cVrixxTGew1wbIFaIvHRK9y9Tcis&s" class="img-fluid" alt="">
                                    </div>
                                </td>
                                <td>Book Title</td>
                                <td>Novel</td>
                                <td>Book Author</td>
                                <td>New Publisher</td>
                                <td>14/11/2023</td>
                              </tr>
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>