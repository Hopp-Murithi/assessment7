<div class="container">

   


    <form method="post">

        <h1>Add Cohort member</h1>
        <?php

global $success_msg;

if ($success_msg) {
    echo "<p id='message'>Cohort member has been added successfully</p>";

    echo '<script> document.getElementById("message").style.display = "flex"; </script>';

    echo    '<script> 
                setTimeout(function(){
                    document.getElementById("message").style.display ="none";
                }, 3000);
            </script>';
}
?>
        <div>
            <label for="name">Name</label>
            <input type="text" id='name' name="name" required />
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id='email' required />
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input type="number" name="phone" id='phone' required />
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id='age' required />
        </div>
        <input type="submit" name='submit'>
        
    </form>
</div>
</div>
<style>
    body {
        font-size: 16px;
        line-height: 1.5;
        background: radial-gradient(#0B20D8, #ffffff) no-repeat center center fixed;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {
        color: black;
    }

    label {
        display: block;
        color: black;
        margin-bottom: 10px;
        font-family: "Roboto Mono", monospace;
        font-size: 18px;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"] {
        padding: 5px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #040404;
        color: white;
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #040404;
    }

    #message {
    background-color: #ffffff;
    color:#16EC28;
    border-radius: 5px;
    padding:4px;
    font-size: 20px;
    font-weight: 400;
    }
</style>