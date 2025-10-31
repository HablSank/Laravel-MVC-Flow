<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background-color: #f9f9f9;
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse; 
        margin-bottom: 20px; 
        background-color: #ffffff; 
        border-radius: 8px;
        overflow: hidden; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    th {
        background-color: #002f75; 
        color: #ffffff; 
        font-weight: 600; 
        padding: 16px 20px;
        text-align: left;
        border-bottom: 2px solid #eee;
    }

    td {
        padding: 16px 20px;
        border-bottom: 1px solid #f0f0f0; 
        color: #555; 
    }

    tr:last-child td {
        border-bottom: none;
    }

    tr:hover {
        background-color: #e3e3e3; 
    }

</style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
        </tr>    
        @endforeach
    </table>
</body>
</html>