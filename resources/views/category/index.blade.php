@extends('layouts.admin')

@section('page-heading')
All Categories
@endsection

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    Create New
</button>


<div class="modal fade" id="modal-default" rol="dialog">
    <div class="modal-dialog" role=document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Category</h4>
            </div>

            <form action="{{route('category.store')}}" method="post" id="category-form">
                    {{ csrf_field() }}

                <div class="modal-body">


                        <div class="form-group">
                            <label for="name">Name</label>
                            <input  type="text" class="form-control" name="name" id="name">
                        </div>     

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  class="form-control" name="description" id="description" cols=20 rows=5>
                            </textarea>
                        </div>                           



                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                    
            </form>             
             <!-- / .form -->                    

        </div>

        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection


