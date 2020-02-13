<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Shop</title>
</head>
<body>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Brand</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
        @foreach($cl as $cloth)
          <tr>
            <td scope="row">{{$cloth->id}}</td>
            <td>{{$cloth->brand}}</td>
            <td>{{$cloth->description}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
