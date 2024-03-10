

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Modal -->
<div class="modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Вход</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" placeholder="Ел. почта" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" class="form-control" id="password" placeholder="Пароль" name="password" autocomplete="" required>
                    </div>
                    <button type="submit" class="btn-login">Войти</button>
                </form>
            </div>
            <div class="modal-footer">
                <b class="register-txt">Если вы ещё не зарегистрированы, нажмите сюда  <span>👉🏼</span></b>
                <button id="registerButton" type="button" class="btn-register" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Зарегистрироваться
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    #loginModal{
        margin-top: 200px;
    }
    .form-control{
        border-radius: 1px!important;
        height: 45px;
        width: 400px;
        margin: 10px;
        border: none;
    }
    .modal-dialog{
        margin-right: 850px;
        width: 700px!important;
    }
    .modal-content{
        background-color: darkorange;
        width: 700px!important;
        height: 480px !important;
    }
    textarea:focus,
    textarea.form-control:focus,
    input.form-control:focus,
    input[type=text]:focus,
    input[type=password]:focus,
    input[type=email]:focus,
    input[type=number]:focus,
    [type=text].form-control:focus,
    [type=password].form-control:focus,
    [type=email].form-control:focus,
    [type=tel].form-control:focus,
    [contenteditable].form-control:focus {
        box-shadow: inset 0 -1px 0 #ddd;
    }
    form{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .modal-header{
        border: none;
    }
   .btn-login{
       width: 100px;
       height: 40px;
       border-radius: 2px;
       margin-top:10px;
       position: relative;
       left: 150px;
       background-color: black;
       color: white;
   }
    .btn-login:hover{
      background-color: #3b3b38;
      border-radius: 0 5px 0 5px!important;
    }
    .form-control:focus{
        border-radius: 0 8px 0 8px!important;

    }
    .modal-footer{
        border-width: 1px 0 0 0; /* top right bottom left */
        border-color: black;
        border-style: solid;
        display: flex;
        justify-content:center;
    }
    .btn-register{
            width: 180px;
            height: 40px;
            border-radius: 2px;
            margin-top:10px;
            background-color: black;
            color: white;
    }
    .btn-register:hover{
        background-color: #3b3b38;
        border-radius: 0 5px 0 5px!important;
    }
    .register-txt{
        font-style: normal;
        margin-right: 10px;
    }
    .register-txt span{
        margin-left: 10px;
        font-size: 20px;
    }
</style>
