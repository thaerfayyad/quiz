
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Simple Contact Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: "Open Sans", sans-serif;
        }
        .contact-form {
            padding: 50px;
            margin: 30px 0;
        }
        .contact-form h1 {
            text-transform: uppercase;
            margin: 0 0 15px;
        }
        .contact-form .form-control, .contact-form .btn  {
            min-height: 38px;
            border-radius: 2px;
        }
        .contact-form .btn-primary {
            min-width: 150px;
            background: #299be4;
            border: none;
        }
        .contact-form .btn-primary:hover {
            background: #1c8cd7;
        }
        .contact-form label {
            opacity: 0.9;
        }
        .contact-form textarea {
            resize: vertical;
        }
        .hint-text {
            font-size: 15px;
            padding-bottom: 15px;
            opacity: 0.8;
        }
        .bs-example {
            margin: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-auto">
            <div class="contact-form">
                <h1>Contact Us</h1>
                <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
                <form action="{{route('contact.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputFirstName">First Name</label>
                                <input type="text" class="form-control" name="fname" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" name="lname"  required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" name="msg" id="inputMessage" rows="5" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
</body>