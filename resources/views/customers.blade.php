<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="asset('css/style.css')">
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/customers') }}">Customer Accounts</a>
        <a href="{{ url('/users') }}">User Accounts</a>
    </nav>

    <h1>Customer Accounts</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?=$customer['id']?></td>
                    <td><?=$customer['name']?> </td>
                    <td><?=$customer['email']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>