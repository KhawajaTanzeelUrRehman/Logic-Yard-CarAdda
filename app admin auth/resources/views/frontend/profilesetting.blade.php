@include('frontend.layouts.header')

<!--App-Content-->
<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">My Profile</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
            </ol>

        </div>
        <div class="row ">
            <div class="col-xl-4 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Profile</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-2">
                                <div class="col-auto">
                                    <img class="avatar brround avatar-xl" src="frontend/assets/images/banners/avtar.png" alt="Avatar-img">
                                </div>
                                <div class="col">
                                    <h3 class="mb-1 ">Admin</h3>
                                    <p class="mb-4 ">Administrator</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Bio</label>
                                <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Id</label>
                                <input class="form-control" placeholder="your-email@domain.com"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" value="password"/>
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-label">Website</label>
                                <input class="form-control" placeholder="http://Autolist.com"/>
                            </div> --}}
                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-9">
                <form class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                       
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email Id</label>
                                    <input class="form-control" placeholder="your-email@domain.com"/>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" value="password"/>
                            </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" value="password"/>
                                </div>
                                </div>
                           
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>
<!--/App-Content-->
</div>



@include('frontend.layouts.footer')