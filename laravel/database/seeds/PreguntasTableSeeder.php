<?php

use Illuminate\Database\Seeder;
use Uawa\Pregunta;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = array(
            [
                'pregunta'=>'¿EN QUÉ PAÍSES SE PUEDE COMPRAR ONLINE?',
                'respuesta'=>'Actualmente puedes hacer tu compra desde Ecuador.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿EN CUÁNTOS IDIOMAS SE PUEDE NAVEGAR?',
                'respuesta'=>'Los idiomas de navegación de UAWA.EC son: español, inglés y kichwa.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿EN QUÉ IDIOMAS SE PUEDE SOLICITAR ATENCIÓN AL CLIENTE?',
                'respuesta'=>'Actualmente, nuestro servicio de atención al cliente cubre los siguientes idiomas: castellano e inglés.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿LOS PRECIOS DE LA TIENDA ONLINE Y MI TIENDA HABITUAL UAWA SON LOS MISMOS?',
                'respuesta'=>'Sí, pero si existiera cualquier diferencia entre los precios que figuran en la Web, y los marcados en las etiquetas de las prendas, el precio correcto será siempre el de las etiquetas.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿REPONDREMOS LOS ARTÍCULOS CON INDICACIÓN "AGOTADO"?',
                'respuesta'=>'Si un artículo está agotado, puedes solicitar que te avisemos cuando lo repongamos. En el caso de que vuelva a estar disponible antes de 15 días, te enviaremos un e-mail informándote. Si no hubiese más stock, lo retiraríamos de la web.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿RECIBIRÉ EL MISMO PRODUCTO QUE VEO EN LA FOTO?',
                'respuesta'=>'Sí, excepto en aquellos productos con procesos personalizables en los que podría haber una mínima diferencia en el acabado.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿ES POSIBLE RECIBIR INFORMACIÓN PERIÓDICA EN MI E-MAIL CON LAS ÚLTIMAS NOVEDADES Y OFERTAS DE UAWA?',
                'respuesta'=>'Sí. Solo tienes que suscribirte a la <a href="">"NEWSLETTER"</a> de Uawa rellenando el formulario que aparece al hacer clic y recibirás información sobre las últimas novedades, editoriales y eventos de Uawa.<br>
                Puedes encontrar este formulario haciendo clic en “NEWSLETTER” en Tu Cuenta de usuario o en el menú de la web.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿PUEDO DARME DE BAJA DE LA NEWSLETTER DE UAWA?',
                'respuesta'=>'<p>Tienes varias opciones para darte de baja.</p>

					<p>a) Selecciona “Dar de Baja” en el formulario del apartado "NEWSLETTER"</p>

					<p>b) Puedes acceder a las opciones de suscripción en "Tu cuenta", accediendo al apartado newsletter y desmarcando la casilla. Haz clic en “ACEPTAR” para poder actualizar el cambio.</p>

					<p>c) Al final de cada Newsletter podrás darte de baja haciendo clic en un enlace, tras el que deberás introducir tu dirección e-mail y hacer clic en “DAR DE BAJA”</p>

					<p>d) Ten en cuenta que le proceso de baja de la Newsletter puede tardar en hacerse efectivo hasta 48h desde la solicitud.</p>',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿CÓMO RECUPERO MI CONTRASEÑA OLVIDADA?',
                'respuesta'=>'Si has olvidado tu contraseña, la puedes recuperar en el apartado “INICIAR SESIÓN- ¿Has olvidado tu contraseña?” Recibirás un e-mail para indicar tu nueva contraseña y confirmarla. Tu contraseña ha de ser alfanumérica, de un mínimo de 8 caracteres e incluir al menos una letra mayúscula.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿QUÉ PUEDO HACER SI NO CONSIGO MODIFICAR LA CONTRASEÑA?',
                'respuesta'=>'Asegúrate de que la contraseña contiene al menos 8 caracteres y que hayas incluido al menos una mayúscula, una minúscula y un número. Tampoco puedes introducir una contraseña que hayas utilizado con anterioridad.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO ASEGURARME DE HABER REALIZADO BIEN MI COMPRA?',
                'respuesta'=>'Una vez hecho tu pedido, recibirás un e-mail de confirmación. Si no lo recibieses, ponte en contacto con nuestro departamento de Atención al Cliente.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿PUEDO SABER EN QUÉ ESTADO SE ENCUENTRA MI PEDIDO?',
                'respuesta'=>'<p>Sí. Accede al apartado "Pedidos realizados" de "Tu Cuenta" y podrás ver el estado de tu pedido en tiempo real.</p>

				<p>En caso de que hayas realizado el pedido como invitado, puedes consultar el estado del mismo y gestionarlo desde el correo de confirmación.</p>',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿PUEDO CANCELAR MI PEDIDO?',
                'respuesta'=>'Sí. Podrás cancelar tu pedido desde el apartado "PEDIDOS REALIZADOS" de tu cuenta siempre y cuando el articulo no se haya enviado aun ni este en transito.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿QUÉ DEBO HACER SI ME LLEGA UN ARTÍCULO DEFECTUOSO?',
                'respuesta'=>'UAWA.EC sólo vende artículos en perfecto estado, por lo que si, excepcionalmente, te llega una prenda con alguna tara, ponte en contacto con nuestro departamento de Atención al Cliente.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿QUÉ DEBO HACER SI ME LLEGA UN ARTÍCULO INCORRECTO?',
                'respuesta'=>'Si en alguna ocasión, por error, te llega un artículo que no has pedido, ponte en contacto con nuestro departamento de Atención al Cliente.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿MI INFORMACIÓN PERSONAL TIENE CARÁCTER CONFIDENCIAL?',
                'respuesta'=>'Toda la información que compartes con nosotros tiene carácter privado y confidencial con Uawa para el desarrollo, cumplimiento y ejecución del contrato de compraventa, atender tus solicitudes y proporcionarte informaciones acerca de los productos. Consulta todos los detalles en nuestra Política de Privacidad.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO CONTACTAR CON EL DEPARTAMENTO DE ATENCIÓN AL CLIENTE?',
                'respuesta'=>'Puedes hacernos llegar tus consultas o comentarios a través del formulario de contacto disponible en nuestra Web, a través del teléfono XXXXXXXXXX , o enviando un e-mail a contacto@uawa.ec',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿TENGO QUE REGISTRARME PARA PODER COMPRAR ONLINE?',
                'respuesta'=>'<p>En UAWA.EC es un requisito estar registrado para poder comprar. Adicionalmente se puede realizar una compra por nuestros canales de contacto oficiales (Facebook, Instagram, Correo Electronico) sin necesidad de crearse una cuenta de usuario en la tienda online.</p>
                	<p>Desde UAWA.EC te recomendamos tener una cuenta de usuario, ya que facilitará la compra al poder guardar una libreta de direcciones, tus articulos favoritos y los datos de pago a través del e-wallet. Además, tendrás un histórico de pedidos, devoluciones y facturas.</p>
                ',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿PUEDO REALIZAR UN PEDIDO POR TELÉFONO?',
                'respuesta'=>'No, en este momento no disponemos de esta opción.',
                'categoria'=>'Preguntas frecuentes',
            ],
            [
                'pregunta'=>'¿QUÉ FORMA DE PAGO PUEDO UTILIZAR PARA REALIZAR MI COMPRA?',
                'respuesta'=>'Disponemos de los siguientes medios de pago: VISA, MasterCard, AMEX, PayPal, Tarjeta regalo, Transferencia Bancaria y Deposito en Cuenta.',
                'categoria'=>'Pago',
            ],
            [
                'pregunta'=>'¿POR QUÉ RAZÓN PUEDE SER RECHAZADA MI TARJETA DE CRÉDITO?',
                'respuesta'=>'<p>Tu tarjeta puede ser rechazada por una de las siguientes razones:</p>
					<p><ul>
					<li>La tarjeta puede estar caducada: comprueba que tu tarjeta no exceda la fecha de validez.</li>
					<li>Puede que se haya alcanzado el límite de la tarjeta: consulta con tu banco que la tarjeta no haya excedido el importe permitido para efectuar compras.</li>
					<li>Puede que algún dato introducido sea incorrecto: comprueba que hayas rellenado correctamente todos los campos necesarios.</li>
					</ul></p>',
                'categoria'=>'Pago',
            ],
            [
                'pregunta'=>'¿PUEDO OBTENER UNA FACTURA A NOMBRE DE MI EMPRESA?',
                'respuesta'=>'Sí. Solamente tienes que marcar la opción "EMPRESA" en los datos personales y cubrir los datos fiscales que te pedimos.',
                'categoria'=>'Pago',
            ],
            [
                'pregunta'=>'¿ES SEGURO USAR MI TARJETA DE CRÉDITO EN LA WEB?',
                'respuesta'=>'Sí, los datos se transmiten de forma segura con el encriptado SSL. Para el pago con tarjetas de crédito y débito se requiere introducir el CVV (Card Verification Value), un código impreso en la tarjeta que se utiliza como medida de seguridad en las transacciones de comercio electrónico.',
                'categoria'=>'Pago',
            ],
            [
                'pregunta'=>'¿QUÉ DEBO HACER SI ME APARECE UN COBRO DOBLE DEL PEDIDO?',
                'respuesta'=>'Puede que el movimiento que veas en tu cuenta sea en realidad una reserva del importe de tu pedido y no el cobro. En todo caso, contacta con tu entidad bancaria para más información. También tienes a tu disposición nuestro servicio de atención al cliente.',
                'categoria'=>'Pago',
            ],
            [
                'pregunta'=>'¿EN QUÉ CONSISTE EL MÉTODO DE COMPRA DE PAGO EN TIENDA?',
                'respuesta'=>'Es una forma de compra que te permite realizar un pedido online y pagarlo al recibirlo en tienda. Podrás abonarlo con los métodos de pago disponibles en nuestras tiendas Uawa: efectivo, tarjeta de crédito o débito, tarjeta o ticket regalo, etc.',
                'categoria'=>'Pago',
            ],
            [
                'pregunta'=>'NO TENGO NINGUNO DE LOS MÉTODOS DE PAGO. ¿CÓMO PUEDO REALIZAR UN PEDIDO ONLINE?',
                'respuesta'=>'<p>Te recomendamos en este caso que adquieras una tarjeta regalo en cualquiera de nuestras tiendas físicas Uawa.</p>
                <p>Puedes adquirir tarjetas regalo desde un mínimo de 5 USD a un máximo de 500 USD (siempre han de ser múltiplos de 5 €) y nunca caducan.</p>

				<p>Si quieres más información al respecto visita nuestro apartado de GIFTCARD.</p>',
                'categoria'=>'Pago',
            ],
            [
                'pregunta'=>'¿DÓNDE PUEDO RECIBIR MI PEDIDO?',
                'respuesta'=>'Puedes recibirlo en la dirección que elijas o bien en la tienda Uawa que desees.',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿CUÁNTO TARDARÁ EN LLEGAR MI PEDIDO?',
                'respuesta'=>'<p>Los plazos de entrega dependen del tipo de envío seleccionado.</p>
                <p><ul>
				<li>Recoger en tienda: En 24-48 horas.</li>

				<li>Envío Standard: En 24-48 horas laborables: Entrega al día siguiente si compras de lunes a jueves antes de las 17:00</li>

				</ul></p>
				<p>
				Las entregas se realizan de lunes a viernes.</p>',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿CUÁNTO HE DE PAGAR DE GASTOS DE ENVÍO?',
                'respuesta'=>'<p><ul>
				<li>Recoger en tienda: GRATIS.</li>

				<li>Envío Standard: 3,95USD</li>

				</ul></p>',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿PUEDO SEGUIR EL ESTADO DE MI PEDIDO?',
                'respuesta'=>'<p>Sí, a través de "Mi cuenta", entra en pedidos realizados y podrás ver el estado de tu pedido.</p>',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿CUÁL ES EL PROCESO DE LA ENTREGA EN DOMICILIO?',
                'respuesta'=>'Si has elegido entrega en domicilio, te enviaremos un e-mail de confirmación de envío (cuando tu pedido vaya a salir del almacén), otro con un número de seguimiento (con link a la página web de la empresa de mensajería) y, por último, el transportista se pondrá en contacto contigo mediante SMS o e-mail para informarte de la entrega de tu pedido.',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿CUÁL ES EL PROCESO DE LA ENTREGA EN TIENDA?',
                'respuesta'=>'En caso de haber elegido la entrega en tienda, te comunicaremos la llegada de la mercancía a través de un SMS.',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿CUÁNTO TIEMPO PERMANECERÁ MI PEDIDO EN TIENDA?',
                'respuesta'=>'<p>Los pedidos pagados en la web permanecen 10 días naturales en la tienda que has seleccionado para el envío, desde que recibes el SMS de llegada.</p>

<p>Los pedidos con pago en tienda permanecen 7 días naturales en la tienda que has seleccionado para el envío, desde que recibes el SMS de llegada.</p>',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿PUEDE RECOGER OTRA PERSONA MI PEDIDO EN TIENDA?',
                'respuesta'=>'<p>Sí. La persona que lo recoja deberá indicar el número de pedido y a nombre de quién está. Por último, tendrá que identificarse y firmar la entrega.</p>

<p>No es necesario presentar una autorización firmada o un documento de identidad del comprador.</p>',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿QUÉ EMPRESA DE TRANSPORTE ME ENTREGARÁ EL PEDIDO?',
                'respuesta'=>'Depende de la zona de entrega y del tipo de envío. Cuando el pedido salga de nuestro almacén te enviaremos un correo con los datos de la empresa de transporte.',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿QUÉ OCURRE SI NO ESTOY EN CASA EN EL MOMENTO DE LA ENTREGA?',
                'respuesta'=>'<p>Si estás ausente en el momento de la entrega, el transportista te dejará una nota de aviso con sus datos de contacto.</p>

<p>También puedes llamar directamente a la empresa de transportes y proporcionar el número de seguimiento del pedido para acordar una fecha de entrega</p>',
                'categoria'=>'Envío',
            ],
            [
                'pregunta'=>'¿CÓMO REALIZO UNA DEVOLUCIÓN?',
                'respuesta'=>'<p>Te ofrecemos las siguientes opciones de devolución:</p>

				<p>Devolución en tienda: En cualquier tienda Uawa del mismo mercado en el que se ha realizado la compra.</p>

				<p>Devolución postal si has hecho el pedido a través de tu cuenta:</p>
				<p><ul>
				<li>Entra en tu cuenta de UAWA.EC y ve a Mis Pedidos, selecciona el pedido que deseas devolver y escoge los artículos haciendo clic en DEVOLVER.</li>
				<li>Una vez seleccionados todos los artículos, haz click en Solicitar devolución.</li>
				<li>Rellene los campos correspondientes a la razón de devolución y finaliza la solicitud.</li>
				<li>En un plazo de 2 días laborables recibirás un e-mail con la etiqueta postal.</li>
				<li>Imprime la etiqueta postal y pégala en la bolsa que has preparado previamente.</li>
				<li>Lleva el paquete a tu oficina de correos más cercana.</li>
				</ul><p>
				',
                'categoria'=>'Devoluciones',
            ],
            [
                'pregunta'=>'¿CUÁL ES EL PLAZO PARA UNA DEVOLUCIÓN?',
                'respuesta'=>'El plazo para cualquier devolución es de 3 días naturales desde la fecha de entrega.',
                'categoria'=>'Devoluciones',
            ],
            [
                'pregunta'=>'¿TENGO QUE PAGAR ALGO POR MI DEVOLUCIÓN?',
                'respuesta'=>'No. Las devoluciones en UAWA.EC son siempre gratuitas.',
                'categoria'=>'Devoluciones',
            ],
            [
                'pregunta'=>'¿CÓMO RECIBIRÉ EL IMPORTE DE MI DEVOLUCIÓN?',
                'respuesta'=>'Una vez aprobada la devolución, recibirás el importe del mismo modo en el que realizaste tu compra. Ten en cuenta que si solicitas que se te envíe un tique regalo en el momento del pedido, el reembolso se efectuará en una tarjeta abono que recibirás junto al comprobante de devolución.',
                'categoria'=>'Devoluciones',
            ],
            [
                'pregunta'=>'¿CUÁNDO RECIBIRÉ EL IMPORTE DE MI DEVOLUCIÓN?',
                'respuesta'=>'<p>Tras aprobar la devolución (los artículos tienen que estar en perfecto estado y tener las etiquetas interiores), recibirás un e-mail de confirmación indicándote que el importe se abonará en tu cuenta en unos días.</p>

				<p>Recuerda que el plazo del abono en cuenta depende siempre de tu entidad bancaria.</p>',
                'categoria'=>'Devoluciones',
            ],
            [
                'pregunta'=>'¿QUÉ DEBO HACER SI EL IMPORTE DE MI DEVOLUCIÓN ES INCORRECTO?',
                'respuesta'=>'<p>Ponte en contacto con nuestro Departamento de Atención al Cliente y solucionaremos el problema lo antes posible.</p>
                <p>UAWA.EC se reserva el derecho de rechazar devoluciones comunicadas o enviadas fuera del plazo fijado, o prendas que no se encuentren en las mismas condiciones en las que fueron recibidas.</p>',
                'categoria'=>'Devoluciones',
            ],
            [
                'pregunta'=>'¿SE DEVUELVEN LOS GASTOS DE ENVÍO SI DEVUELVO TODOS LOS ARTÍCULOS DE UN PEDIDO?',
                'respuesta'=>'Si devuelves la totalidad de un pedido a lo largo de los 3 días posteriores a la compra te reembolsaremos los gastos de envío equivalentes a un pedido estándar.',
                'categoria'=>'Devoluciones',
            ],
            [
                'pregunta'=>'¿PUEDO CAMBIAR MIS ARTÍCULOS?',
                'respuesta'=>'<p>Si deseas cambiar tus artículos, tienes 2 opciones:</p>

				<p>1. En nuestras tiendas físicas puedes cambiarlos:</p>
				<p><ul>
				<li>POR OTRA TALLA O COLOR, sin necesidad de pago adicional y siempre que estén en perfecto estado y dispongamos de stock en tienda.</li>
				<li>POR OTRO ARTÍCULO DIFERENTE, te reembolsaremos el importe a través de UAWA.EC y podrás realizar una nueva compra en la tienda.</li>
				</ul></p>
				<p>2. Desde tu domicilio, si solicitas una devolución y realizas una nueva compra online. Si escoges envío a domicilio en la nueva compra, deberás abonar los gastos de envío de nuevo.</p>',
                'categoria'=>'Cambios',
            ],
            [
                'pregunta'=>'¿CUÁL ES EL PLAZO PARA EFECTUAR EL CAMBIO?',
                'respuesta'=>'El plazo de cambio es de 3 días desde la fecha de entrega.',
                'categoria'=>'Cambios',
            ],

            [
                'pregunta'=>'¿PUEDO CAMBIAR MIS ARTÍCULOS EN CUALQUIER TIENDA UAWA?',
                'respuesta'=>'Sí, siempre y cuando disponga de la misma sección a la que pertenece la prenda (hombre y/o mujer).',
                'categoria'=>'Cambios',
            ],

			[
                'pregunta'=>'¿QUÉ NAVEGADORES DE INTERNET DEBO USAR PARA VER EL SITIO WEB DE UAWA CORRECTAMENTE?',
                'respuesta'=>'<p>La página de UAWA.EC está optimizada para ser vista en Microsoft Internet Explorer 8 o superior, Mozilla Firefox 3.5 o superior, Google Chrome 6 o superior y Safari 5 o superior.</p>

				<p>Puedes instalar las últimas versiones de cada navegador en los siguientes links:</p>

				<p>Google Chrome</p>
				<p>Mozilla Firefox</p>
				<p>Internet Explorer</p>
				<p>Safari</p>',
                'categoria'=>'Tecnología',
            ],
            [
                'pregunta'=>'¿QUÉ RESOLUCIÓN DE PANTALLA NECESITO?',
                'respuesta'=>'1.024 de anchura x 768 de altura y tamaños superiores.',
                'categoria'=>'Tecnología',
            ],
            [
                'pregunta'=>'¿ES SEGURO COMPRAR EN UAWA.EC?',
                'respuesta'=>'Sí. Puedes comprar con total tranquilidad, pues dedicamos un gran esfuerzo a disponer de recursos con los que garantizar la seguridad de tus compras y de tus datos.',
                'categoria'=>'Tecnología',
            ],
            [
                'pregunta'=>'¿DÓNDE PUEDO ADQUIRIR UNA TARJETA REGALO?',
                'respuesta'=>'En cualquier tienda física de uawa o en UAWA.EC. En la web, puedes elegir entre una Tarjeta regalo (tarjeta regalo física) o una Tarjeta regalo virtual (tarjeta regalo virtual).',
                'categoria'=>'Tarjeta regalo',
            ],

            [
                'pregunta'=>'¿DÓNDE PUEDO USAR UNA TARJETA REGALO?',
                'respuesta'=>'Puedes usarla en las tiendas físicas de Uawa y en UAWA.EC.',
                'categoria'=>'Tarjeta regalo',
            ],


            [
                'pregunta'=>'¿PUEDO USAR UNA TARJETA REGALO EN UN PAÍS DIFERENTE AL DE SU ADQUISICIÓN?',
                'respuesta'=>'No, la Tarjeta regalo solo se puede usar en las tiendas y en la web UAWA.EC del país de adquisición.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿DÓNDE PUEDO CONSULTAR LAS CONDICIONES GENERALES DE USO DE LA TARJETA REGALO?',
                'respuesta'=>'En el menú TARJETA REGALO – CONDICIONES GENERALES.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿QUÉ OCURRE SI PIERDO MI TARJETA REGALO?',
                'respuesta'=>'La Tarjeta regalo es un documento al portador. Uawa no reemplazará la tarjeta en caso de robo, pérdida, extravío o deterioro.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿PUEDO PEDIR LA DEVOLUCIÓN DEL SALDO DISPONIBLE?',
                'respuesta'=>'No, el saldo de la Tarjeta regalo no puede reembolsarse ni canjearse por dinero.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿PUEDO RECARGAR UNA TARJETA REGALO?',
                'respuesta'=>'No, el saldo disponible solamente se incrementará en caso de devolución de un artículo pagado con dicha Tarjeta regalo.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO USAR UNA TARJETA REGALO EN UAWA.EC?',
                'respuesta'=>'Selecciona el método de pago "Tarjeta regalo” e introduce el número de Tarjeta regalo (16 dígitos) y el CVV (3 dígitos).',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO USAR EN UNA TIENDA FÍSICA UNA TARJETA REGALO VIRTUAL RECIBIDA POR E-MAIL?',
                'respuesta'=>'Puedes imprimir dicha Tarjeta regalo virtual y presentarla en caja en el momento del pago o bien enseñarla directamente en tu celular.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO ACTIVAR UNA TARJETA REGALO FÍSICA COMPRADA EN UAWA.EC?',
                'respuesta'=>'En el momento del pago, sea en la tienda física o en la tienda online, te pediremos los cuatro últimos dígitos de tu teléfono móvil para activar la Tarjeta regalo. Esta información nos la facilita el comprador en el momento de adquisición de la Tarjeta regalo. Puedes también activarla en el apartado "Tarjeta regalo – Activar Tarjeta regalo”.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿CÓMO ACTIVO UNA TARJETA REGALO?',
                'respuesta'=>'<p><Si la tarjeta se ha adquirido en una tienda física de Uawa, ésta se ha activado en el momento del pago en caja.</p>

				<p>Solamente es necesario activar las tarjetas que se han comprado en la tienda online UAWA.EC, tanto si son físicas como si son virtuales.</p>

				<p>Puedes activar la tarjeta de dos maneras: en una de nuestras tiendas físicas en el momento del pago, o a través del apartado «Tarjeta regalo – Activar giftcard» de nuestra web. En ambos casos será necesario que nos proporciones el código de activación.</p>',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿POR QUÉ RAZÓN PUEDE SER RECHAZADA MI TARJETA REGALO?',
                'respuesta'=>'<p>Tu Tarjeta regalo puede ser rechazada por una de las siguientes razones:</p>
<p><ul>
<li>Puede ser que no te quede saldo en tu Tarjeta regalo.</li>
<li>Puede que algún dato introducido esté incorrecto. Comprueba que hayas rellenado correctamente todos los campos necesarios.</li>
</ul></p>',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿PUEDO MANDAR UN MENSAJE O TEXTO JUNTO CON LA TARJETA REGALO A LA PERSONA A LA QUE SE LA REGALO?',
                'respuesta'=>'Sí. Tanto si compras una Tarjeta regalo física o una Tarjeta regalo virtual podrás adjuntar un breve texto.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿PUEDO DEVOLVER UNA TARJETA REGALO FÍSICA O UNA TARJETA REGALO VIRTUAL COMPRADA ONLINE?',
                'respuesta'=>'<p>Se puede devolver siempre que no haya sido usada y antes de que pasen 15 días naturales, a contar desde la fecha de compra de la Tarjeta regalo física o de la fecha de envío de la Tarjeta regalo virtual.</p>

				<p>Si la devolución se hace vía UAWA.EC no es necesario enviarnos la Tarjeta regalo físicamente. Cancelaremos dicha Tarjeta regalo automáticamente y podrás destruirla.</p>',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿QUÉ SUCEDE SI DEVUELVO UN PRODUCTO COMPRADO EN UAWA.EC CON UNA TARJETA REGALO DE UAWA?',
                'respuesta'=>'El reembolso se efectuará mediante el incremento del saldo disponible en la Tarjeta regalo siempre que dicha Tarjeta regalo exista en el momento de la devolución. Si no existiese por cualquier motivo, el reembolso se efectuará mediante una Tarjeta Abono de Uawa.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿CUÁL ES EL IMPORTE POR EL QUE PUEDO ADQUIRIR UNA TARJETA REGALO?',
                'respuesta'=>'El importe mínimo por el que puedes adquirir una Tarjeta regalo es de y el máximo es de . La cantidad final siempre ha de ser un múltiplo de .',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿CADUCAN LAS TARJETAS TARJETA REGALO?',
                'respuesta'=>'No, no tienen una fecha límite de uso.',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿QUÉ ES EL CÓDIGO DE ACTIVACIÓN?',
                'respuesta'=>'<p>Solamente tienen código de activación las tarjetas que se han comprado en la tienda online UAWA.EC, tanto si son físicas como si son virtuales.</p>

				<p>Este código se corresponde con los últimos cuatro dígitos de tu teléfono móvil. El comprador de la tarjeta es quien nos proporciona esta información en el momento de la compra.</p>',
                'categoria'=>'Tarjeta regalo',
            ],
            [
                'pregunta'=>'¿QUÉ ES EL TICKET REGALO?',
                'respuesta'=>'<p>Es un ticket de compra que omite el importe y se incluye en un pedido que envías como regalo a otra persona. Tiene total validez para cambios y devoluciones.</p>

<p>Puedes seleccionarlo en la cesta de la compra.</p>',
                'categoria'=>'Ticket regalo',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO HACER UN PEDIDO Y RECIBIR TICKET REGALO?',
                'respuesta'=>'<p>Puedes solicitar un ticket regalo marcando esta opción en la cesta de la compra y siempre antes de comenzar a tramitar el pedido.</p>

<p>Ten en cuenta que en el pedido se incluirá sólo el ticket regalo y ninguna copia para el comprador.</p>',
                'categoria'=>'Ticket regalo',
            ],
            [
                'pregunta'=>'¿PUEDO SOLICITAR UN TICKET REGALO DESPUÉS DE HABER FINALIZADO UN PEDIDO?',
                'respuesta'=>'No, sólo es posible recibir ticket regalo si se solicita antes de tramitar el pedido.',
                'categoria'=>'Ticket regalo',
            ],
            [
                'pregunta'=>'¿PUEDO CAMBIAR UN ARTÍCULO QUE ME HAN REGALADO?',
                'respuesta'=>'Puedes cambiarlo por el mismo artículo en otra talla o color en cualquier tienda de Uawa del país de compra.',
                'categoria'=>'Ticket regalo',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO CONTACTAR CON EL SERVICIO DE ATENCIÓN AL CLIENTE DE UAWA?',
                'respuesta'=>'<p>Para cualquier consulta relacionada con venta online, puedes contactar a través de los siguientes canales:</p>
                <p><ul>
						<li>Teléfono: XXXXXXXXXX</li>
						<li>E-mail: contacto@uawa.ec</li>
						<li>A través de nuestro formulario de contacto</li>
				</ul></p>

					<p>Para consultas relacionadas con establecimientos Uawa:</p>
					<p><ul>
						<li>Teléfono: XXXXXXXXXX</li>
						<li>A través de nuestro formulario de contacto</li>
					</ul></p>

					<p>Horario de atención al cliente: De lunes a viernes, de 9:30 a 18:30</p>',
                'categoria'=>'Atención al cliente',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO REALIZAR UNA RECLAMACIÓN ONLINE?',
                'respuesta'=>'<p>Ponte en contacto con nuestro servicio de Atención al Cliente en primer lugar, para que podamos tratar de ayudarte con lo que necesites.</p>

<p>Caso contrario si lo deseas puedes dejar una reclamacion en la seccion «Reclamaciones y Quejas» que verás en el menú inferior de nuestra página.</p>',
                'categoria'=>'Atención al cliente',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO REALIZAR UNA RECLAMACIÓN SOBRE UNA TIENDA?',
                'respuesta'=>'Puedes escribirnos a través del formulario de nuestra web «Reclamaciones y Quejas» que verás en el menú inferior de nuestra página.',
                'categoria'=>'Atención al cliente',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO HACER PROPUESTAS DE MEJORAS?',
                'respuesta'=>'Puedes hacernos llegar tus propuestas a través del formulario de contacto que encontrarás en el menú inferior de nuestra web. ¡Estaremos encantados de recibir tus comentarios!',
                'categoria'=>'Atención al cliente',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO SABER SI UN ARTÍCULO ESTÁ DISPONIBLE?',
                'respuesta'=>'Para saber si un artículo está disponible en la tienda online simplemente introduce la referencia en el buscador de nuestra web.',
                'categoria'=>'Disponibilidad de artículos',
            ],
            [
                'pregunta'=>'¿Y SI NO TENGO LA REFERENCIA?',
                'respuesta'=>'<p>Necesitamos la referencia porque, debido a la gran cantidad de artículos y a las numerosas actualizaciones que realizamos, sin ella nos resulta muy difícil identificar y no confundir el artículo al que te refieres.</p>
                <p>Te animamos a que le eches un vistazo a nuestras colecciones y perfiles en redes sociales para ver si localizas el artículo y su referencia.</p>

<p>Si finalmente no llegas a localizar dicha referencia te invitamos a enviarnos la foto por e-mail para poder realizar con el departamento correspondiente las verificaciones necesarias para informarte sobre tu consulta.</p>',
                'categoria'=>'Disponibilidad de artículos',
            ],
            [
                'pregunta'=>'¿DÓNDE PUEDO ENCONTRAR UNA GUÍA DE TALLAS?',
                'respuesta'=>'En la página de cada producto, a la derecha de cada foto encontrarás una guía de tallas. Te invitamos a consultar nuestra sección “Guía de Tallas“. Si a pesar de todo continúas teniendo dudas, ponte en contacto con nuestro servicio de Atención al Cliente.',
                'categoria'=>'Disponibilidad de artículos',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO CONOCER EL LARGO DE UN PANTALÓN?',
                'respuesta'=>'Todos nuestros pantalones tienen más o menos la misma medida para el largo. Para hombres están diseñados para una estatura de XXX metros y para mujer, para una estatura de XXX metros.',
                'categoria'=>'Disponibilidad de artículos',
            ],
            [
                'pregunta'=>'ME GUSTARÍA TENER MÁS INFORMACIÓN SOBRE LA COMPOSICIÓN Y CONSEJOS DE LAVADO DE UN ARTÍCULO.',
                'respuesta'=>'¡No hay problema! Puedes ponerte en contacto con nuestro servicio de Atención al Cliente e indicarnos la referencia.',
                'categoria'=>'Disponibilidad de artículos',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO UTILIZAR UN CÓDIGO DE DESCUENTO?',
                'respuesta'=>'<p>Los códigos de descuento se introducen justo antes de completar el pago y finalizar el pedido.</p>

<p>Cuando estés en el paso de pago, introduce el código que te hemos proporcionado en el campo «código promocional» y haz clic en Aplicar. En este momento podrás ver el descuento reflejado en el importe final de la compra.</p>

<p>No olvides que los códigos promocionales tienen una fecha de caducidad, no son acumulables con otras ofertas y son válidos exclusivamente en la tienda online y para un solo uso.</p>',
                'categoria'=>'Descuentos y códigos promocionales',
            ],
            [
                'pregunta'=>'SI TENGO UN CÓDIGO, ¿EL DESCUENTO SE APLICARÁ AUTOMÁTICAMENTE?',
                'respuesta'=>'Una vez que introduzcas el código en el campo «código promocional» y hagas clic en Aplicar verás el descuento reflejado en el importe final de la compra.',
                'categoria'=>'Descuentos y códigos promocionales',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO SABER CUÁNDO SERÁ LA PRÓXIMA PROMOCIÓN EN UAWA.EC?',
                'respuesta'=>'Anunciamos nuestras promociones en la página de inicio de nuestra web, publicaciones en redes sociales y newsletters.',
                'categoria'=>'Descuentos y códigos promocionales',
            ],
            [
                'pregunta'=>'¿PUEDO CAMBIAR UN ARTÍCULO QUE HE COMPRADO DURANTE UNA PROMOCIÓN?',
                'respuesta'=>'<p>Puedes cambiar los artículos comprados en promoción en cualquier tienda física de Uawa siempre y cuando estén disponibles.</p>

<p>En caso de que los artículos estén agotados en tu tienda más cercana y decidas hacer una nueva compra online, el precio a pagar será el que se muestre en nuestra web en ese día.</p>',
                'categoria'=>'Descuentos y códigos promocionales',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO MODIFICAR LOS DATOS DE ACCESO A MI CUENTA?',
                'respuesta'=>'Para modificar los datos de acceso tienes que abrir sesión en tu cuenta. En el apartado «datos de acceso» puedes modificar la contraseña y la dirección de correo electrónico vinculados a tu usuario.',
                'categoria'=>'Modificaciones de datos y pedidos',
            ],
            [
                'pregunta'=>'¿CÓMO PUEDO MODIFICAR LA DIRECCIÓN DE ENTREGA PREDETERMINADA EN MI CUENTA?',
                'respuesta'=>'<p>Tienes que acceder a tu cuenta, al apartado «libro de direcciones», donde puedes añadir nuevas direcciones y modificar o eliminar las que ya tienes.</p>

<p>Puedes modificar también la dirección en el paso «envío» del proceso de compra, pero los cambios que realices no se guardarán para futuras compras</p>',
                'categoria'=>'Modificaciones de datos y pedidos',
            ],
            [
                'pregunta'=>'¿PUEDO MODIFICAR EL MÉTODO O LA TIENDA DE ENVÍO DE MI PEDIDO?',
                'respuesta'=>'No es posible modificar el método de envío de un pedido finalizado. Si todavía no ha salido de almacén, puedes cancelarlo y realizar una nueva compra corrigiendo el método de envío. Ten en cuenta que en el tiempo transcurrido hasta tu nuevo pedido alguno de los artículos puede agotarse.',
                'categoria'=>'Modificaciones de datos y pedidos',
            ],
            [
                'pregunta'=>'¿PUEDO AÑADIR, ELIMINAR O CAMBIAR ARTÍCULOS DE UN PEDIDO YA REALIZADO?',
                'respuesta'=>'No es posible modificar el contenido de los pedidos finalizados. Si todavía no ha salido de almacén, puedes cancelarlo y realizar una nueva compra. Ten en cuenta que en el tiempo transcurrido hasta tu nuevo pedido alguno de los artículos puede agotarse.',
                'categoria'=>'Modificaciones de datos y pedidos',
            ],
            [
                'pregunta'=>'¿QUÉ PUEDO HACER SI MI CUENTA ESTÁ DESHABILITADA?',
                'respuesta'=>'Las cuentas se deshabilitan automáticamente cuando se introducen varias veces datos de acceso incorrectos. Para poder acceder de nuevo tienes que ponerte en contacto con nuestro servicio de Atención al Cliente.',
                'categoria'=>'Modificaciones de datos y pedidos',
            ]







        );

        Pregunta::insert($data);
    }
}
