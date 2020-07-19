<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <title>Todo List</title>
</head>

<body>
    <div class="container">
    <h1><i class="fa fa-list"></i> Todo List ::</h1>
        <hr>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                เพิ่มรายการ
                </h4>
            </div>
            <div class="panel-body">
                <form action="/store"method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">กรอกชื่อรายการ :: </label>
                        <input type="text" name="detail" placeholder="ชื่อรายการ" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="selectCategory">เลือกหมวดหมู่ :: </label>
                        <select name="category_id" id="" class="form-control">

                            @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                           @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> บันทึก</button>
                </form>
            </div>
        </div>
        <hr>
        <p>&copy; 2017 Bundit Nuntates</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>

</html>
