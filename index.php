<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phonebook registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Registring your phone number</h3>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="post">
                                <input type="number" class="form-control mb-2" placeholder=" phone Id " name="pid">
                                <input type="text" class="form-control mb-2" placeholder=" phone name " name="pname">
                                <input type="number" class="form-control mb-2" placeholder=" phone number " name="pphoned">
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
 
</html>