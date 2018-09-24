
$('#modal-edit-article').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) 
    var id = button.data('article-id')     
    var title = button.data('article-title') 
    var heading = button.data('article-heading') 
    var detail = button.data('article-detail') 
    var url = button.data('article-url') 
  
    
    var modal = $(this)

    modal.find('.modal-body #title').val(title)  
    modal.find('.modal-body #heading').val(heading)  
    modal.find('.modal-body #detail').val(detail)  
    modal.find('.modal-body #article_id').val(id)  
     
}) 

$('#modal-delete-article').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) 
    var id = button.data('article-id')     
  
    
    var modal = $(this)

    modal.find('.modal-body #article_id').val(id)  
     
})



$('#modal-edit-category').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) 
    var name = button.data('cat-name') 
    var desc = button.data('cat-desc') 
    var id = button.data('cat-id') 
    var url = button.data('cat-url') 
  
    
    var modal = $(this)

    modal.find('.modal-body #name').val(name)  
    modal.find('.modal-body #description').val(desc)  
    modal.find('.modal-body #category_id').val(id)  
    
    //var act = $('form').attr("action")
    //modal.find('form [action]').val(act+"/"+id)      
    //$('form').attr("action",url+"/"+id);
    //console.log(act);
     
}) 

