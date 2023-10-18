<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        body{
            font-family: 'Poppins', sans-serif;
            background: #ececec;
        }
        /*------------ Form container ------------*/
        .box-area{
            width: 930px;
        }
        /*------------ Right box ------------*/
        .right-box{
            padding: 40px 30px 40px 40px;
        }
        /*------------ Custom Placeholder ------------*/
        ::placeholder{
            font-size: 16px;
        }
        .rounded-4{
            border-radius: 20px;
        }
        .rounded-5{
            border-radius: 30px;
        }
        /*------------ For small screens------------*/
        @media only screen and (max-width: 768px){
            .box-area{
                margin: 0 10px;
            }
            .left-box{
                height: 100px;
                overflow: hidden;
            }
            .right-box{
                padding: 20px;
            }
        }
    </style>
    <title>Simple Form</title>
</head>
<body>
        <!----------------------- Main Container -------------------------->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Form Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="https://github.com/AlfanLukeyan/trash/blob/main/form-app/3d-render-smartphone-form.png?raw=true" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Developers on this platform.</small>
            </div>
            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Take a Look</h2>
                        <p>Please check your data!</p>
                    </div>
                    <div class="mt-3">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Email Address:</strong> {{ $results['email'] }}</li>
                            <li class="list-group-item"><strong>Name:</strong> {{ $results['name'] }}</li>
                            <li class="list-group-item"><strong>Phone Number:</strong> {{ $results['phone_number'] }}</li>
                            <li class="list-group-item"><strong>GPA:</strong> {{ $results['gpa'] }}</li>
                            <li class="list-group-item"><strong>Profile Picture:</strong> <img src="{{ asset('storage/images/' . $results['profile_picture']) }}" alt="user-picture" class="img-fluid"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>