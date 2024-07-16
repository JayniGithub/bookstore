<x-layout>
    <div class="container-fluid">
        <x-Admin.adminheader/>
        <div class="row">
            <div class="col-0 col-lg-2 d-none d-lg-block px-0">
                <x-Admin.adminsidebar/>
            </div>
            <div class="col-12 col-lg-10 px-3 bg-light">
                {{-- breadcrumb row --}}
                <div class="row m-1 py-2">
                    <div class="breadcrumb-div w-100">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Book Authors</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                {{-- add new author row --}}
                <div class="row m-1 py-2 justify-content-end">
                    <div class="d-flex">
                        <button type="button" id="mdbtn" class="btn btn-primary">+ Add Author</button>
                    </div>
                </div>
                {{-- authors table row --}}
                <div class="row justify-center py-2 mx-auto w-100">
                    <div class="mx-auto">
                        <table class="table table-responsive mx-auto">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Author Photo</th>
                                <th scope="col">Author Full Name</th>
                                <th scope="col">Author Email Address</th>
                                <th scope="col">Author Phone No</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse($authors as $author)
                              <tr>
                                <td>
                                    <div class="book-thumbnail">
                                        <img src="{{asset($author->profile_pic)}}" style="width: 50px; height: 50px; border-radius: 45%;" class="img-fluid" alt="">
                                    </div>
                                </td>
                                <td>{{$author->first_name}} {{$author->last_name}}</td>
                                <td>{{$author->email}}</td>
                                <td>{{$author->phone}}</td>
                                <td><a 
                                  href="#" 
                                  data-toggle="modal" 
                                  data-target="#editAuthor{{$author->id}}" 
                                  class="btn btn-info item-update">Edit</a></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                              </tr>
                              @empty
                              <tr><td colspan="6">No Records to show...</td></tr>
                              @endforelse
                            </tbody> 
                        </table>
                        <div class="d-flex justify-content-center">
                          {!! $authors->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add author modal --}}
        <div class="modal fade" id="modelWindow" role="dialog">
            <div class="modal-dialog modal-md vertical-align-center">
              <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h4 class="modal-title">Add New Author</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('add.author')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <div class="py-2">
                        <input type="text" class="form-control border-info" name="first_name" placeholder="Author First Name">
                      </div>
        
                      <div class="py-2">
                        <input type="text" class="form-control border-info" name="last_name" placeholder="Author Last Name">
                      </div>

                      <div class="py-2">
                        <input type="email" class="form-control border-info" name="email" placeholder="Author Email Address">
                      </div>

                      <div class="py-2">
                        <input type="text" class="form-control border-info" name="phone" placeholder="Author phone no">
                      </div>

                      <div class="py-2 custom-file">
                        <input type="file" class="custom-file-input" name="profile_pic">
                        <label class="custom-file-label" for="customFileLang">Author Profile Photo</label>
                      </div>
        
                      <div class="py-2">
                        <button type="submit" class="btn btn-primary text-decoration-none text-white text-center">Submit</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>

        {{-- Edit author model --}}
      @foreach($authors as $author)
      <div class="modal fade" id="editAuthor{{$author->id}}" role="dialog">
        <div class="modal-dialog modal-md vertical-align-center">
          <div class="modal-content">
            <div class="modal-header justify-content-between">
                <h4 class="modal-title">Edit Author</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="/admin/update-authors/{{$author->id}}" enctype="multipart/form-data">
                  @method('put')  
                  @csrf
                  <div class="py-2">
                    <input type="text" class="form-control border-info" name="first_name" placeholder="Author First Name" value="{{$author->first_name}}">
                  </div>
    
                  <div class="py-2">
                    <input type="text" class="form-control border-info" name="last_name" placeholder="Author Last Name"  value="{{$author->last_name}}">
                  </div>

                  <div class="py-2">
                    <input type="email" class="form-control border-info" name="email" placeholder="Author Email Address"  value="{{$author->email}}">
                  </div>

                  <div class="py-2">
                    <input type="text" class="form-control border-info" name="phone" placeholder="Author phone no"  value="{{$author->phone}}">
                  </div>

                  <div class="py-2 custom-file">
                    <input type="file" class="custom-file-input" name="profile_pic"  value="{{$author->profile_pic}}">
                    <label class="custom-file-label" for="customFileLang">Author Profile Photo</label>
                  </div>
    
                  <div class="py-2">
                    <button type="submit" class="btn btn-primary text-decoration-none text-white text-center">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
      @endforeach
    </div>
    <script>
        $('#mdbtn').click(function() {
            $('#modelWindow').modal('show');
        });

        $('.item-update').click(function() {
          $('#editAuthor').modal('show');
        });
    </script>
</x-layout>