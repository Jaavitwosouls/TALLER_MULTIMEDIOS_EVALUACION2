<?php include("db.php") ?>
?>
<?php 
    include("save_task.php");

    $consulta="SELECT * FROM datos";
    $resultado=mysqli_query($conexion,$consulta);

    $fila=mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html  >
<head>
    <!-- Site made with Mobirise Website Builder v5.5.2, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.5.2, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
    <meta name="description" content="">
    
    
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
    
    
    
</head>
<body>

<!-- Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WFDM0EZZ63"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WFDM0EZZ63');
</script>
<!-- /Analytics -->


    
    <section data-bs-version="5.1" class="header15 cid-sRD0dmsozO" id="header15-0">
    

    

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md">
                <div class="text-wrapper">
                    <h2 class="mbr-section-title mb-3 mbr-fonts-style display-2">
                        <strong>Bienvenido a Doramaniacos</strong></h2>
                    <p class="mbr-text mb-3 mbr-fonts-style display-7">
                        Plataforma donde podr??s sumergirte en el mundo de los dramas asiaticos, tanto populares hasta los que esten en estreno !<br>Adem??s puedes agregar contenido!!!</p>
                    <div class="mbr-section-btn"><a class="btn btn-secondary-outline display-4" href="https://mobiri.se">Leer M??s</a></div>
                </div>
            </div>
            <div class="mbr-figure col-12 col-md-5"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/P_KGmZjadiU?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery3 cid-sRD0tJ6bUq" id="gallery3-1">
    
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Contamos informaci??n de los siguientes temas</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5"></h5>
        </div>
        <div class="row mt-4">
            
            <div class="item features-image ??ol-12 col-md-6 col-lg-3 active">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/itsokay-2.jpeg" alt="" data-slide-to="4" data-bs-slide-to="4">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>Romance</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Kdramas de romance... <a href="#" class="text-primary">Read more..</a></p>
                    </div>
                    
                </div>
            </div><div class="item features-image ??ol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/terror.jpg" alt="" data-slide-to="0" data-bs-slide-to="0">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>Suspenso/Terror</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Kdramas de suspenso o terror...&nbsp;<a href="#" class="text-primary">Read more..</a></p>
                    </div>
                    
                </div>
            </div>
            <div class="item features-image ??ol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/drama.jpg" data-slide-to="1" data-bs-slide-to="1" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>Drama</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Kdramas tr??gicos...&nbsp;<a href="#" class="text-primary">Read more..</a></p>
                    </div>
                    
                </div>
            </div>
            <div class="item features-image ??ol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/accion.png" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>Acci??n</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                            Kdramas de acci??n...&nbsp;<a href="#" class="text-primary">Read more..</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-sRGSsA8qwK" id="image2-3">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/crash-landing-on-you.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">N??mero de episodios: 16
<br>Disponible en: Netflix<br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://www.netflix.com/cl/title/81159258">Crash Landing on You</a></p>

                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Crash Landing on You (2020)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7"><br>
<br>Tercer drama coreano con la mejor audiencia en la historia televisiva del pa??s. Crash Landing On You cuenta la historia de Yoon Se-ri (Son Ye-jin), una exitosa empresaria surcoreana. Cuando un tornado se forma mientras vuela en parapente, termina aterrizando en la zona desmilitarizada al lado de Corea del Norte, un ??rea prohibida para los surcoreanos.
<br>
<br>All??, conoce al capit??n del ej??rcito norcoreano Ri Jeong-hyeok (Hyun Bin). Es un hombre habilidoso que abandon?? su sue??o de convertirse en un gran pianista para unirse al servicio militar despu??s de la muerte de su hermano en un misterioso accidente automovil??stico.
<br>
<br>Al conocer a Se-ri, decide ayudarla a esconderse y encontrar su camino de regreso a Corea del Sur. Pero en el proceso, ambos se enamoran, lo que lo pone en conflicto entre sus sentimientos y su deber con el pa??s.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-sRGSE5qkuj" id="image2-5">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/que-le-ocurre-a-la-secretaria-kim.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">N??mero de episodios: 16
<br>Disponible en: Viki<br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://doramasflix.co/capitulos/whats-wrong-with-secretary-kim-1x1">What's Wrong with Secretary Kim?</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>What's Wrong with Secretary Kim? (2018)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">Young Lee Young Joon (Park Seo Joon) es vicepresidente de la compa????a de su familia, el Grupo Yoomyung. Pero el poder y el dinero se le subieron a la cabeza y se convirti?? en un hombre extremadamente egoc??ntrico y narcisista.
<br>
<br>Kim Mi So (Park Min Young) es su fiel secretaria, quien durante nueve a??os ha soportado el desprecio de su jefe, que apenas presta atenci??n a lo que dice. Sin embargo, despu??s de que ella decide dejar su trabajo, Young Joon finalmente la nota y se pregunta c??mo puede lograr que regrese a su puesto.
<br>
<br>Para colmo, el hermano de Young Joon, el famoso actor Lee Sung Yeon (Lee Tae Hwan), est?? enamorado de Mi So.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-sRGSFj8Ci0" id="image2-7">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/guardianthe-lonely-and-great-god.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">N??mero de episodios: 16
<br>Disponible en: Viki<br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://www.viki.com/tv/31706c-goblin?locale=es">Guardian: The Lonely and Great God</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Guardian: The Lonely and Great God (2016)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">Tambi??n conocida como Goblin, esta es una de las series rom??nticas coreanas por excelencia, llena de fantas??a y relaciones memorables. Cuenta con la participaci??n estelar de Gong Yoo como el Goblin, Kim Shin, Go-eun Kim como su novia, Ji Eun Tak, Lee Dong Wook como la muerte y Yoo In-Na como Sunny, la jefa de Eun Tak. Adem??s, Yook Sungjae del grupo BTOB tiene una participaci??n muy importante como Yoo Deok Hwa.
<br>
<br>La historia sigue a Kim Shin, el guerrero invencible reconocido en el reino de Goryeo. Es venerado casi como un dios, y esto le trae problemas con el joven rey Wang Yeo, inseguro y celoso de su popularidad. Su consejero urde un plan para que desconf??e por completo del guerrero y lo masacre ante sus s??bditos para reiterar su superioridad.
<br>
<br>Pero Kim Shin no fallece. Se le otorga una segunda oportunidad que, eventualmente, descubrir?? que parece m??s una maldici??n. Ya que por desgracia, est?? condenado a ver a todos quienes ama fallecer. La ??nica persona que puede ponerle fin a su sufrimiento es la "novia del Goblin", una mujer llamada Jin Eun Tak que puede ver fantasmas y esp??ritus, y que est?? atada al ser m??gico con un destino desgarrador.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-sRGUIiFfyV" id="image1-9">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/oh-my-ghostess-lead.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                    N??mero de episodios: 16<br>Disponible en: Viki<br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://pandrama.com/serie/oh-my-ghost/">Oh My Ghostess</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Oh My Ghostess</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">Cuando Na Bong Sun (Park Bo Young) permite que Shin Soon Ae (Kim Seul Gi) posea su cuerpo para que as?? pierda su virginidad y puede continuar en paz ??? y las dos terminan enamor??ndose de chef estrella Kang Sun Woo (Jo Jung Suk) ??? ??c??mo terminar?? esto?
<br>
<br>Porque mirarlo:
<br>
<br>???Oh My Ghostess??? solo tiene un peque??o elemento de terror y es perfecto para aquellos que quieren hacer algo por Halloween, pero no tienen tanto aliento para aguantar ver pel??culas de terror que hacen acelerar el coraz??n. Sin dejar de mencionar que este drama es super lindo y te provocar?? muchas risas con la actitud de Soon Ae de querer conseguir algo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-sRGUIDYNKY" id="image1-a">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/masters-sun.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">N??mero de episodios: 17<br>Disponible en: Viki<br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://doramasflix.co/capitulos/masters-sun-1x1">Master???s Sun</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Master???s Sun</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">???Master???s Sun??? es tambi??n una comedia rom??ntica con un elemento de terror como ???Oh My Ghostess???, aunque est?? tiene m??s apariciones de fantasmas. Tae Gong Shil (Gong Hyo Jin) desarrolla la habilidad de ver fantasmas luego de un accidente y es perseguida por ellos d??a y noche. Ella descubre que su contacto f??sico con Joo Joong Won (So Ji Sub), su jefe que ama el dinero, hace que los fantasmas se vayan. Esto hace que continuamente Gong Shil vaya con Joong Won cuya personalidad peculiar rompe con los est??ndares de Joong Won.
<br>
<br>Porqu?? verla:
<br>
<br>Aparte del obvio humor con el constante contacto de Gong Shil, este es digno de ver pues se nota la genial qu??mica entre Gong Hyo Jin y So Ji Sub. La relaci??n entre Joong Won y Tae Yang lo es todo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-sRGUKb8Sgl" id="image1-b">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/blood.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                    N??mero de episodios: 20<br>Disponible en: Viki <br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://pandrama.com/serie/sangre/">Blood</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                        <strong>Blood</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">Park Ji Sang (Ahn Jae Hyun) lucha contra su sed por la sangre mientras trabaja como doctor. ??Podr?? ir en contra de su naturaleza interior con su deseo de salvar a otros?
<br>
<br>Porqu?? verla:
<br>
<br>Este drama definitivamente se ve diferente luego de conocer que los dos protagonistas, Ahn Jae Hyun y Ku Hye Sun, ahora est??n casado luego de conocerse en el ??set de este drama!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-sRGXeQihcR" id="image2-d">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/hi-bye-mama-tvn-2020.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">
                        N??mero de episodios: 16<br>Disponible en: Netflix<br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://www.netflix.com/cl/title/81243996">hi! bye mama</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>hi! bye mama</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Cha Yoo Ri ha sido un fantasma desde que muri?? hace 5 a??os. Ella dej?? a su esposo Jo Kang Hwa y su hija. Para volver a ser humano, Cha Yoo Ri lleva a cabo un proyecto de reencarnaci??n durante 49 d??as. Jo Kang Hwa es un cirujano tor??cico, quien despu??s de la p??rdida de su esposa hace cinco a??os trabaj?? como padre soltero hasta que se cas?? de nuevo hace dos a??os, aunque parece ser una persona caritativa, nunca ofrece una ayuda cuando es necesario.<br><br>Por qu?? verla:<br><br>Es un drama donde te sacara m??s de una carcajada y al mismo momento te har?? llorar como magdalena. Completamente recomendado si deseas entender cuanto es el amor de una madre por su hija.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-sRGXflfexv" id="image2-e">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/start-up.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">
                        N??mero de episodios: 16<br>Disponible en: Netflix<br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://pandrama.com/serie/start-up/">Start-Up</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                        <strong>Start-Up (2020)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">Necesitando ganar $90k para abrir su propio negocio, Seo Dal Mi abandona la universidad y toma un trabajo de medio tiempo. Ella sue??a con convertirse en alguien como Steve Jobs.
<br>
<br>Nam Do San es el fundador de Samsan Tech. ??l es excelente con las matem??ticas. Comenz?? Samsan Tech hace dos a??os, pero a la compa????a no le est?? yendo bien. De alguna manera, Nam Do San se convierte en el primer amor de Seo Dal Mi.<br><br>Por qu?? verla:<br><br>Adem??s de ser un drama donde te ense??a el valor que debes tener para la autosuperaci??n, entrega momentos muy fuertes en cuanto al lado emocional de los protagonistas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-sRGXfQ0qOd" id="image2-f">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/school-2015.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style mt-2 align-center display-4">
                        N??mero de capitulos: 16<br>Disponible en: Doramasflix <br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://doramasflix.co/doramas/who-are-you-school-2015">Who Are You: School 2015</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Who Are You: School 2015 (2015)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Drama que estar?? situado en una prestigiosa escuela secundaria privada en el lujoso barrio de Gangnam, Se??l, Corea del Sur. Lee Eun Bi es una joven que vive en una casa hogar y asiste a la preparatoria Noori, en Tongyeon, una provincia al sur, donde es v??ctima de bullying por sus compa??eras. Luego de ser expulsada injustamente de la escuela, ella huye y decide suicidarse... Mientras, Go Eun-Byul (que luce exactamente igual que Lee Eun Bi) es una estudiante muy popular en la escuela secundaria privada de Se??l. Ella desaparece durante un viaje escolar a Tongyeon en circunstancias misteriosas. Una aparece, pero ha perdido la memoria. ??Qui??n de las dos es? ??Y qu?? ocurri?? con la otra?<br><br>Por qu?? verla:&nbsp;<br><br>La dura realidad de la protagonista y las circunstancias que se le interponen al pasar los a??os la lleva a sentirse tan sola en el mundo, hasta que al pasar el tiempo va notando que nunca lo estar?? m??s.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-sRH0hMwACr" id="image1-g">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/city-hunter.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                    N??mero de episodios: 20<br>Disponible en: Viki <br>Autor: Javiera Poblete<br>Nombre: Javiera<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://www.viki.com/tv/1820c-cazador-de-la-ciudad?locale=es">City Hunter</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>City Hunter (Cazador de ciudad)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7"><?php echo $fila['psinopsis']?>
<br><br><br>Por que verla:&nbsp;<br><br>Como puedes ver, su sinopsis promete mucha acci??n y romance. Fue un ??xito comercial y obtuvo cr??ticas positivas. Tiene una buena historia y muchos giros argumentales. De los mejores doramas de acci??n.<br><br><br></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-sRH0i47qI4" id="image1-h">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/vagabond-vagabundo.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                    N??mero de episodios: 16<br>Disponible en: Doramasflix <br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://www.netflix.com/cl/title/81095101">Vagabond</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Vagabond (Vagabundo)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7">La historia comienza cuando el sobrino de Chal Da Gun muere en un accidente a??reo. Convencido de que el siniestro fatal fue en realidad un sabotaje, este contacta a Go Hae Ri, un agente del Servicio Nacional de Inteligencia, para que lo ayude a encontrar a un sobreviviente que estaba en el mismo vuelo.
<br>
<br>A medida que ambos investigan, descubrir??n que la conspiraci??n era mucho m??s oscura y entramada de lo que esperaban. Toda evidencia que encuentran es misteriosamente eliminada y su vida es amenazada cuando tratan de revelar que nada fue accidental.<br><br>
Por qu?? verlo:<br>
<br>Es un dorama repleto de acci??n y suspenso, con una trama bastante original y aclamada internacionalmente por los cr??ticos y el p??blico, ganadora de muchos premios.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-sRH0iyWKKl" id="image1-i">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/flower-of-evil-flor-del-mal.jpg" alt="Mobirise">
                    <p class="mbr-description mbr-fonts-style pt-2 align-center display-4">
                    N??mero de episodios: 16<br>Disponible en: Viki <br>Autor: Javiera Poblete<br>Nombre: Javiera<br> Ver: <a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://doramasflix.co/doramas/flower-of-evil">Flower of Evil</a></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Flower of Evil (Flor del mal)</strong></h3>
                    <p class="mbr-text mbr-fonts-style display-7"><br>La trama de este dorama se centra en la detective Cha Ji Won y su esposo Baek Hee Sung, un herrero. Sin embargo, no todo es color de rosas para este matrimonio. Hee Sung esconde un pasado oscuro que es desconocido para la detective.
<br>
<br>Todo cambia cuando acontecen una serie de incidentes que involucran a Hee Sung, lo que le dar?? una pista a la detective para descubrir la verdad sobre el tipo de persona que su marido es.<br><br>Por qu?? verla:<br><br>Un dorama de m??s misterio que acci??n, pero tambi??n es de los m??s aclamados por la audiencia y que no te puedes perder.<br></p>
                </div>
            </div>
        </div>
    </div>









<br><br><br><br><br><br>
    <center><h1>PUEDES INGRESAR NUEVOS TEMAS AQU?? !!!</h1></center>
    <br><br><br><br><br><br>
<center>
<div class="Container p-4">
        <div class="row">
            <div class="col-md-10">
                <div class="card card-body">
                    <form action="save_task.php" method="POST">
                    <div class="form-group">
                                <input name="nombre" rows="2" class="form-control" placeholder="Ingrese nombre">
                    </div>
                    <div class="form-group">
                                <input name="autor" rows="2" class="form-control" placeholder="Ingrese autor">
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="link" class="form-control" placeholder="Ingrese url" autofocus></textarea>
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="nombre_tema" class="form-control" placeholder="Ingrese nombre del tema" autofocus></textarea>
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="psinopsis" class="form-control" placeholder="Ingrese psinopsis" autofocus></textarea>
                    </div>
                        <div class="form-group">
                            <select name="tipo" class="form-control">
                                <option  value="">Romance</option>
                                <option  value="">Suspenso/Terror</option>
                                <option  value="">Drama</option>
                                <option  value="">Acci??n</option>

                            </select>
                        </div>
                        <input type="submit" class="btn btn-succes btn-block" name="save_task" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div> </center>

    <center><h1>KDRAMAS SUGERIDOS POR VISITANTES !! <3 </h1></center>
    <br><br><br>


    <center>
    <?php
                while($fila=mysqli_fetch_array($resultado)){
            ?>


    <div class="col-md-8">
        <table class="table">
            <br><br>
            <h2>Nueva sugerencia</h2>
            <br><br>
            <thead class="table-sucess table-striped">
                <tr>
                    <th>Nombre</th>
                    <th><?php echo $fila['nombre']?></th>
                </tr>
                <tr>
                    <th>Autor</th>
                    <th><?php echo $fila['autor']?></th>
                </tr>
                <tr>
                    <th>Link</th>
                    <th><a href="<?php echo $fila['link']?>"><?php echo $fila['link']?></a></th>
                </tr>
                <tr>
                    <th>Nombre del Tema</th>
                    <th><?php echo $fila['nombre_tema']?></th>
                </tr>
                <tr>
                    <th>Psinopsis</th>
                    <th><?php echo $fila['psinopsis']?></th>
                </tr>
            </thead>
            <?php 
            }   
            ?>  

        </table>
        <br><br><br>
    </div>
</center>





    



</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/l" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Built with Mobirise <a href="https://mobirise.site/j" style="color:#aaa;">site</a> creator</p></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/theme/js/script.js"></script>  

</body>
</html>