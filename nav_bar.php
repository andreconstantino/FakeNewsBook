<script>


function fecharMenu(var_menu){
  var listMenu = document.getElementsByClassName("myMenu");
  var menu = document.getElementById(var_menu);


  if(getComputedStyle(menu).visibility === 'visible'){
    menu.style.visibility = "hidden";
  }else{
    for (i = 0; i < listMenu.length; i++) {    
      if(getComputedStyle(listMenu[i]).visibility === 'visible'){
        listMenu[i].style.visibility = "hidden";
      }
    }
    menu.style.visibility = "visible";
  }
}



 </script> 
<div class="card" style="width: 100%; height:60px; background-color:#e0e0e0 ; 
 position: fixed; z-index: 100; display:flex; flex-direction:row;justify-content:space-between" >
<div style = "    display: flex;
    flex-direction: column;
    justify-content: center;
">
<!--<img  style="width:60px; margin-left:10px;" src="https://cdn-icons-png.flaticon.com/128/5359/5359828.png"></img>-->
<img  style="  margin-left:10px;  padding-right:0px; min-width:150px; max-width:220px;" src="img/logo.png"></img>
</div>
<div style="    display: flex;
    justify-content: flex-end;
    align-items: center;">

    
    <button onclick="fecharMenu('menuUsuario')" style="margin:10px; margin-left:0px" class="button  ">
      <i class="fas fa-user"></i>  
    </button>
    <button onclick="fecharMenu('menu')" style="margin:10px; margin-left:0px; " class="button ">
      <i class="fas fa-ellipsis-v"></i>
    </button>
</div>
</div>
<div style="width: 100%; height:50px;">


</div>

<div id="menu" style="visibility: hidden; width:200px;  background-color: #e0e0e0 ; z-index:101; position:fixed; right:5px; top:65px;
             padding:10px;" class="box myMenu" >
    
    <label style="margin-bottom: 5px;" ><i class="fas fa-ellipsis-v"></i> Menu</label>
    
    <a style="margin-top:10px; width:100%" class="button ">
      Pagina inicial
    </a>
    <a style="margin-top:10px; width:100%"" class="button ">
      Sobre o sistema
    </a>
    <a style="margin-top:10px; width:100%"" class="button ">
      Ajuda
    </a>
    <a style="margin-top:10px; width:100%"" class="button ">
      Relatar bug
    </a>


    <hr style="margin:10px; background-color:#757575; height:1px;" />
    <center>
      <button onclick="fecharMenu('menu')"  class="button is-primary">
        
        Fechar
    </button>
    <center>
    

    

</div>






<div id="menuUsuario" style="visibility: hidden; width:200px;  background-color: #e0e0e0 ; z-index:101; position:fixed; right:5px; top:65px;
             padding:10px;" class="box myMenu" >
      
    <label style="margin-bottom: 5px;" ><i class="far fa-user"></i> Username</label>
    

    <a style="margin-top:10px; width:100%"" class="button ">
      Editar Perfil
    </a>
    <a style="margin-top:10px; width:100%" class="button ">
      Trocar de conta
    </a>
    <a style="margin-top:10px; width:100%" class="button ">
      Deletar conta
    </a>

    <a style="margin-top:10px; width:100%"" class="button is-primary">
      Sair da conta
    </a>
    <hr style="margin:10px; background-color:#757575; height:1px;" />
    <center>
    <button onclick="fecharMenu('menuUsuario')"  class="button is-primary">
        
        Fechar
    </button>
    <center>

    

</div>






</div>