<?php  

require_once 'vendor/autoload.php';

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Models\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

//Obtenemos objetos  enviados por url
// var_dump($_GET);
// var_dump($_POST);

if (!empty($_POST)) {
    $job = new Job();
$job->title = $_POST['title'];
$job->description = $_POST['description'];
$job->save();
}

?>
<!DOCTYPE html>
<html>
<head>

    <title>Add Job</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Add Job</h1>
    <form action="addJob.php" method="post">
    <label for="">Title</label>
    <input type="text" name="title"/><br> 
    <label for="">Description</label>
    <input type="text" name="description"/><br>
    <button type="submit">Save</button>
    </form>

</body>
</html>


<?php
    
//url del servicio
//$urlServicioPqrs='http://172.17.24.254/orfeo2017/soap/servicioPqrs.php?WSDL';
$urlServicioPqrs='https://orfeo.minsalud.gov.co/orfeo/soap/servicioPqrs.php?WSDL';
//declaramos el cliente soap
//parametros

//Lamado de Clase PDF
  
ini_set('display_errors', '1');
error_reporting(E_ALL & ~E_NOTICE);    
$idClickSalud = 26;
$epsNombre = "EPS de prueba.";
$mensaje = "Esta es una prueba.";
        
$param = array(
	"idClickSalud"=>$idClickSalud,
    "nombres"=>'Prueba de radicación CCONTACTO',
    "apellidos"=>'Of 2',
	"tipoDoc"=>1, 
    "cedula"=>'1015422295',
	"telefono"=>55555555,
    "email"=>'ing@hotmail.com',  
    "epsNombre"=>$epsNombre, 
    "mensaje"=>$mensaje);
		
    $clientPqrs=new SoapClient($urlServicioPqrs);
    $respuestaPqrs = $clientPqrs->__soapCall('wbsClickMinSalud',$param); 
	//echo "<PRE>".print_r($respuestaPqrs , true)."</PRE>";
    echo "El radicado #".$respuestaPqrs["numeroRadicado"]." fue registrado correctamente.<BR><BR>";
    echo "El idClick #".$respuestaPqrs["idClickSalud"]." fue registrado correctamente.<BR><BR>";
    echo "El Codigo de Verificación: es el ".$respuestaPqrs["codVeri"].".<BR><BR>";
    //echo "<a href='generatePDF.php?radicadoNume=".$respuestaPqrs["numeroRadicado"]."'> Generar (.PDF) </a>";      
    echo"<HR>";    
  