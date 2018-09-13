<section id="detalle-serie">
   <div class="container detas">
      <div class="row">
         <div class="col-md-8">
            <div class="text-nun" >
               <h2 class="tit-anun"><?=$serie->nombre;?></h2>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <img src="<?=base_url().$serie->imagen;?>" class="img-fluid img-serie"/>
                  <button type="submit" class="btn btn-serie">Compartir</button>
                  <div class="col-md-12">
                     <button id="fb" type="submit" class="btn-redes-s" ><i class="fab fa-facebook-square fa-5x" style="color:#fff;"></i></button>
                     <button class="btn-redes-s" id="tw"><i class="fab fa-twitter-square fa-5x" style="color:#fff;" ></i></button>
                  </div>
               </div>
               <div class="col-md-7" id="descripcion-p">
                  <p>Categorias: <?=$serie->categoria?></p>
                  <br>
                  <p class="status">Estado: <?=$serie->estado?></p>
                  <br>
                  <p class="sipnosis">Sinopsis: <?=$serie->descripcion;?></p>
                  <p>Dias de estreno de nuevos capitulos: <?=$serie->dias;?></p>
                  <p>Fecha de estreno de la serie: <?=$serie->fecha_estreno;?> </p>
                  <p>Duración de los cápitulos: <?=$serie->duracion;?> </p>
                  <div class="reaccion">
                     <ul class="nav nav-bar fav">
                      <li  class="nav-item"><a class="nav-link" id="favorite" title="Favorito" data-toggle="tooltip" href="#"><i class="fas fa-heart" style="color:#FF0000;"></i></a></li>
                      <li  class="nav-item"><span class="navbar-text"><a href="#"  title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"  onclick="cambio()"><i class="fas fa-star" id="star"></i></a></span>
                        <span class="navbar-text"><a href="#"title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"><i class="fas fa-star"></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span> 
                     </li>
                      <li  class="nav-item"><a class="nav-link" href="#">Agregar a mi lista</a></li>    
                     </ul>
                     <script>
                        
                        function cambio(){
                           document.getElementById("star").style.color="#FFFF00";
                        }
                     </script>

                  </div>
                  <div class="capitulos card card-body" style="margin-bottom:100px;">
                     <h3>Capitulos</h3>
                    
                     <div class="row text-center" style="color:#ff6414;margin-bottom:20px;">
                           <div class="col-6">
                            <b>#Capitulo / #Temporada</b> 
                           </div> 
                           <div class="col-6">
                            <b> Nombre </b>
                           </div>
                               
                     </div>  
                  <div class="row" style="max-height:400px;overflow:auto;">  
                  <?php $cond=0; 
                  foreach ($capitulo as $key) {
                     if($cond!=$key->temporada){ $cond=$key->temporada; ?>
                     <div class="alert alert-success col-12" id="temporada<?=$key->temporada;?>">
                     <b>Temporada numero <?=$key->temporada;?></b>
                     </div>
                    <?php } ?>
                     <div class="row col-md-12" style="background-color:#f2f2f2;color:#000;">
                      
                           <div class="col-6">
                           <a href="<?php echo base_url();?>home/capitulo/<?=$key->id?>"> 
                           Cap.<?=$key->numero;?>/Tem.<?=$key->temporada;?> 
                           </a>
                           </div> 
                           <div class="col-6">
                             <a href="<?php echo base_url();?>home/capitulo/<?=$key->id?>"> 
                            <?=$key->nombre;?>   
                            </a>
                           </div>
                        
                               
                     </div>  
                  <?php } ?>
               </div>
                        
                     

                  </div>




               </div>
            </div>
         </div>
         <div class="col-md-4 anun">
            <div class="text-nun" >
               <h2 class="tit-anun">Anuncios </h2>
            </div>
            <h4> Te recomedamos estas series</h4>
            <div class="row">
               <div class="col-md-4">
                  <img src="<?=base_url();?>file/img/img2018_09_05_42.jpg" class="img-fluid"/>
               </div>
               <div class="col-md-8">
                  <p>Nombre de la serie</p>
                  <p>Estado de la serie</p>
               </div>
               <div class="col-md-4">
                  <img src="<?=base_url();?>file/img/img2018_09_05_42.jpg" class="img-fluid"/>
               </div>
               <div class="col-md-8">
                  <p>Nombre de la serie</p>
                  <p>Estado de la serie</p>
               </div>
               <div class="col-md-4">
                  <img src="<?=base_url();?>file/img/img2018_09_05_42.jpg" class="img-fluid"/>
               </div>
               <div class="col-md-8">
                  <p>Nombre de la serie</p>
                  <p>Estado de la serie</p>
               </div>
            </div>
         </div>

     
      </div>
   </div>
</section>
<section id="second-part-capi">
   <div class="container grey-capi">
      <div class="row">
         <div class="col-md-8">
            <h3 class="subt-capitulo" >Breve introduccion</h3>
            <p class="capitulo-text">"La mayoría del anime" mejores programas de comentario literario, compartir historias del hombre detrás de cada ACG trabaja con usted para darle otra forma de decir que la animación! </p>
            <div class="comentarios">
               
            <div class="row">
               <div class="col-4">
                  <?php if($user->foto==''){ ?>
                  <img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle img-fluid"/>
                  <?php }else{ ?>
                  <img src="<?=base_url().$user->foto;?>" class="rounded-circle img-fluid"/>
                  <?php } ?>
               </div>
               <div class="col-8">
                 <p>Comentario</p> 
               </div>
            </div>


               <div class="col-md-6">
                  <ul class="comen-regis">
                     <li><a href="#">Inciar sesion</a></li>
                     <li><a href="#">Registrarse</a></li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <div class="contador"><span>0/300</span></div>
               </div>
               <div class="col-md-12 comment-box">
                  <form id="comments">
                     <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                     </div>
                     <button class="btn btn-comentar " type="submit">Comentar</button> 
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <h4 class="subt-capitulo">Ultimos Capitulos</h4>
            <div class="row">
               
               <?php foreach ($capitulos as $key) { ?>
               
               <div class="col-md-6 img-text">
                  <img src="<?=base_url().$key->imagen2;?>" class="img-fluid "/>
               </div>
               <div class="col-md-6 img-text">
                  <b><?=$key->name;?> </b>
                  <br><b>Temp:</b><?=$key->temporada;?>-<b>Cap:</b><?=$key->numero;?> <i class="far fa-clock"></i>
               </div>
            <?php } ?>

            </div>
         </div>
      </div>
   </div>
</section>

