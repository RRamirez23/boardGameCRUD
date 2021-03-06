<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="indexStyle.css">
    </head>

    <body>

        <div class="container-xxl my-md-4 bd-layout">

            <main class="bd-main order-1">  
                <!-- <div class="px-4 py-5 my-5 text-center">
                    <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h1 class="display-5 fw-bold">Centered hero</h1>
                    <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                        </div>
                    </div>
                </div> -->

                <div id="carouselExampleCaptions" class="carousel slide resizeDiv" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQj-o-TY9BfC7XLyhkkwk09TVj9EgSknkYgx7aJBTdIlOPx7lMWnMg-_UxBYpTe0xoPG6c&usqp=CAU" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://cf.geekdo-images.com/yQ5MyueGa6LSLQ_WhFMIrg__opengraph/img/YWqzx_6lUslCCU9Z51guTaBM_Xo=/fit-in/1200x630/filters:strip_icc()/pic4529020.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://ksr-ugc.imgix.net/assets/027/767/808/03a66ad947679093537ec2960dbe02ed_original.jpg?ixlib=rb-4.0.2&crop=faces&w=1024&h=576&fit=crop&v=1579148196&auto=format&frame=1&q=92&s=e138cfbb93e9834d4ed21e747bfe6c33" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

        
                <div class="row justify-content-center" >
                    <form action="process.php" method="post">
                        <div class="form-group"> 
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="Enter your name">
                        </div>
                        <div class="form-group">         
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" value="Enter your email">
                        </div>
        
                        <div class="form-group">   
                            <button class= "btn btn-primary" type="submit" name="save"> Save</button>
                        <div>
                    </form>
                </div>

                <!-- <div class="bd-example">
                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                </div> -->
        
            </main>
        </div>

    
    



        
    </body>

</html>