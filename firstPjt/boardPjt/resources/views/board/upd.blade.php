<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>board Update</h1>
    <a href="<?= route('boards') ?>"><button>리스트</button></a>
    <form method="POST" action="<?= route('boards.updProc',['id'=>$data->id]) ?>">
        @csrf
        <div>
            <label>제목 : <input type="text" name="title" value="{{$data->title}}"></label>
        </div>
        <div>
            <label>내용 : <textarea name="ctnt">{{$data->ctnt}}</textarea></label>
        </div>
        <input type="submit" value="수정">
    </form>
</body>
</html>