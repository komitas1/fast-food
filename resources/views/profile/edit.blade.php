<x-app-layout>
   <div id="index-bar" class="d-flex justify-between ">
       <div class="profile-bar">
            <div class="user-cart">
                <h2>Добрый день</h2>
                <span>{{Auth::user()->name}}</span>
            </div>
            <div class="link-div">
                <div class="div-for-a">
                    <div>
                        <a class="a-link" href="/">
                            Главный
                            <img src="/images/home.svg" alt="home">
                        </a>
                    </div>
                </div>
                <div class="div-for-a">
                    <div>
                        <a class="a-link" href="/profile">
                            Профил
                            <img src="/images/profile.svg" alt="home">
                        </a>
                    </div>
                </div>
                <div class="div-for-a">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div>
                        <a class="a-link" href="{{route('logout')}}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Выйти') }}
                            <img class="logout-icon" src="/images/logout.svg" alt="logout">
                        </a>
                    </div>
                </form>
                </div>
            </div>
       </div>
       <div class="container-edit">
           <div class="py-12">
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                   <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg ">
                       <div class="max-w-xl">
                           @include('profile.partials.update-profile-information-form')
                       </div>
                   </div>

                   <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                       <div class="max-w-xl">
                           @include('profile.partials.update-password-form')
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</x-app-layout>
<style>
    #index-bar{
        overflow: auto; /* Создает скролл внутри контейнера */
        height: 870px;
        background-color: #313131;
    }
    .profile-bar{
        width: 300px;
        background-color: #fda102;
        position: sticky; /* Позиционирование элемента на месте */
        top: 0;

    }
    .container-edit{
        height: auto;
        width: 1600px;
        display: flex;
        justify-content: start;
        flex-direction: column;
    }
    .user-cart{
        width: 290px;
        height: 180px;
        border: solid  gray 1px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        flex-direction: column;
    }
    .user-cart span {
        font-size: 21px;
        width: 200px; /* Установите желаемую ширину для span */
        display: inline-block;
        padding: 5px; /* Для наглядности */
        white-space: nowrap; /* Текст остается на одной строке */
        overflow: hidden; /* Скрыть текст, если он превышает ширину */
    }
    .div-for-a{
        width:290px;
        height: 40px;
        display: flex;
        padding: 0 0 0 10px;
        margin: 0;
        border-bottom:solid 1px gray;
        align-items: end;
    }
    .div-for-a:hover{
        border-bottom:solid 1px black;
    }
    .link-div{
        display: flex;
        justify-content: center;
        align-items: start;
        flex-direction: column;
    }
    .a-link{
        text-decoration: none;
        color: black;
    }
    .div-for-a form div a,.div-for-a div a{
        display: flex;
        width: 90px;
        justify-content: space-between;
        align-items: center;
    }
    .div-for-a form{
        padding: 0;
        margin: 0;
    }
</style>
