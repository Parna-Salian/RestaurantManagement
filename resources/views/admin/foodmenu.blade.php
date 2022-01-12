<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar')
    </div>
    <div style = "position:relative; top: 60px; right: -150px;">
      <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div>
          <label>Title</label>  
          <input style="color:blue;" type="text" name="title" placeholder="Title" required>
        </div>
        <div>
          <label>Price</label>  
          <input style="color:blue;" type="number" name="price" placeholder="Price" required>
        </div>
        <div>
          <label>Image</label>  
          <input type="file" name="image" required>
        </div>
        <div>
          <label>Description</label>  
          <input style="color:blue;" type="text" name="description" placeholder="Description">
        </div>
        <div> 
        <button class="btn btn-outline-primary">Save</button>
        </div>
      </form>
    </div>
      @include('admin.adminscript')
  </body>
</html>

   
</x-app-layout>
