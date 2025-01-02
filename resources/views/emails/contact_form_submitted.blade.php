<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>New Customer Inquiry</h1>
    <p style="padding-top: 15px; padding-bottom: 15px">Your contact form received a new response.</p>
    <table>
        <tbody>
            <tr>
                <td><strong>First Name:</strong></td>
                <td>{{ $inputs['first_name'] }}</td>
            </tr>
            <tr>
                <td><strong>Last Name:</strong></td>
                <td>{{ $inputs['last_name'] }}</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>{{ $inputs['email'] }}</td>
            </tr>
            <tr>
                <td><strong>Message:</strong></td>
                <td>{{ $inputs['message'] }}</td> <!-- Updated to access message -->
            </tr>
        </tbody>
    </table>
</body>
</html>
