@extends('layouts.main')

@section('title', 'login')

@section('content')
    <div class="caixa__login">
        <h2>Entrar</h2>
        <form method="/events" action="POST" id="form1">
            @csrf
            <div class="caixa__login-input">
                <input id="email" name="email" type="text" required />
            <label>Email</label>
            </div>
            <div class="caixa__login-input">
                <input id="password" name="password" type="password" required />
                <label>Senha</label>
            </div>
            <a><input id="btn" type="submit" style="background:none; border: none;color: white" /></a> 
                   
            <div id="g_id_onload"
                data-client_id="700524822064-481h91l6qo6hi1uip42arc6cc8vec1a5.apps.googleusercontent.com"
                data-context="signin"
                data-ux_mode="popup"
                data-login_uri="http://localhost/Nova%20pasta/"
                data-callback="retorna"
                data-auto_prompt="false">
            </div>

            <div class="g_id_signin"
                data-type="icon"
                data-shape="circle"
                data-theme="filled_black"
                data-text="signin_with."
                data-size="small">
            </div>
            </a> 
        </form>
        
		  @if(isset($_GET['mess'])){
			@if($_GET['mess'] == 'erro'){
			   echo 
                "<script defer>window.alert('Erro de login!')</script>"
				;
			}
			@elseif($_GET['mess'] == 'session'){
			  echo 
                "<script defer>window.alert('Usuário sem sessão!')</script>"
				;
			}
			@elseif($_GET['mess'] == 'logout'){
			  echo 
                "<script defer>window.alert('sessão finalizada com sucesso!')</script>"
				;
			}
		  }
          @endif
		@endif
    </div>
    <script>
    //    const form = document.querySelector('#form1');
    //    const btn = document.querySelector('#btn');
    //    btn.addEventListener('click',(e)=>{form.submit()});
//
    //    function retorna(response){
    //        const data = jwt_decode(response.credential);
    //        var email = data.email;
    //        $.get("valida.php", {email}).done(function(resposta){
    //            //console.log(resposta)
    //            window.location = "user.php?mess=ok";
    //        });
    //    }
//
    </script>

@endsection