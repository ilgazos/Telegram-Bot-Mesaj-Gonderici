<!-- Coded by ILGAZ -->
<!-- 01001110 01100101 00100000 01001101 01110101 01110100 01101100 01110101 00100000 01010100 01110101 01110010 01101011 01110101 01101101 00100000 01000100 01101001 01111001 01100101 01101110 01100101 00100001 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Bot Mesaj Gönderici</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex align-items-center" style="min-height: 100vh;">
            <div class="card text-white bg-dark mb-3 mx-auto" style="width: 350px;">
                <div class="card-header fs-3 fw-bold text-center">İLETİŞİM</div>
                    <div class="card-body">
                        <form action="post.php" method="POST">
                        <div class="form-floating mb-3 text-muted">
                            <input type="text" name="chatid" class="form-control" id="floatingPassword" placeholder="Chat ID" value="" required>
                            <label for="floatingPassword">Chat ID</label>
                        </div>
                        <div class="form-floating mb-3 text-muted">
                            <input type="text" name="token" class="form-control" id="floatingPassword" placeholder="Bot Token" value="" required>
                            <label for="floatingPassword">Bot Token</label>
                        </div>
                        <div class="form-floating mb-3 text-muted">
                            <textarea class="form-control" name="mesaj" placeholder="Mesaj" id="floatingTextarea2" style="height: 100px" required></textarea>
                            <label for="floatingTextarea2">Mesaj</label>
                        </div>
                        <div class="form-floating">
                            <button type="submit" class="btn btn-success fs-5" style="width:100%; height:50px;">Gönder</button>
                        </div>
                        </form>
                        <footer class="mt-2 text-center fs-6">
                        <a href="https://instagram.com/ilgazos/" target="_blank" class="link-secondary">Coded by ILGAZ</a>
                        </footer>
                    </div>
                </div>              
            </div>  
        </div>
</body>
</html>