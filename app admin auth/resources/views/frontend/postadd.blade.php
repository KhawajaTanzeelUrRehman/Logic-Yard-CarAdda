@include('frontend.layouts.header')

<div class="app-content  my-3 my-md-5">
	<div class="side-app">
		<div class="page-header">
			<h4 class="page-title">Post Add</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Post Add</li>
			</ol>
		</div>

        <div class="row">
            <div class="col-md-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h3 class="card-title">Add Post</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
    
								                                <div class="form-group col-md-6">
                                				<div class="form-group" style="margin-top: 12px;">
													<label for="form-label" class="form-label">Upload Image</label>
													<input class="form-control " type="file">
												</div>
										
                                </div>
                                <div class="form-group col-md-6">
                                    {{-- <div class="form-group"> --}}
                                        <label for="inputcity" class="col-form-label">Modules</label>
                                    <select id="inputcity" class="form-control select2">
                                        <option value="">Select</option>
                                        <option>Customer</option>
                                        <option>Vendor</option>
                                        {{-- <option>Jaipur</option> --}}

                                    </select>
                                    {{-- </div> --}}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="col-form-label">start Date</label>
                                    <input type="date" class="form-control" id="inputEmail5" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" class="col-form-label">End Date</label>
                                    <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                       
                            
                            <div class="form-row">
                                {{-- <div class="form-group col-md-4">
                                    <label for="inputCity" class="col-form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div> --}}
                                <div class="form-group col-md-6">
                                    <label for="inputState" class="col-form-label">State</label>
                                    <select id="inputState" class="form-control select2">
                                        <option value="">Select</option>
                                        <option  value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option  value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option  value="Assam">Assam</option>
                                        <option  value="Bihar">Bihar</option>
                                        <option  value="Chhattisgarh">Chhattisgarh</option>
                                        <option  value="Goa">Goa</option>
                                        <option  value="Gujarat">Gujarat</option>
                                        <option  value="Haryana">Haryana</option>
                                        <option  value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option  value="Jharkhand">Jharkhand</option>
                                        <option  value="Karnataka">Karnataka</option>
                                        <option  value="Kerala">Kerala</option>
                                        <option  value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option  value="Maharashtra">Maharashtra</option>
                                        <option  value="Manipur">Manipur</option>
                                        <option   value="">Meghalaya</option>
                                        <option  value="Mizoram">Mizoram</option>
                                        <option  value="Nagaland">Nagaland</option>
                                        <option  value="Odisha">Odisha</option>
                                        <option   value="Punjab">Punjab</option>
                                        <option  value="Rajasthan">Rajasthan</option>
                                        <option  value="Sikkim">Sikkim</option>
                                        <option  value="Tamil Nadu">Tamil Nadu</option>
                                        <option  value="Telangana">Telangana</option>
                                        <option  value="Tripura">Tripura</option>
                                        <option  alue="Uttar Pradesh">Uttar Pradesh</option>
                                        <option  value="Uttarakhand">Uttarakhand</option>
                                        <option  value="West Bengal">West Bengal</option>
                
                                        <option  value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option  value="Chandigarh">Chandigarh</option>
                                        <option  value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        <option  value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option  value="Ladakh">Ladakh</option>
                                        <option  value="Lakshadweep">Lakshadweep</option>
                                        <option value="Delhi and Puducherry">Delhi and Puducherry</option>
                                        <option  value="Daman and Diu">Daman and Diu</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputcity" class="col-form-label">City</label>
                                    <select id="inputcity" class="form-control select2">
                                        <option value="">Select</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Jaipur </option>
                                        <option>Bengaluru </option>
                                        <option>Hyderabad </option>
                                        <option>Chennai</option>
                                        <option>Ahmedabad</option>
                                        <option>Chandigarh</option>
                                        <option>Lucknow</option>

                                    </select>
                                </div>
                                
                            <div class="form-group">
                                {{-- <div class="form-check ps-0">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" />
                                        <span class="custom-control-label text-dark">I agree</span>
                                    </label>
                                </div> --}}
                            </div>
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@include('frontend.layouts.footer')