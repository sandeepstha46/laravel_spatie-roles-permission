
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!-- bootstrap 5 css file -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form">
                    <form action="" method="post">
                        @csrf
                        <div class="name">
                            <input type="text" placeholder="product's name" value="">
                        </div>
                        <div class="price">
                            <input type="text" placeholder="price" value="">
                        </div>
                        <div class="descriptions">
                            <input type="text" placeholder="description"  value="">
                        </div>
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>