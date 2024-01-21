<?php
$msgFullName = '';
$msgEmail = '';
$password = '';
$cpassword = '';
$msgSuccess = '';

function isFullNameValid($fullName)
{
    // Kiểm tra xem full name có chứa ký tự đặc biệt hoặc số không
    // Nếu có, trả về false; ngược lại, trả về true
    if (preg_match('/[!@#$%^&*()_+{}\[\]:;<>,.?~\\\\\/0-9]/', $fullName)) {
        return false;
    } else {
        return true;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isFullNameValid($_POST["fullName"])) {
        $msgFullName = 'Full name không chứa ký tự đặc biệt và số';
    } else if ($_POST["password"] != $_POST["re-password"]) {
        $cpassword = 'Password và repeat password phải có giá trị giống nhau';
    } else {
        $msgSuccess = 'Đăng ký thành công!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>SignUp</title>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-img">
            <img src="./img/Relics Of A Mortal Past - NFT 1.png" alt="logo" />
        </div>
        <div class="login-form">
            <h1 id="heading">Welcome to <span>NFT</span> marketplace</h1>
            <span>Create your account</span>
            <form id="form" action="" method="POST">
                <div class="input-group">
                    <label for="fullName">Full name</label>
                    <input type="text" id="fullName" name="fullName" required>
                    <span style="color: red"><?php echo $msgFullName; ?></span>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">

                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <div class="icon" onclick="togglePassword('password')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M17.725 7.65C17.4833 7.26667 17.225 6.90833 16.9583 6.575C16.65 6.18333 16.0666 6.15 15.7166 6.5L13.2166 9C13.4 9.55 13.4333 10.1833 13.2666 10.8417C12.975 12.0167 12.025 12.9667 10.85 13.2583C10.1916 13.425 9.55831 13.3917 9.00831 13.2083C9.00831 13.2083 7.81664 14.4 6.95831 15.2583C6.54164 15.675 6.67498 16.4083 7.23331 16.625C8.12498 16.9667 9.04998 17.1417 9.99998 17.1417C11.4833 17.1417 12.925 16.7083 14.2416 15.9C15.5833 15.0667 16.7916 13.8417 17.7666 12.2833C18.5583 11.025 18.5166 8.90833 17.725 7.65Z" fill="#B2B2B2" />
                            <path d="M11.6833 8.31667L8.31664 11.6833C7.89164 11.25 7.61664 10.65 7.61664 10C7.61664 8.69167 8.6833 7.61667 9.99997 7.61667C10.65 7.61667 11.25 7.89167 11.6833 8.31667Z" fill="#B2B2B2" />
                            <path d="M15.2084 4.79167L12.3834 7.61667C11.775 7 10.9334 6.63333 10 6.63333C8.13335 6.63333 6.63335 8.14167 6.63335 10C6.63335 10.9333 7.00835 11.775 7.61669 12.3833L4.80002 15.2083H4.79169C3.86669 14.4583 3.01669 13.5 2.29169 12.3667C1.45835 11.0583 1.45835 8.93333 2.29169 7.625C3.25835 6.10833 4.44169 4.91667 5.75835 4.1C7.07502 3.3 8.51669 2.85833 10 2.85833C11.8584 2.85833 13.6584 3.54167 15.2084 4.79167Z" fill="#B2B2B2" />
                            <path d="M12.3833 10C12.3833 11.3083 11.3167 12.3833 10 12.3833C9.95 12.3833 9.90834 12.3833 9.85834 12.3667L12.3667 9.85833C12.3833 9.90833 12.3833 9.95 12.3833 10Z" fill="#B2B2B2" />
                            <path d="M18.1417 1.85833C17.8917 1.60833 17.4833 1.60833 17.2333 1.85833L1.85834 17.2417C1.60834 17.4917 1.60834 17.9 1.85834 18.15C1.98334 18.2667 2.14167 18.3333 2.30834 18.3333C2.475 18.3333 2.63334 18.2667 2.75834 18.1417L18.1417 2.75833C18.4 2.50833 18.4 2.10833 18.1417 1.85833Z" fill="#B2B2B2" />
                        </svg>
                    </div>
                </div>
                <div class="input-group">
                    <label for="re-password"> Repeat Password</label>
                    <input type="password" id="re-password" name="re-password" required>
                    <span style="color: red"><?php echo $cpassword; ?></span>
                    <div class="icon" onclick="togglePassword('re-password')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M17.725 7.65C17.4833 7.26667 17.225 6.90833 16.9583 6.575C16.65 6.18333 16.0666 6.15 15.7166 6.5L13.2166 9C13.4 9.55 13.4333 10.1833 13.2666 10.8417C12.975 12.0167 12.025 12.9667 10.85 13.2583C10.1916 13.425 9.55831 13.3917 9.00831 13.2083C9.00831 13.2083 7.81664 14.4 6.95831 15.2583C6.54164 15.675 6.67498 16.4083 7.23331 16.625C8.12498 16.9667 9.04998 17.1417 9.99998 17.1417C11.4833 17.1417 12.925 16.7083 14.2416 15.9C15.5833 15.0667 16.7916 13.8417 17.7666 12.2833C18.5583 11.025 18.5166 8.90833 17.725 7.65Z" fill="#B2B2B2" />
                            <path d="M11.6833 8.31667L8.31664 11.6833C7.89164 11.25 7.61664 10.65 7.61664 10C7.61664 8.69167 8.6833 7.61667 9.99997 7.61667C10.65 7.61667 11.25 7.89167 11.6833 8.31667Z" fill="#B2B2B2" />
                            <path d="M15.2084 4.79167L12.3834 7.61667C11.775 7 10.9334 6.63333 10 6.63333C8.13335 6.63333 6.63335 8.14167 6.63335 10C6.63335 10.9333 7.00835 11.775 7.61669 12.3833L4.80002 15.2083H4.79169C3.86669 14.4583 3.01669 13.5 2.29169 12.3667C1.45835 11.0583 1.45835 8.93333 2.29169 7.625C3.25835 6.10833 4.44169 4.91667 5.75835 4.1C7.07502 3.3 8.51669 2.85833 10 2.85833C11.8584 2.85833 13.6584 3.54167 15.2084 4.79167Z" fill="#B2B2B2" />
                            <path d="M12.3833 10C12.3833 11.3083 11.3167 12.3833 10 12.3833C9.95 12.3833 9.90834 12.3833 9.85834 12.3667L12.3667 9.85833C12.3833 9.90833 12.3833 9.95 12.3833 10Z" fill="#B2B2B2" />
                            <path d="M18.1417 1.85833C17.8917 1.60833 17.4833 1.60833 17.2333 1.85833L1.85834 17.2417C1.60834 17.4917 1.60834 17.9 1.85834 18.15C1.98334 18.2667 2.14167 18.3333 2.30834 18.3333C2.475 18.3333 2.63334 18.2667 2.75834 18.1417L18.1417 2.75833C18.4 2.50833 18.4 2.10833 18.1417 1.85833Z" fill="#B2B2B2" />
                        </svg>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="agree" name="agree" />
                        I agree terms & conditions
                    </label>
                </div>
                <button type="submit">Create an account</button>
            </form>
            <span class="sign-in-link">Already have an account ? <a href="/sign-in">Sign in</a></span>
            <span style="margin-top: 20px; color: green"><?php echo $msgSuccess; ?></span>
        </div>
    </div>
</body>
<script>
    function togglePassword(id) {
        var x = document.getElementById(id);
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>