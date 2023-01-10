<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h1>Create</h1>
        <form action="create" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Code</label>
                <input type="text" class="form-control" name="code" id="exampleFormControlInput1" placeholder="Code">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="exampleFormControlInput1" placeholder="Type">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Create</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>