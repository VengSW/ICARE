<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Admin Homepage</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #bec5e6;
        }
        
        .nav{
            /* padding: 5px; */
            width: 100%;
            background-color: #6b7bc7;
            color: white;
        }
        ul{
            text-align: right;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }
        table{
            width: 90%;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        thead{
            text-align: center;
            background-color: #5b6ab3;
            color: white;
        }
        article{
            font-weight: bold;
            font-size: 30px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <ul>ICARE</ul>
        <ul>Log Out</ul>
    </div>
    <center>
        <div>
            <article>Users Records</article>
        </div>
        <form method="post" action="destroy">
            @csrf
            <table border="1">
                <thead>
                    <tr>
                        <th>User ID </th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Registered At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <th scope="row"> {{ $row->UserID}} </th>
                        <td> {{ $row->name}} </td>
                        <td> {{ $row->email}} </td>
                        <td> {{ $row->created_at}} </td>
                        <td> <button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                    @endforeach
                </tbody>
                {{ $data->links() }}
            </table>
        </form>
</center>
</body>
</html>