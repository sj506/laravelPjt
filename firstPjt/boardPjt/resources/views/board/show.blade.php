<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디테일</title>
</head>
<body>
    <h1>board show</h1>
    <div>
            num : {{$data->id}}
    </div>
    <div>
            제목 : {{$data->title}}
    </div>
    <div>
            내용 : {{$data->ctnt}}
    </div>
    <div>
            조회수 : {{$data->hits}}
    </div>
</body>
</html>