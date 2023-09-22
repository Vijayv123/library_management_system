<!-- Extend Template -->
<?= $this->extend('layout/template.php') ?>

<!--  Page Content -->
<?= $this->section('content') ?>

<div class="page-header">
    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#add_book">Add Book</button>
</div>

<div class="page-content">

</div>

<!-- Modal Starts -->

<div class="modal fade" id="add_book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="add_book_form">
        <div class="modal-body " >
            <span class="span my-4"><strong>Book Details:</strong></span>

            <div class="row d-flex justify-content-between">
                <div class="form-group col-sm-5 mt-2">
                    <label for="book_name" class="form-label">Book Name <span class="text-danger"> * </span></label>
                    <input type="text" class="form-control" name="book_name" >
                </div>
                <div class="form-group col-sm-5 mt-2">
                    <label for="book_author" class="form-label">Author <span class="text-danger"> * </span></label>
                    <input type="text" class="form-control" name="book_author" >
                </div>
                <div class="form-group col-sm-2 mt-2">
                    <label for="book_edition" class="form-label">Edition <span class="text-danger"> * </span></label>
                    <input type="number" class="form-control" name="book_edition">
                </div>
                <div class="form-group col-sm-4 mt-2">
                    <label for="category" class="form-label">Category <span class="text-danger"> * </span></label>
                    <select class="form-select" id="category" name="category">
                        <option disabled selected>Choose Category</option>
                        <option value="vijay">books</option>
                        <option value="vijay">reading</option>
                        <option value="vijay">calculation</option>
                        <option value="vijay">coding</option>
                    </select>
                </div>
                <div class="form-group col-sm-3 mt-2">
                    <label for="book_subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="book_subject" >
                </div>
                <div class="form-group col-sm-3 mt-2">
                    <label for="book_source" class="form-label">Source</label>
                    <input type="text" class="form-control" name="book_source" >
                </div>
                <div class="form-group col-sm-2 mt-2">
                    <label for="call_no" class="form-label">Call No</label>
                    <input type="text" class="form-control" name="call_no">
                </div>
                
            </div>
            <hr>
            <span class=""><strong>Publisher Details:</strong></span>
            <div class="row d-flex justify-content-between">
                <div class="form-group col-sm-3 mt-2">
                    <label for="book_publisher" class="form-label">Publisher Name</label>
                    <input type="text" class="form-control" name="book_publisher" >
                </div>
                <div class="form-group col-sm-3 mt-2">
                    <label for="book_publisher_period" class="form-label">Publisher Period</label>
                    <input type="text" class="form-control" name="book_publisher_period" placeholder="ex: 2023-24">
                </div>
                <div class="form-group col-sm-3 mt-2">
                    <label for="book_publisher_place" class="form-label">Publisher Place</label>
                    <input type="text" class="form-control" name="book_publisher_place" >
                </div>
                <div class="form-group col-sm-3 mt-2">
                    <label for="book_publisher_date" class="form-label">Published Date</label>
                    <input type="date" class="form-control" name="book_publisher_date">
                </div>
            </div>

            <hr>
            <span class="span py-4"><strong>Bill Details:</strong></span>

            <div class="row">
                <div class="form-group col-sm-4 mt-2">
                    <label for="book_bill_no" class="form-label">Bill No</label>
                    <input type="text" class="form-control" name="book_bill_no">
                </div>
                <div class="form-group col-sm-4 mt-2">
                    <label for="book_bill_date" class="form-label">Bill Date</label>
                    <input type="date" class="form-control" name="book_bill_date">
                </div>
                <div class="form-group col-sm-4 mt-2">
                    <label for="book_price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="book_price">
                </div>
            </div>

            <hr>
            <span class="span py-4"><strong>Book Status:</strong></span>

            <div class="row">
                <div class="form-group col-sm-4 mt-2">
                    <label for="binding" class="form-label">Binding</label>
                    <select class="form-select" id="binding" name="binding">
                        <option value="Hard Binding" selected>Hard Binding</option>
                        <option value="Soft Binding" >Soft Binding</option>
                    </select>
                </div>
                <div class="form-group col-sm-4 mt-2">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger"> * </span></label>
                    <input type="number" class="form-control" name="quantity">
                </div>
                <div class="form-group mt-2">
                    <label for="remarks" class="form-label">Remarks</label>
                    <textarea name="remarks" id="remarks" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        <div class="alert alert-success text-center" role="alert" ></div>

        
      </form>
    </div>
  </div>
</div>

<!-- Modal Ends -->

<?= $this->endSection('content') ?>


