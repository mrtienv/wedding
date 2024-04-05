<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./main.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div>
            <div id="pic1" class="pic">
                <img src="{{asset('./pic-1.png')}}" alt="" />
                <div class="content_card">
                    <div class="heading_line">
                        <h4 class="fw-400">Lời mời đám cưới từ</h4>
                    </div>
                    <div class="heading_name">
                        <i>
                            <h2 style="display: block">Trường</h2>
                            <h2 style="display: block; line-height: 1;">&</h2>
                            <h2 style="display: block">Hà</h2>
                        </i>

                    </div>
                    <div class="guest_name">
                        <p>Bạn nhập họ tên vào ô dưới đây nhé ạ:</p>
                        <span class="error" style="color: red"></span>
                        <form action="{{route('welcome')}}" method="POST">
                            <label for="name"></label>
                            <input type="text" name="" id="name" />
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    document.getElementById('name').addEventListener('blur', function() {
        var name = this.value; // Get the value entered by the user

        // Prepare the data to be sent
        var data = JSON.stringify({ name: name });

        // Fetch request
        fetch('/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: data
        })
            .then(response => {
                return response.json();
            })
            .then(data => {
                // Handle successful response
                if(!data.success) {
                    document.querySelector('span[class="error"]').innerHTML = 'Có lỗi xảy ra, thử thêm lại tên đầy đủ của bạn hoặc tên có dấu'
                }
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            })
            .catch(error => {
                document.querySelector('span[class="error"]').innerHTML = 'Có lỗi xảy ra, thử thêm lại tên đầy đủ của bạn hoặc tên có dấu'
            });
    });
</script>
</body>
</html>
