@extends('layouts.admin')

@section('page-heading')
All Categories
@endsection

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
    Create New Category
</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col" class="text-right">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($categories as $cat)  
    <tr scope="row">
      <td>{{$cat->name}}</td>
      <td>{{$cat->description}}</td>
      <td class="text-right">
          <button id="editBtn" class="btn btn-xs btn-info" type="button"
                  data-cat-name="{{$cat->name}}" data-cat-desc="{{$cat->description}}" data-cat-id="{{$cat->id}}" data-cat-url="{{ config('app.app_host_name')}}/category"
                  data-toggle="modal" data-target="#modal-edit-category"> Edit</button>
          <button  id="deleteBtn" class="btn btn-xs btn-danger"> Delete</button></td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection

<!-- Create Modal Window -->
<div class="modal fade" id="modal-create-category" rol="dialog">
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


<!-- Edit Modal Window -->
<div class="modal fade" id="modal-edit-category" >
    <div class="modal-dialog" role=document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Category</h4>
            </div>

            <!--{{ config('app.app_host_name')}}/category-->
            <form action="{{route('category.update','do')}}" method="post" id="category-update-form">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                <div class="modal-body">
                        <input  type="hidden"  name="id" id="category_id" value="">
                    
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
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                    
            </form>             
             <!-- / .form -->                    

        </div>

        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

