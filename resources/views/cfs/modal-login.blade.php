<!-- Modal Form Login -->
<div class="ui two column basic modal" id="modal-login" style="margin-top: 1%;border-left: 5%;max-width: 1000px">
      <div class="column" style="width: 300px;margin-top: 8%;display: inline-block;">
          <div class="ui piled segments">
          <div class="header">
            <h1 class="ui header" style="text-align: center;">
            _ Login _
          </h1>
            <hr>
          </div>
            @if(Auth::check())
                <a href="{{ route('users.logout') }}" class="ui button">Logout</a>
            @else
            <div class="ui segment" style="border-color: white;border:1px">
                <form action="{{ route('users.setLogin') }}" method="post" class="ui form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="field">
                            <label>Username</label>
                            <input type="text" name="email" placeholder="Username" required>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
            <div class="field">
                <button type="submit" class="ui button google plus">Login</button>
                <a href="{{ route('adminconference.home') }}" class="ui right button">Cancel</a>
            </div>
             </form>
            </div>
            @endif
          </div>
    </div>
    <div class="ui vertical divider">
              <h3 style="color: white"></h3>
    </div>

    <div class="center aligned column" style="max-width: 450px;margin-top: 8%;margin-left: 40%;display: inline-grid;">
      <img src="GOW.png">
      <div class="ui big green labeled icon button">
      <i class="signup icon"></i>
      <a href="{{ route('users.getRegister') }}" style="color: black">Register</a>
      </div>
  </div>
</div>
      <!--end module-->