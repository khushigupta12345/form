<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to check conform password field | Password matching in js</title>
    <link rel="stylesheet" href="style.css">
     <!---bootstrap css link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form>
        <h4 class="text">Password Confirm</h4>
        <strong>
         <lable>Username</lable>
         <input type="text" class="form-control username">
        </strong>
        <strong>
         <lable>Password</lable>
         <input type="password" class="form-control password">
        </strong>
        <strong>
         <lable>ConformPassword</lable>
         <input type="password" class="form-control confirmPassword">
        </strong>
        <button type="submit" class="button">Sign In</button>

        <script>
          document.querySelector('.button').onclick = function()
          {
            var password =  document.querySelector('.password').value,
             confirmPassword =  document.querySelector('.confirmPassword').value;
            if (password == "")  
            {
             alert("field can't be empty.");   
            }
            else if(password != confirmPassword)
            {
                alert("password did't match try again.");
                return false
            }
            else if(password == confirmPassword)
            {
                alert("password matched.");
                return true
            }
          }
        </script>
    </form>
</body>
</html>