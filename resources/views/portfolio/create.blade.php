<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1>Add Data to Portfolio</h1>
        <form action ="/portfolio/store" method="POST">
        @csrf
          <div class="form-group">
                <label>ID</label>
                <input type ="text" name="id" class="form-control" placeholder="Enter ID">
            </div>
          <div class="form-group">
                <label>Category</label>
                <input type ="text" name="category_id" class="form-control" placeholder="Enter Category">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type ="text" name="name" class="form-control" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type ="text" name="desc" class="form-control" placeholder="Enter Description">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Input File</label>
                <input class="custom-file-input" name="image_file_url" type="file" id="formFile">
              </div>
            <button type ="submit" name="submit" value="Save"class="btn btn-primary">Save Data </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

<body>

</body>
</html>