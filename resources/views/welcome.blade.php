<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 420px;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #ef4444; /* Laravel Red */
            color: white;
            text-align: center;
            padding: 24px 16px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 6px 0 0;
            opacity: 0.9;
            font-size: 14px;
        }
        .body {
            padding: 24px;
        }
        .subtitle {
            font-size: 12px;
            font-weight: bold;
            color: #9ca3af;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #f3f4f6;
            font-size: 14px;
        }
        .row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #4b5563;
        }
        .value {
            color: #111827;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <h1>Hello Laravel!</h1>
            <p>Welcome to Client-Server Technologies.</p>
        </div>
        <div class="body">
            <div class="subtitle">Developed by: John Lawrence A. De Leon</div>
            
            <div class="row">
                <span class="label">Student Name:</span>
                <span class="value">John Lawrence A. De Leon</span>
            </div>
            <div class="row">
                <span class="label">Student Number:</span>
                <span class="value">0124-0564</span>
            </div>
            <div class="row">
                <span class="label">Course:</span>
                <span class="value">BS Information Technology</span>
            </div>
            <div class="row">
                <span class="label">Section:</span>
                <span class="value">BSIT-3B</span>
            </div>
            <div class="row">
                <span class="label">Subject:</span>
                <span class="value">ITST 302</span>
            </div>
            <div class="row">
                <span class="label">Current Date:</span>
                <span class="value">{{ date('F j, Y') }}</span>
            </div>
        </div>
    </div>

</body>
</html>