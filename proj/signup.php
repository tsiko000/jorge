<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        :root {
    --input-height: 35px;
}

body {
    background: url(latest.png);
    
}
.containerx {
    margin: 0px;
    font-family: 'Rubik';
    border: 1px solid black;
    padding: 15px;
    background: #fff;
    border-radius: 5px;
    

}

@font-face {
    font-family: Rubik;
    src: url(/Rubik.ttf);
}

.LoginContainer{
    width: 400px;
}

.MainContainer{
    height: calc(100vh - 40px);
    width: calc(100vw - 40px);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.CompanyContainer{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 10px;
}

.CompanyLogoConatiner{
    padding-right: 10px;
}

.CompanyLogoImg{
    height: 60px;
}

.CompanyName{
    font-size: 30px;
    font-weight: bolder;
}

.LoginHeaderTitle{
    font-size: 25px;
    padding-bottom: 5px;
    font-weight: bold;
    text-align: center;
}

.FormContainer{
    padding-top: 20px;
    padding-bottom: 20px;
    height: max-content;
}

.FormContainer .InputContainer{
    padding-top: 10px;
    padding-bottom: 10px;
    height: max-content;
}

.InputContainer .label{
    display: block;
    font-weight: bold;
    padding-bottom: 5px;
}

.InputContainer .input{
    width: calc(100% - 6px);
    line-height: var(--input-height);
    font-size: large;
    border-radius: 5px;
    border: 1px solid grey;
}

.InputContainer .PasswordInputContainer{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin: 0px;
}

.InputContainer .PasswordInputContainer .input{
    width: 90%;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-right: 0px;
}

.InputContainer .PasswordInputContainer .ShowPasswordButton{
    cursor: pointer;
    width: 10%;
    height: calc(var(--input-height) + 4px);
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border: 1px solid grey;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    border-left: 0px;
}

.InputContainer .PasswordInputContainer .ShowPasswordButton:hover svg{
    fill: black;
}

.InputContainer .PasswordLabel{
    font-weight: bold;
    color: gray;
    font-size: 13px;
    padding-top: 5px;
}

.InputContainer.RememberForgotContainer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.InputContainer .CheckboxInput{
    margin: 0px;
    width: 18px;
    height: 18px;
}

.ForgotPasswordContainer{
    color: red;
    cursor: pointer;
}

.ButtonsContainer .SignInButtonContainer .SigninButton:hover{
    background-color: #2863b4;
}

.ButtonsContainer .SignInButtonContainer .SigninButton{
    width: 100%;
    background-color: #2d70ce;
    color: white;
    border-radius: 10px;
    border: 0px;
    padding: 10px;
    font-size: 20px;
    cursor: pointer;
}

.ButtonsContainer .OthersButtonContainer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
}

.ButtonsContainer .OthersButtonContainer button{
    width: 48%;
    font-size: 15px;
    padding: 10px;
    cursor: pointer;
    border-radius: 7px;
    border: 0px;
}

.FooterContainer{
    padding-top: 30px;
    text-align: center;
}

.SignUpLink{
    color: #2d70ce;
    cursor: pointer;
}



    </style>
</head>
<body>
    
<header class="header">
  <span class="logo"><svg width="40px" height="40px" viewBox="0 0 81 80" aria-label="Logo Icon" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><path d="M40.9771 80C63.0687 80 80.9774 62.0914 80.9774 40C80.9773 17.9086 63.0685 -1.38069e-06 40.9769 -8.89459e-07C18.8853 -3.98224e-07 0.976602 17.9086 0.97665 40C0.976698 62.0914 18.8855 80 40.9771 80Z" fill="rgba(0,0,0,0)"></path><path d="M41.1477 73.9297C59.7223 73.8962 74.6797 58.6603 74.5562 39.8995C74.4327 21.1387 59.275 5.95723 40.7005 5.99078C22.126 6.02432 7.16848 21.2602 7.29199 40.021C7.4155 58.7818 22.5732 73.9633 41.1477 73.9297Z" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M41.1263 73.8359C51.0045 73.8136 58.9205 58.6285 58.8073 39.9192C58.694 21.2098 50.5943 6.06098 40.7161 6.08332C30.8379 6.10567 22.9219 21.2907 23.0352 40.0001C23.1484 58.7095 31.2481 73.8583 41.1263 73.8359Z" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M7.11914 39.8867L74.719 39.5995" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M9.5 27.5076L72.2542 27.2409" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M18.0156 15.1169L63.6156 14.9232" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M18.0078 64.7942L64.054 64.5984" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M9.51172 52.4614L72.4352 52.1937" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path><path d="M65.7781 40.0175C45.4753 39.9779 40.9169 44.5589 40.9429 64.9808C40.9168 44.5435 36.3512 39.94 16.0638 39.9004C36.3666 39.94 40.925 35.359 40.899 14.9372C40.925 35.359 45.4905 39.9625 65.7781 40.0175Z" fill="#fff"></path><path d="M40.7773 6.15967L41.0645 73.7439" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"></path></svg></span>
</header>




<section class="MainContainer">
    <div class="containerx">
        <form action="signupinf.php" method="POST" novalidate>
        <section class="LoginContainer">
            <section class="CompanyContainer">
                <div class="CompanyLogoConatiner">
                    <img class="CompanyLogoImg" src="./blood.png">
                </div>
                <div class="CompanyName">
                    Gejor Blood Center
                </div>
            </section>
            <section class="LoginHeaderContainer">
                <div class="LoginHeaderTitle">
                    Hello!
                </div>
                <div class="LoginHeaderSubTitle" style="text-align: center;">
                    Create your <b>account</b> 
                </div>
            </section>
            <section class="FormContainer">
                <div class="InputContainer">
                    <label class="label">Username</label>
                    <input class="input" type="text" name="uname">
                </div>
                <div class="InputContainer">
                    <label class="label">First Name : </label>
                    <input class="input" type="text" name="fname">
                </div>

                <div class="InputContainer">
                    <label class="label">Last Name : </label>
                    <input class="input" type="text" name="lname">
                </div>
                <div class="InputContainer">
                    <label class="label">Password*</label>
                    <div class="PasswordInputContainer">
                        <input class="input" type="password" name="pwd1">
                        <button class="ShowPasswordButton">
                            <svg fill="grey" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                                <g>
                                    <path
                                        d="m494.8,241.4l-50.6-49.4c-50.1-48.9-116.9-75.8-188.2-75.8s-138.1,26.9-188.2,75.8l-50.6,49.4c-11.3,12.3-4.3,25.4 0,29.2l50.6,49.4c50.1,48.9 116.9,75.8 188.2,75.8s138.1-26.9 188.2-75.8l50.6-49.4c4-3.8 11.7-16.4 0-29.2zm-238.8,84.4c-38.5,0-69.8-31.3-69.8-69.8 0-38.5 31.3-69.8 69.8-69.8 38.5,0 69.8,31.3 69.8,69.8 0,38.5-31.3,69.8-69.8,69.8zm-195.3-69.8l35.7-34.8c27-26.4 59.8-45.2 95.7-55.4-28.2,20.1-46.6,53-46.6,90.1 0,37.1 18.4,70.1 46.6,90.1-35.9-10.2-68.7-29-95.7-55.3l-35.7-34.7zm355,34.8c-27,26.3-59.8,45.1-95.7,55.3 28.2-20.1 46.6-53 46.6-90.1 0-37.2-18.4-70.1-46.6-90.1 35.9,10.2 68.7,29 95.7,55.4l35.6,34.8-35.6,34.7z" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <label class="PasswordLabel">Must be 8 characters at least</label>
                </div>


                <div class="InputContainer">
                    <label class="label">Re-enter Password</label>
                    <div class="PasswordInputContainer">
                        <input class="input" type="password" name="pwd2">
                        <button class="ShowPasswordButton">
                            <svg fill="grey" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                                <g>
                                    <path
                                        d="m494.8,241.4l-50.6-49.4c-50.1-48.9-116.9-75.8-188.2-75.8s-138.1,26.9-188.2,75.8l-50.6,49.4c-11.3,12.3-4.3,25.4 0,29.2l50.6,49.4c50.1,48.9 116.9,75.8 188.2,75.8s138.1-26.9 188.2-75.8l50.6-49.4c4-3.8 11.7-16.4 0-29.2zm-238.8,84.4c-38.5,0-69.8-31.3-69.8-69.8 0-38.5 31.3-69.8 69.8-69.8 38.5,0 69.8,31.3 69.8,69.8 0,38.5-31.3,69.8-69.8,69.8zm-195.3-69.8l35.7-34.8c27-26.4 59.8-45.2 95.7-55.4-28.2,20.1-46.6,53-46.6,90.1 0,37.1 18.4,70.1 46.6,90.1-35.9-10.2-68.7-29-95.7-55.3l-35.7-34.7zm355,34.8c-27,26.3-59.8,45.1-95.7,55.3 28.2-20.1 46.6-53 46.6-90.1 0-37.2-18.4-70.1-46.6-90.1 35.9,10.2 68.7,29 95.7,55.4l35.6,34.8-35.6,34.7z" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <label class="PasswordLabel">Must be 8 characters at least</label>
                </div>
               
    
            </section>
            <section class="ButtonsContainer">
                <div class="SignInButtonContainer">
                    <button class="SigninButton" type="submit">Create Account</button>
                </div>
</form>

            </section>
            <!-- <section class="FooterContainer">
                Don't have an accunt yet? <a class="SignUpLink">Sign up Today!</a>
            </section> -->
        </section>
   
    
    </section>
</body>
</html>