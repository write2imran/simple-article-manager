@extends('layouts.admin')

@section('page-heading')
  All Categories
@endsection

@section('content')
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
    Create New
</button>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Category</h4>
            </div>
            <form id="category-form" action="{{ route('category.store') }}" method="POST" style="display: none;">
             {{ csrf_field() }}
                <div class="modal-body">
                    
                    <p>One fine body&hellip;</p>
                     
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                
            </form>     
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection


