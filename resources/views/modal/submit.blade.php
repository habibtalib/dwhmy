<div class="modal-dialog width-800px" role="document" data-latitude="40.7344458" data-longitude="-73.86704922" data-marker-drag="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Submit</h2>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline dropzone" method="POST" action="\submit">
                {{csrf_field()}}
                <section>
                    <h3>About</h3>
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-9-->
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control selectpicker" name="category" id="category" required>
                                    <option value="Billboard">Billboard</option>
                                    <option value="Digital Billboard">Digital Billboard</option>
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--col-md-3-->
                    </div>
                    <!--end row-->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="4" name="description" placeholder="Describe the listing"></textarea>
                    </div>
                </section>
                <section>
                    <h3>Contact</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="address-autocomplete">Address</label>
                                <input type="text" class="form-control" name="address" id="address-autocomplete" placeholder="Address" required>
                            </div>
                            <!--end form-group-->
                            <div class="map height-200px shadow" id="map-modal"></div>
                            <!--end map-->
                            <div class="form-group hidden">
                                <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                            </div>
                            <p class="note">Enter the exact address or drag the map marker to position</p>
                        </div>
                        <!--end col-md-6-->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select class="form-control selectpicker" name="location" id="location" required>
                                    <option value="">All Locations</option>
                                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="Johor">Johor</option>
                                </select>
                            </div>
                        </div>
                        <!--end col-md-6-->
                    </div>
                </section>
                <section>
                    <h3>Gallery</h3>
                    <div class="file-upload-previews"></div>
                    <div class="file-upload">
                        <input type="file"  name="file" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                        <span>Click or drag images here</span>
                    </div>
                </section>
                <hr>
                <section class="center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-rounded">Submit Listing</button>
                    </div>
                    <!--end form-group-->
                </section>
            </form>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->