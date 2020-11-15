<div class="col-lg-8">
    <div class="tab-content card px-4 py-4" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-aplication" role="tabpanel"
             aria-labelledby="v-pills-aplication-tab">
            <form action="{{route('settings.update')}}" class="forms-sample" method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="site-title">Site Title</label>
                    <input type="text" name="app_name"
                           class="form-control @error('app_name') is-invalid @enderror"
                           id="site-title" value="{{setting('app_name')}}"
                           placeholder="site title here">
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="logo" type="file"
                                   class="custom-file-input @error('logo') is-invalid @enderror"
                                   id="inputGroupFile05">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                    <div>
                        <img class="w-12 h-12" src="{{upload_url('settings/logo/'.\setting('logo'))}}"
                             alt="logo">
                    </div>
                </div>
                <div class="form-group">
                    <label>Mobile Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="mobile_logo"
                                   class="custom-file-input @error('mobile_logo') is-invalid @enderror"
                                   id="inputGroupFile05">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                    <div>
                        <img class="w-12 h-12"
                             src="{{upload_url('settings/logo/'.\setting('mobile_logo'))}}"
                             alt="logo">
                    </div>
                </div>
                <div class="form-group">
                    <label>Favicon</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="favicon" type="file"
                                   class="custom-file-input @error('favicon') is-invalid @enderror"
                                   id="inputGroupFile05">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                    <div>
                        <img class="w-12 h-12"
                             src="{{upload_url('settings/favicon/'.\setting('favicon'))}}"
                             alt="logo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Address</label>
                    <textarea name="address" class="form-control @error('address') is-invalid @enderror"
                              id="exampleTextarea1"
                              rows="4"></textarea>
                </div>
                <button type="submit" class="btn d-block  btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>
</div>
