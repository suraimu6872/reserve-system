<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Original CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <title>設定</title>
</head>

<body>
    <header class="navbar">
        <div class="container-fluid">
            <div class="navbar-brand">SAMPLE SHOP</div>
            <form class="d-flex">
                <a href="/admin/reserve_list.php" class="mx-3"><i class="bi bi-list-task nav-icon"></i></a>
                <a href="/admin/setting.php"><i class="bi bi-gear nav-icon"></i></a>
            </form>
        </div>
    </header>

    <h1>設定</h1>

    <form class="card" method="post">
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">予約可能日</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>0日前</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">営業時間（予約可能時間）</label>
                <div class="row">
                    <div class="col-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>00:00</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-2 text-center pt-2">
                        ～
                    </div>
                    <div class="col-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>00:00</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">1時間当たりの予約上限人数</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>1人</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="d-grid gap-2 my-3">
                <button class="btn btn-primary rounded-pill" type="submit">登録</button>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>