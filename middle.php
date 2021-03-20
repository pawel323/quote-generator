<main>
      <div id="Title">
        <h1>Generator cytatów</h1>
      </div>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label"><strong>Cytat</strong></label><br/>
                              
                              <?php if(isset($_SESSION['cytat'])){ echo $_SESSION['cytat']; unset($_SESSION['cytat']);} ?>
                              
                            
                              
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label"><strong>Autor</strong></label><br/>
                             <?php if(isset($_SESSION['autor'])){ echo $_SESSION['autor']; unset($_SESSION['autor']); } ?>
                            </div>
                            <br/>
                            <a type="submit" class="btn btn-dark position-relative top-50 start-50 translate-middle" href="generuj.php">Generuj</a>
                            <?php
                            if(isset($_SESSION['e_blad'])){
                                echo $_SESSION['e_blad'];
                                unset($_SESSION['e_blad']);
                            }
                            ?>
                              <?php
                            if(isset($_SESSION['brak'])){
                                echo '<div style="text-align: center;">'.$_SESSION['brak']."</div>";
                                unset($_SESSION['brak']);
                            }
                            ?>
                            
                          </form>
                    </div>
                </div>
            </div>
        </section>
    </main>