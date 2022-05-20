
@extends('layout.app')
@section('page_title')
Dashboard
@endsection

@section('page_content')

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-0">Add A Book</h3>
                </div>
                <div class="card-body">
                    <form class="row" method="post" enctype="multipart/form-data">
                        <div class="col-md-8 form-group">
                            <label>Book Title</label>
                            <input type="text" name="book_name" class="form-control">
                        </div>


                        <div class="col-md-4 form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>


                        <div class="col-md-6 mt-2 form-group">
                            <label>Book Cover Image</label>
                            <input type="file" name="cover_img" class="form-control" accept="image/*">
                        </div>


                        <div class="col-md-6 mt-2 form-group">
                            <label>PDF Malterial</label>
                            <input type="file" name="book" class="form-control">
                        </div>


                        <div class="col-md-12 mt-2 form-group">
                            <label>Book Description</label>
                            <textarea name="description" rows="4" class="form-control"></textarea>
                        </div>

                        <div class="col-12 form-group">
                            <button class="btn btn-primary mt-2" name="addBook" style="float:right">Save Book Info</button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title m-0">Uploaded Books</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Date Added</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
