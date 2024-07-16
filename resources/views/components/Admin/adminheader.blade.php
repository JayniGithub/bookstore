<div class="row bg-primary admin-header">
    <div class="col-12 d-lg-flex justify-content-between d-block">
        <div class="d-flex align-items-center">
            <a href="#" class="text-decoration-none text-light mr-3"><i class="fa fa-bars" style="font-size:24px"></i></a>
            <div class="header-title h4 text-light">BOOK HOUSE</div>
        </div>
        <div class="d-none d-md-flex align-items-center mb-2">
            <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>                  
        </div>
        <div class="admin-details d-flex align-items-center my-2">
            <div class="profile-photo mr-3">
                <img src="/images/author.jpg" class="img-fluid rounded-circle" alt="profile pic">
            </div>
            <div class="text-light admin-name">
                <div class="visible-part d-flex align-items-center">
                    <h5 class="mr-1">{{$user->first_name}}</h5>
                    <i class="fa fa-angle-down btn" onclick="toggleFunction()"></i>
                </div>
                <div class="logout-btn-div" id="hidden-area">
                    <a href="{{ route('admin.logout') }}" class="btn btn-light w-100">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>