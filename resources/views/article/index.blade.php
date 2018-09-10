@extends('layouts.admin')

@section('page-heading')
All Articles
@endsection

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-article">
    Create New Article
</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Heading</th>
      <th scope="col">Text</th>
      <th scope="col" class="text-right">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($articles as $article)  
        <tr scope="row">
          <td>{{$article->title}}</td>
          <td>{{$article->heading}}</td>
          <td>{{$article->detail}}</td>
          <td class="text-right">
                          
          <button id="editBtn" class="btn btn-xs btn-info" type="button"
                      data-article-title="{{$article->title}}" data-article-heading="{{$article->heading}}" data-article-id="{{$article->id}}"
                      data-article-detail="{{$article->detail}}" data-article-url="{{ config('app.app_host_name')}}/article"
                      data-toggle="modal" data-target="#modal-edit-article"> Edit</button>
          <button  id="deleteBtn" class="btn btn-xs btn-danger"> Delete</button></td>
            
        </tr>
    @endforeach
    
  </tbody>
</table>

@endsection

<!-- Create Modal Window -->
<div class="modal fade" id="modal-create-article" rol="dialog">
    <div class="modal-dialog" role=document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Article</h4>
            </div>

            <form action="{{route('article.store')}}" method="post" id="article-form">
                    {{ csrf_field() }}

                <div class="modal-body">

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input  type="text" class="form-control" name="title" id="title">
                        </div>     

                        <div class="form-group">
                            <label for="description">Heading</label>
                            <textarea  class="form-control" name="heading" id="heading" cols=30 rows=4>
                            </textarea>
                        </div>                           
                    
                        <div class="form-group">
                            <label for="description">Detail</label>
                            <textarea  class="form-control" name="detail" id="detail" cols=30 rows=12>
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
<div class="modal fade" id="modal-edit-article" >
    <div class="modal-dialog" role=document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Article</h4>
            </div>

            <!--{{ config('app.app_host_name')}}/article-->
            <form action="{{route('article.update','do')}}" method="post" id="article-update-form">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}

                <div class="modal-body">
                    
                    <input  type="hidden"  name="id" id="article_id" value="">
                    
                    <div class="form-group">
                            <label for="name">Title</label>
                            <input  type="text" class="form-control" name="title" id="title">
                        </div>     

                        <div class="form-group">
                            <label for="description">Heading</label>
                            <textarea  class="form-control" name="heading" id="heading" cols=30 rows=4>
                            </textarea>
                        </div>                           
                    
                        <div class="form-group">
                            <label for="description">Detail</label>
                            <textarea  class="form-control" name="detail" id="detail" cols=30 rows=12>
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

