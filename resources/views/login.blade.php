<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIMAWA - Login</title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

        <!-- Styles -->
        <style>
            :root {
                    --body_gradient_left:#00ac25;
                    --body_gradient_right: #00ac86;
                    --form_bg: #ffffff;
                    --input_bg: #E5E5E5;
                    --input_hover:#eaeaea;
                    --submit_bg: #1FCC44;
                    --submit_hover: #40e263;
                    --icon_color:#6b6b6b;
                }
                * {
                    padding: 0;
                    margin: 0;
                    box-sizing: border-box;
                }
                body {
                    /* make the body full height*/
                    height: 100vh;
                    /* set our custom font */
                    font-family: 'Roboto',
                    sans-serif;
                    /* create a linear gradient*/
                    background-image: linear-gradient(to right, var(--body_gradient_left), var(--body_gradient_right));
                    display:flex;
                }

                #form_wrapper {
                    width: 1000px;
                    height: 600px;
                    /* this will help us center it*/
                    margin:auto;
                    background-color: var(--form_bg);
                    border-radius: 50px;
                    /* make it a grid container*/
                    display: grid;
                    /* with two columns of same width*/
                    grid-template-columns: 0.9fr 1.1fr;
                    /* with a small gap in between them*/
                    grid-gap: 5vw;
                    /* add some padding around */
                    padding: 5vh 15px;
                }
                #form_left {
                    /* center the image */
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                #form_left img {
                    width: 420px;
                    height: 500px;
                }
                #form_right {
                    display: grid;
                    /* single column layout */
                    grid-template-columns: 1fr;
                    /* have some gap in between elements*/
                    grid-gap: 20px;
                    padding: 10% 5%;
                    margin-right: 20px;
                }
                .input_container {
                    background-color: var(--input_bg);
                    /* vertically align icon and text inside the div*/
                    display: flex;
                    align-items: center;
                    padding-left: 20px;
                }

                .input_container:hover {
                    background-color: var(--input_hover);
                }

                .input_container,
                #input_submit {
                    height: 60px;
                    /* make the borders more round */
                    border-radius: 30px;
                    width: 100%;
                }

                .input_field {
                    /* customize the input tag with lighter font and some padding*/
                    color: var(--icon_color);
                    background-color: inherit;
                    width: 90%;
                    border: none;
                    font-size: 1.3rem;
                    font-weight: 400;
                    padding-left: 30px;
                }

                .input_field:hover,
                .input_field:focus {
                    /* remove the outline */
                    outline: none;
                }

                #input_submit {
                    /* submit button has a different color and different padding */
                    background-color: var(--submit_bg);
                    padding-left: 0;
                    font-weight: bold;
                    color: white;
                    text-transform: uppercase;
                    margin-bottom: 40px;
                }

                #input_submit:hover {
                    background-color: var(--submit_hover);
                    /* simple color transition on hover */
                    transition: background-color,
                        1s;
                    cursor: pointer;
                }
                h1,
                span {
                    text-align: center;
                }
                h1 {
                    margin-top : 30px;
                }
                h3 {
                    margin-left: 10px;
                }

                img {
                    margin-left: 50px;
                    margin bottom: 20px;

                }


                i {
                    color: var(--icon_color);
                }
                /* make it responsive */
                @media screen and (max-width:768px) {

                    /* make the layout  a single column and add some margin to the wrapper */
                    #form_wrapper {
                        grid-template-columns: 1fr;
                        margin-left: 10px;
                        margin-right: 10px;
                    }
                    /* on small screen we don't display the image */
                    #form_left {
                        display: none;
                    }
                } 
    </style>
    </head>

    <body>
        <div id="form_wrapper">
                    <div id="form_left">
                        <img src="https://1.bp.blogspot.com/-MfNvagkV_b4/XqAoiGxOnTI/AAAAAAAAAww/EOuWafb7qvMgQ6Z-EeRvla7K4PFj3rYCACLcBGAsYHQ/s1600/schlr_login.png">
                    </div>
                    <div id="form_right">
                        <h1>Masuk</h1>
                        <h3>ID Pengguna</h3>
                        <div class="input_container">
                            <i class="fas fa-envelope"></i>
                            <input placeholder="ID Pengguna" type="email" name="Email" id="field_email" class='input_field'>
                        </div>
                        <h3>Kata Sandi</h3>
                        <div class="input_container">
                            <i class="fas fa-lock"></i>
                            <input  placeholder="Kata Sandi" type="password" name="Password" id="field_password" class='input_field'>
                        </div>
                        <input type="submit" value="Masuk" id='input_submit' class='input_field'>
                    </div>
                </div>
                </div>
    </body>
</html>