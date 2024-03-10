<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<div class="modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div  id="register-container" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <!-- Registration Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ел. Почта" required>
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" required>
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" class="form-control" id="password" placeholder="Повторите пароль" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn-register">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    #registerModal{
        margin-top: 200px;
    }
    #register-container{
        height: 550px!important;
    }
</style>
