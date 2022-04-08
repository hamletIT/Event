<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<div class="w3-container">
 <p></p>
  
  <div class="w3-card-4">
    <div class="w3-container w3-green">
      <h2>Yerevan Events</h2>
    </div>

    <form action="{{ route('backend.createevent')}}" class="w3-container" method="POST"  enctype="multipart/form-data">
        @csrf
      <p>
      <select class="selectpicker form-control mb-3"  data-live-search="true" name="user_id">
      @foreach($categorys as $category)
          <option data-tokens="ketchup mustard" value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
      </select>
      <input class="w3-input" type="text" name="name">
      <label>event_name</label></p>
      <p>     
      <input class="w3-input" type="text" name="discription">
      <label>descript</label></p>
      <p>
      <input class="w3-input" type="file" name="file">
      <label>file</label></p>
      <p>   
      <input class="w3-input" type="text" name="date_start">
      <label>start event</label></p>
      <p>
      <input class="w3-input" type="text" name="date_end">
      <label>end event</label></p>
      <p>  
      <input class="w3-input" type="submit">
      <p></p>
    </form>
  </div>
  <p></p>
  <p></p>
  <!-- ------------------------------------------------------------- -->
  <div class="w3-card-4">
    <div class="w3-container w3-green">
      <h2>Create Category</h2>
    </div>

    <form action="{{ route('backend.createcategory')}}" class="w3-container" method="POST">
        @csrf
      <p>
      <input class="w3-input" type="text" name="name">
      <label>Category name</label></p>
      <p>     
      <input class="w3-input" type="submit">
      <p></p>
    </form>
  </div>
  <!-- -------------------------------------------------- -->
</body>
</html>
