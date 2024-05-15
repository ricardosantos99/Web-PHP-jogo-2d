<link rel="stylesheet" href="styles.css">
<article class="row">
<div class="col-md-12">
    <div class="row">
      <div class="col-md-12">

      </div>
    </div>
  <div class="content3">
    <h2>Nos envie uma mensagem e nos diga suas impressões e dúvidas sobre nosso jogo!</h2><br>
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" role="form" method="post" action="sucesso.php">

          <div class="form-group">
            <label for="name" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">        
              <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">        
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
            </div>
          </div>

          <div class="form-group">
            <label for="subject" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">        
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto">
            </div>
          </div>

          <div class="form-group">
            <label for="message" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">        
              <textarea class="form-control" id="message" name="message" placeholder="Mensagem"></textarea>
            </div>
          </div>      

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="botao">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </article>