<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../style/style.css" media="screen" />
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo sobre DialogFlow</title>
</head>

<body id="vistas_body">
    <div class="BarraProgreso">
        <div id="ProgresPage" style="background-color: #7a1a8d;" class="Barra" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    <br>
    <!--Se crea el div principal que abarca toda la pagina-->
    <div class="contenedor_principal">
        <div class="contenedor_secundario">
            <br>
            <p class="Titulos_responsivos"><strong>Todo sobre Dialog flow</strong></p>
            <div class="Separdor_de_titulos"></div>
            <div class="Separdor_de_titulos_bajo"></div>
            <!--que es Dialogflow-->
            <div class="sub_texto_tema">
                <p>¿Qué es diálogo flow?</p>
                <hr>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style="grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object data="../img/undraw_cloud_hosting_7xb1 (1).svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p>
                        Esta es una plataforma que cuenta con comprensión del lenguaje natural, facilitando el diseño de una interfaz de usuario conversacional y permitiendo la integración de esta a tus aplicaciones móviles, web,de dispositivos o sistemas de respuestas de voz. Con esta herramienta puedes proporcionar nuevas y atractivas formas para que los usuarios interactúen con tu producto.
                        Dialog flow <strong>puede analizar múltiples tipos de entradas</strong> de tus clientes, incluidas entradas de texto o audio.También puede responder a los clientes de varias maneras, ya sea por texto o por una voz sintética.
                        Esta herramienta destaca entre otras plataformas que ayudan con la creación de chatbots porque ofrece un amplio abanico de interfaces de conversación,desde <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.chromecast.app&hl=es_MX&gl=US&pli=1">Google home</a> a teléfonos o <a href="https://www.iberdrola.com/innovacion/tecnologia-wearable" target="_blanck">wearables</a>. Además de soportar más de 14 idiomas y comprender cada vez mejor las fallas de ortografía a la par que el uso de abrebiaturas.
                    </p>
                </div>
            </div>
            <div class="sub_texto_tema">
                <hr>
                <p>¿De dónde surge?</p>
                <hr>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p>
                        Esta herramienta es propiedad de google desde septiembre del 2016, siendo adquirida por este a un startup llamada API AI, empresa con solo 2 años de vida que se dedicaba a la inteligencia artificial,concretamente al desarrollo de interfaces conversacionales.Los trabajos llevados a cabo por esta empresa permitieron el desarrollo de la plataforma Dialog Flow como actualmente la conocemos.
                        Actualmente cuenta con una <a href="https://cloud.google.com/dialogflow/docs?hl=es-419" target="_blanck">documentación</a> muy enriquecida debido al tiempo que esta plataforma está operando, por lo que te invito a consultarla y ver por ti mismo lo que aquí se te presenta resumidamente.
                    </p>
                </div>
                <div class="contenedor_imagen">
                    <object data="../img/undraw_real_time_analytics_re_yliv.svg"></object>
                </div>
            </div>
            <div class="sub_texto_tema">
                <hr>
                <p>¿Cómo está conformado Dialog Flow?</p>
                <hr>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p>
                        Esta herramienta hace uso principalmente del <a href="https://aws.amazon.com/es/what-is/nlp/#:~:text=tareas%20de%20NLP%3F-,%C2%BFQu%C3%A9%20es%20la%20NLP%3F,y%20comprender%20el%20lenguaje%20humano." target="_blanck">NLP</a> para la interacción con los usuarios a través del machine learning. De entre sus componentes y funcionalidades, aqui esta un resumen de cómo es que se compone toda su interfaz:
                    </p>
                </div>
            </div>

            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Intenciones</strong></p>
                    <hr>
                    <p>
                        Estos son elementos básicos de las conversaciones.A través del texto o de la voz que el usuario introdujo, Dialog Flow elige cual es <strong style="color: #7a1a8d;"> la mejor intención </strong> comparando con las <strong style="color: #7a1a8d;">coincidencias</strong> que se tienen para poder dar una respuesta. A Través de las intenciones, el desarrollador define las frases de entrenamiento que serán las posibles respuestas. En otras palabras, una intención es todo aquello que pretendes o esperas recibir por parte del usuario.
                        Cuando un usuario inicia una conversación dialog flow buscará la intención más adecuada para poder satisfacer a este mismo.Un agente puede tener varias o muchas intenciones para manejar conversaciones complejas y completas.
                    </p>
                </div>
                <div class="contenedor_imagen">
                    <object data="../img/undraw_speech_to_text_re_8mtf.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div id="imagen_a_ocultar" class="contenedor_imagen">
                    <object data="../img/undraw_voice_assistant_nrv7.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Tipos de intenciones:</strong></p>
                    <hr>
                    <p>
                        <strong style="color: #7a1a8d;">Predeterminadas:</strong> Cuando inicias un nuevo proyecto de Dialog flow, se crearán intenciones de forma automática: una bienvenida por defecto y una intención por defecto. La primera de estas nos ayuda a dar la bienvenida a nuestro usuario al chat y la otra está configurada para comunicarle al usuario que no hemos encontrado su petición o que no podemos interpretarla.
                    </p>
                    <p>
                        <strong style="color: #7a1a8d;">Básicas:</strong> Estas simplemente consisten en elementos esenciales: frases de entrenamiento,acción,parámetros y respuestas.
                    </p>
                    <p>
                        <strong style="color: #7a1a8d;">Complejas:</strong> Estas intenciones además de los componentes básicos pueden contar con algún tipo de contexto y eventos que veremos más adelante.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">

                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Elementos de una intención:</strong></p>
                    <hr>
                    <p>
                        <strong style="color: #7a1a8d;">Frases: </strong>Estas <strong>son palabras o frases que servirán de entrenamiento para nuestro bot.</strong>Estas están planteadas para resolver inquietudes o posibles entradas de los usuarios y con las que se resolverá o buscará las coincidencias con nuestras intenciones adecuadas.
                    </p>
                    <p>
                        <strong style="color: #7a1a8d;">Acción: </strong>Esto será lo que Dialog Flow realizará una vez que <strong>las coincidencias de una formulación </strong> del usuario con la intención sea registrada.
                    </p>
                    <p>
                        <strong style="color: #7a1a8d;">Parámetros: </strong>Estos son valores que Dialog Flow extrae de <strong>la expresión del interlocutor.</strong> Gracias a estos datos estructurados, la consola de esta plataforma podrá iniciar acciones lógicas y generar respuestas. Cuando se inicia el entrenamiento en Dialog Flow se necesitará configurar los parámetros para obtener buenos datos.
                    </p>
                    <p>
                        <strong style="color: #7a1a8d;">Respuestas: </strong>Como su propio nombre indica, esto será aquello que la plataforma <strong>devolverá al usuario final</strong> una vez procesado todo lo anterior.
                    </p>
                </div>
                <div class="contenedor_imagen">
                    <object data="../img/undraw_throw_down_ub-2-l.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>¿Cómo crear un Intent?</strong></p>
                    <hr>
                    <p>
                        Para crear un intent, se tienen que seguir los siguientes pasos:
                    </p>
                    <p>
                        1.- En el menú de la barra lateral izquierda, haz clic en el botón <strong>Agregar +</strong> que aparece junto a intents.
                    </p>
                    <p>
                        2.- Ingresa el nombre para el intent.El nombre de tu intent debe representar las expresiones de usuario final que reconoce.
                    </p>
                    <p>
                        3.- Haz clic en guardar.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Entidades:</strong></p>
                    <hr>
                    <p>
                        Las entidades son las herramientas por las cuales esta plataforma identifica y extrae datos útiles de las entradas de lenguaje natural.Se utilizan para elegir información específica que mencionan los usuarios. En palabras más simples, una entidad es un concepto o una palabra clave al que se le puede asignar un valor de manera tal que se pueda emparejar con una intención, estas suelen coincidir mucho con cosas como las categorías, ubicaciones, fechas, cantidades, etc…
                    </p>
                </div>
                <div class="contenedor_imagen">
                    <object data="../img/undraw_elements_re_25t9.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                
                <div class="contenedor_imagen">
                    <object data="../img/undraw_creative_team_re_85gn.svg"></object>
                </div>



                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Tipos de entidades:</strong></p>
                    <hr>
                    <p>
                        <strong style="color: #7a1a8d;">Entidades por defecto: </strong>Estas son las formas más simples que el mismo sistema de Dialog Flow te brinda por defecto y que dependiendo del idioma, este mismo te lo puede detectar como coincidencia. 
                    </p>
                    <p>
                        <strong style="color: #7a1a8d;">Entidades personalizadas: </strong>Como su nombre lo dice, no estás limitado solo a tener las entidades que el sistema te brinda,al contrario puedes crear tus propias coincidencias adecuandolo más a tus necesidades.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p>
                    Es aquí donde cada entidad del sistema necesita una o varias entradas para poder funcionar, estas entradas son <strong>frases o palabras,</strong> de las cuales ya hablamos anteriormente.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object data="../img/undraw_creative_process_re_4ylm.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Opciones de entidades:</strong></p>
                    <hr>
                    <p>Estas opciones están enfocadas en las entidades personalizadas de esta plataforma</p>
                    <p>
                        <strong style="color: #7a1a8d;">Entidades de mapa: </strong>Lo que este tipo de entidad realiza es un mapeo de elementos, en palabras más técnicas, esta entidad puede ser como un arreglo con elementos. <strong>Veamos un ejemplo:</strong> Si necesitamos identificar la referencia “M” de la entidad talla se puede asignar varios sinónimos de esta como: mediano,regular,normal. De manera que si el usuario ingresa alguno de estos la consola podrá reconocerlo fácilmente. Gracias a esta opción, se puede simplificar el entrenamiento de nuestra intención ya que solo tendrás que crear un listado de sinónimos y elaborar combinaciones sintácticas para que las interpretaciones sean lo más acertadas posibles. <a href="https://cloud.google.com/dialogflow/es/docs/entities-options?hl=es-419#map" target="_blanck">ver su construcción</a>
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
               
                <div class="contenedor_texto">
                    <p>
                        <strong style="color: #7a1a8d;">Entidades de lista: </strong>Estas entidades proporcionan un inventario de las entidades de <strong>valor único</strong>, lo que quiere decir que trabaja sobre aquellas que no tienen sinónimos ni valores de referencia.Por ejemplo, para identificar un color.

                    </p>
                </div>
                <div class="contenedor_imagen">
                    <object data="../img/undraw_note_list_re_r4u9.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
               
               <div  id="imagen_a_ocultar" class="contenedor_imagen">
                   <object data="../img/undraw_abstract_re_l9xy.svg"></object>
               </div>
               <div class="contenedor_texto">
                   <p>
                       <strong style="color: #7a1a8d;">Entidad compuesta: </strong>Muchas veces estas entidades pueden hacer referencia a más de un valor, ya que se pueden identificar como alias.De esta forma, cuando una entidad de lista contiene alias de otro tipo de entidades, recibe el nombre de entidad compuesta. <strong>Por ejemplo:</strong> si se coloca la entidad  @sys.unit-curreny se estará haciendo referencia la cantidad de dinero y nombre de la moneda. 
                </p>
               </div>
           </div>
           <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
               <div class="contenedor_texto">
                   <p>
                       <strong style="color: #7a1a8d;">Entidad de expresión regular: </strong>Hay ocasiones en las que es difícil anticiparse a la respuesta de un usuario o a los términos de una entidad.Por ello, la consola permite crear entidades que detectan patrones. De esta forma Dialog Flow puede identificar por ejemplo que un conjunto de 4 números y 3 letras es una matrícula.
                    </p>
               </div>
               <div  id="imagen_a_ocultar" class="contenedor_imagen">
                   <object data="../img/undraw_file_analysis_8k9b.svg"></object>
               </div>
           </div>
           <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object data="../img/undraw_site_content_re_4ctl.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Funciones de las entidades:</strong></p>
                    <hr>
                    <p>En Dialog Flow se permiten dos funciones en relación a las entidades.</p>
                    <p>
                        <strong style="color: #7a1a8d;">Expansión: </strong>Esta es una función automática que puede reconocer valores que no se especifican de forma explícita.Por ejemplo, para una lista de animales, cada elemento será un valor de referencia de forma que si un usuario utiliza la expresión “que es un gato” se asigna “gato” a este tipo de entidad.Aunque no se se asigne explícitamente las funciones automáticas lo hacen. Es por ello que es importante dar muchos ejemplos al boot para poder hacer que su entrenamiento sea más factible. </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p><strong style="color: #7a1a8d;">Coincidencia: </strong>Esta es una función que nos da coincidencias conforme  a  las entradas y entidades de manera automática. Sin embargo, cuando existen sinónimos o valores de varias palabras pueden aparecer fallos. Esta función permite que el orden de las palabras en un valor o sinónimo no sea importante, sin necesidad de haber definido previamente un valor de entrada para cada una de las variaciones posibles. Estas funciones tiene algunas limitaciones como lo pueden ser:
                    </p>
                    <p>° No puede habilitarse para entidades de expresión regular</p>
                    <p>° No es recomendable en entidades que se usan para coincidir valores escritos como números de identificación.</p>
                </div>
                <div class="contenedor_imagen">
                    <object data="../img/undraw_settings_tab_mgiw.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>¿Cómo crear una entidad?</strong></p>
                    <hr>
                    <p>Existen varias opciones para configurar tus entidades, aquí tienes los pasos para ver estas opciones:</p>
                    <p>1.- Ve a la consola de <a href="https://dialogflow.cloud.google.com/?hl=es-419" target="_blanck"> Dialog Flow Es </a></p>
                    <p>2.- Selecciona un agente</p>
                    <p>3.- Selecciona Entidades en el menú de la barra lateral izquierda.</p>
                    <p>4.- Selecciona la pestaña Personalizadas si quieres ver estas entidades, que se definieron para el agente.</p>
                    <p>5.- Consulta las siguientes opciones de casilla de verificación	 para cualquier entidad existente:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;a)Define sinónimos</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;b)Entidad de expresión regular</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;c)Permitir la expansión automática</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;d)Concordancia parcial</p>    
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object data="../img/Captura desde 2022-12-19 22-06-27.png"></object>
                    <p>figura 1 extraída de(<a href="https://cloud.google.com/dialogflow/es/docs/contexts-overview?hl=es-419" target="_blanck">Dialog flow documentation</a>)</p>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Contextos</strong></p>
                    <hr>
                    <p>Los contextos en esta plataforma son muy similares al contexto que se obtiene del lenguaje natural. Si una persona le dice “es de color naranja”, necesita tener un contexto para saber que cosa es de ese color. Del mismo modo, para que Dialog Flow maneje una expresión de usuario final como esa,debe proporcionarse un contexto con el fin de que coincida de forma correcta en una intención.Mientras los contextos, puedes controlar el flujo de una conversacion.Si quieres configurar contexto para una intención, debes de establecer contextos de salida y de entrada, que se identifican mediante nombres de strings. Cuando este coincide con la intención, se activan los contextos de salida configurados para esa intención. Mientras existan los contextos activos , es más probable que tus intenciones coinciden con las entradas que corresponden a tu contexto. Una forma de verlo es como se muestra en la figura 1. </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Tipos de contextos</strong></p>
                    <hr>
                    <p>Estos contextos se le aplican a las intenciones para que así en conjunto con estas se pueda controlar el flujo de la conversación con estos dos tipos:</p>
                    <p><strong style="color: #7a1a8d;">Contextos de salida: </strong>Estos contextos controlan los contextos activos.Cuando se detecta una coincidencia con una intención, se activan los contextos de salida configurados para esa intención.  Se pueden aplicar varios contextos de salida a una intención.Cuando se detecta una coincidencia en una incidencia con un contexto de salida, se pueden usar los valores de los parámetros recopilados temporalmente haciendo referencia a los parámetros para los contextos activos. pudiendo acceder a este mientras el contexto esté activo.</p>
                </div>
                <div class="contenedor_imagen">
                    <object data="../img/undraw_result_re_uj08.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 49% 49%;">
           
            <div class="contenedor_imagen">
                    <object data="../img/undraw_product_iteration_kjok.svg"></object>
                </div>
                <div class="contenedor_texto">
                  <p><strong style="color: #7a1a8d;">Vida útil del contexto: </strong>todos los contextos tienen una vida útil que define la cantidad de turnos de conversación durante los que el contexto permanecerá activo. La vida predeterminada es de cinco turnos de conversación para las intenciones normales y de dos turnos de conversación para las intenciones de seguimiento. Puedes anular la duración de cualquier contexto ya que lo máximo  que estas pueden duran son 20 minutos. </p>
                </div>

                
            </div>
            <br>
            
        </div>
    </div>
    <br>
    <script src="../js/progreso.js"></script>
</body>

</html>