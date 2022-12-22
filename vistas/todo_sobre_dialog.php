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
            <a name="¿que_es_dialog?"></a>
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
                <a name="donde_surge?"></a>
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
                <a name="como_esta_conformado?"></a>
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
            <a name="intenciones"></a>
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
            <a name="entidades"></a>
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

                <div id="imagen_a_ocultar" class="contenedor_imagen">
                    <object data="../img/undraw_abstract_re_l9xy.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p>
                        <strong style="color: #7a1a8d;">Entidad compuesta: </strong>Muchas veces estas entidades pueden hacer referencia a más de un valor, ya que se pueden identificar como alias.De esta forma, cuando una entidad de lista contiene alias de otro tipo de entidades, recibe el nombre de entidad compuesta. <strong>Por ejemplo:</strong> si se coloca la entidad @sys.unit-curreny se estará haciendo referencia la cantidad de dinero y nombre de la moneda.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p>
                        <strong style="color: #7a1a8d;">Entidad de expresión regular: </strong>Hay ocasiones en las que es difícil anticiparse a la respuesta de un usuario o a los términos de una entidad.Por ello, la consola permite crear entidades que detectan patrones. De esta forma Dialog Flow puede identificar por ejemplo que un conjunto de 4 números y 3 letras es una matrícula.
                    </p>
                </div>
                <div id="imagen_a_ocultar" class="contenedor_imagen">
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
                        <strong style="color: #7a1a8d;">Expansión: </strong>Esta es una función automática que puede reconocer valores que no se especifican de forma explícita.Por ejemplo, para una lista de animales, cada elemento será un valor de referencia de forma que si un usuario utiliza la expresión “que es un gato” se asigna “gato” a este tipo de entidad.Aunque no se se asigne explícitamente las funciones automáticas lo hacen. Es por ello que es importante dar muchos ejemplos al boot para poder hacer que su entrenamiento sea más factible.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p><strong style="color: #7a1a8d;">Coincidencia: </strong>Esta es una función que nos da coincidencias conforme a las entradas y entidades de manera automática. Sin embargo, cuando existen sinónimos o valores de varias palabras pueden aparecer fallos. Esta función permite que el orden de las palabras en un valor o sinónimo no sea importante, sin necesidad de haber definido previamente un valor de entrada para cada una de las variaciones posibles. Estas funciones tiene algunas limitaciones como lo pueden ser:
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
                    <p>5.- Consulta las siguientes opciones de casilla de verificación para cualquier entidad existente:</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;a)Define sinónimos</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;b)Entidad de expresión regular</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;c)Permitir la expansión automática</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;d)Concordancia parcial</p>
                </div>
            </div>
            <a name="contextos"></a>
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
                    <p><strong style="color: #7a1a8d;">Contextos de salida: </strong>Estos contextos controlan los contextos activos.Cuando se detecta una coincidencia con una intención, se activan los contextos de salida configurados para esa intención. Se pueden aplicar varios contextos de salida a una intención.Cuando se detecta una coincidencia en una incidencia con un contexto de salida, se pueden usar los valores de los parámetros recopilados temporalmente haciendo referencia a los parámetros para los contextos activos. pudiendo acceder a este mientras el contexto esté activo.</p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_result_re_uj08.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 49% 49%;">

                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_product_iteration_kjok.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p><strong style="color: #7a1a8d;">Vida útil del contexto: </strong>todos los contextos tienen una vida útil que define la cantidad de turnos de conversación durante los que el contexto permanecerá activo. La vida predeterminada es de cinco turnos de conversación para las intenciones normales y de dos turnos de conversación para las intenciones de seguimiento. Puedes anular la duración de cualquier contexto ya que lo máximo que estas pueden duran son 20 minutos. </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p><strong style="color: #7a1a8d;">Contextos de entrada: </strong>Mientras existan contextos activos, es más propenso que la plataforma detecte coincidencias con intenciones configuradas con contexto de entrada que correspondan a los contextos activos de ese momento. Las reglas de las coincidencias de las intenciones son las siguientes:</p>
                    <p>&nbsp;a.La lista de contextos de entrada de una intención debe de ser un subconjunto de la lista de contextos activos en este momento para que se detecte la coincidencia. Esto también se aplica a las intenciones que no tienen contextos de entrada.</p>
                    <p>&nbsp;b.En el caso de las intenciones que satisfacen la regla a, es más probable que se detecte una coincidencia con aquellos cuya lista de contextos de entrada sea más similar a la lista de contextos activos en el momento. </p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_data_processing_yrrv (1).svg"></object>
                </div>
            </div>
            <br>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">

                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_data_input_fxv2.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Aquí algunos ejemplos de estos contextos:</strong></p>
                    <hr>
                    <li>Las intenciones sin contexto pueden coincidir en cualquier momento</li>
                    <li>Si no hay contextos activos, solo se pueden detectar coincidencias con intenciones que no tengan contextos de entrada. </li>
                    <li>Si están activos los contextos “A” y “B”, no se puede detectar una coincidencia con una intención que tenga los contextos de entrada “A” y “C”.</li>
                    <li>Si están activos los contextos ”A” , ”B” y “C”, puede detectarse una coincidencia con una intención que tenga los contextos de entrada”A” y”B”.</li>
                    <li>Si están activos los contextos “A” y “B”, es más probable que se detecte una coincidencia con una intención que tenga los contextos de entrada “A” y ”B” que con una intención que no tenga contexto de entrada o solo tenga el contexto de entrada “A”. </li>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Intenciones de seguimiento</strong></p>
                    <hr>
                    <p>Las intenciones de seguimiento pueden usarse con el fin de establecer contextos para pares de intenciones de forma automática. Una intención de seguimiento es un elemento secundario de la intención superior asociada. Cuando creas una intención de seguimiento, se agrega de forma automática un contexto de salida a la intención superior y se agrega un contexto de entrada con el mismo nombre que la intención de seguimiento.Una intención de seguimiento sólo coinciden cuando la intención superior coincide en el turno anterior de conversación. También se pueden crear varios niveles de intenciones de seguimiento anidados.
                        En Dialog Flow existen muchas intenciones de seguimiento predefinidas para respuestas comunes de los usuarios finales como “si”, “no” o “cancelar'' .Sin embargo también es posible crear tus propias intenciones para manejar respuestas personalizadas.
                        Si aún no ha quedado claro, en la tabla 1 se puede ver cómo es que se representan estas intenciones y cómo interactúan.
                    </p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/Captura desde 2022-12-20 12-06-03.png"></object>
                    <p style="text-align: right;">Tabla 1 extraída de(<a href="https://cloud.google.com/dialogflow/es/docs/contexts-follow-up-intents?hl=es-419" target="_blanck">Dialog flow documentation</a>)</p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p>Si deseas investigar más sobre cómo es que funcionan estas intenciones consulta este <a href="https://cloud.google.com/dialogflow/es/docs/contexts-follow-up-intents?hl=es-419" target="_blanck">link.</a> </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_add_notes_re_ln36.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Administración de contextos</strong></p>
                    <hr>
                    <p>
                        En la mayor parte de los casos, los contextos se configuran en el diseño de los agentes.Por ejemplo, cuando se crea una frase de entrenamiento como “Me gustaría agregar una pizza a mi carrito de compras”.
                        En algunas situaciones avanzadas, también se recomienda escribir código que obtenga y establezca algunos contextos en el entorno de ejecución.Un ejemplo de ello sería detectar la ubicación del dispositivo y agregarlo al contexto, por lo que puedes consultar la ubicación en otro momento.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>¿Cómo crear un nuevo contexto?</strong></p>
                    <hr>
                    <li>Ve a la consola de <a href="https://cloud.google.com/dialogflow?hl=es-419" target="_blanck">Dialogflow ES.</a></li>
                    <li>Selecciona un agente.</li>
                    <li>En el menú de la barra lateral izquierda, selecciona Intents.</li>
                    <li>Expande la sección Contexts (Contextos) de los datos del intent.</li>
                    <li>Haz clic en el campo Add output context (Agregar contexto de salida) o Add input context (Agregar contexto de entrada) de los datos del intent.</li>
                    <li>Ingresa un nombre para el contexto y presione Return (Volver).</li>
                    <li>Para los contextos de salida, puedes hacer clic en el círculo de la vida útil a fin de cambiarla.</li>
                    <li>Para los contextos de salida, puedes hacer clic en el círculo de la vida útil a fin de cambiarla.</li>
                    <li>Haz clic en Guardar.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/undraw_social_user_re_8cky.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>¿Cómo asignar nombres a los contextos?</strong></p>
                    <hr>
                    <p>Para poder agregar un nombre correcto a cualquier tipo de contexto es necesario cumplir con las reglas mostradas en la tabla 2.</p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/nopmbres.png"></object>
                    <p style="text-align: right;">Tabla 2 extraída de(<a href="https://cloud.google.com/dialogflow/es/docs/contexts-manage?hl=es-419" target="_blanck">Dialog flow documentation</a>)</p>
                </div>
            </div>
            <a name="agentes"></a>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_add_user_re_5oib.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Agentes</strong></p>
                    <hr>
                    <p>
                        Cuando se habla de agentes en Dialog flow, hablamos de módulos que comprenden el lenguaje natural entendiendo los matices del lenguaje humano. El fin de un agente en esta plataforma es manejar los tipos de conversaciones requeridas para su solución o problema.
                        Se puede comparar a uno de estos agentes con una persona en un centro de llamadas convencional. Estos deben ser entrenados para que se encarguen de diferentes situaciones esperadas.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Crear y administrar agentes</strong></p>
                    <hr>
                    <p><strong>Creando un agente</strong></p>
                    <p>Para crear un agente en esta plataforma es necesario seguir los siguientes pasos:</p>
                    <li>Ir a la consola de <a href="https://cloud.google.com/dialogflow?hl=es-419" target="_blanck">DialogFlow Es</a></li>
                    <li>Se hace clic en crear agente en el menú a la izquierda.</li>
                    <li>Se ingresa el nombre del agente, el idioma predeterminado, la zona horaria y el proyecto de GCP.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_online_art_re_f1pk.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Agentes preconstruidos</strong></p>
                    <hr>
                    <p>Estos son una colección de agentes que la misma plataforma ya te proporciona, están basados en casos prácticos comunes.Estos agentes ya incluyen intenciones y entidades entrenadas para diferentes usos.</p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Limitaciones</strong></p>
                    <hr>
                    <p><strong>Estos agentes tienen algunas limitaciones:</strong></p>
                    <li>Los agentes compilados de forma previa solo están disponibles para la región global.</li>
                    <li>Cada agente compilado previamente admite un subconjunto de todos los idiomas de esta plataforma</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_pair_programming_re_or4x.svg"></object>
                </div>
            </div>
            <br>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_asset_selection_re_k5fj.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Cómo importar un agente</strong></p>
                    <hr>
                    <p><strong>Para importar un agente preconstruido puedes seguir los siguientes pasos:</strong></p>
                    <li>En el menú de la barra lateral izquierda,haz clic en Agentes compilados previamente.</li>
                    <li>Colocar el cursor del mouse sobre un agente compilado previamente.</li>
                    <li>Haz clic en ver detalles</li>
                    <li>Haz clic en importar</li>
                    <li>Crea un nuevo proyecto de GCP o elige uno ya existente</li>
                    <li>Haz clic en Crear agente partir de una plantilla</li>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Versiones y entornos</strong></p>
                    <hr>
                    <p>Se pueden crear múltiples versiones de tu agente y publicarlas en entornos separados.
                        Al editar un agente se guarda en un borrador. Borrador que luego puede ser guardado como una versión de este mismo.
                        Cuando guardas el agente de borrador, se publica en un entorno predeterminado, pero cuando lo pasas a versión, este puede ser publicado en un entorno personalizado. Algunos de los entornos personalizados son los siguientes:</p>
                    <li>Pruebas</li>
                    <li>Desarrollo</li>
                    <li>Producción</li>
                    <li>otros</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_version_control_re_mg66.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">

                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_update_re_swkp.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Tráfico de producción</strong></p>
                    <hr>
                    <p>Los borradores de los agentes se actualizan cada vez que ocurre un cambio.Es muy facil interrumpir el borrador de un agente cuando se trabaja en forma simultánea en el código de este.Además muchas veces el modelo demora un poco más en entrenarse de nuevo por lo que en ocasiones este no sería coherente.</p>
                    <p><strong>Considerar errores mientras se cambian las versiones</strong></p>
                    <p>Cuando se realice un cambio de versión en el entorno de producción mientras las sesiones están activas, es posible que se generen errores de agente en algunas sesiones activas.Es por ello que se debe planificar el cambio de versiones durante las horas de menor demanda o fuera de ellas.</p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p><strong>Cómo publicar una versión en un entorno nuevo</strong></p>
                    <p>Para publicar un agente de borrador como una versión nueva y crear un entorno personalizado es necesario realizar los siguientes pasos:
                    </p>
                    <li>Seleccionar el agente cerca de la parte superior de la barra lateral izquierda.</li>
                    <li>Hacer clic en el botón de configuración junto con el nombre del agente.</li>
                    <li>Haz clic en la pestaña Entornos.</li>
                    <li>Haz clic en publicar una versión.</li>
                    <li>Agrega una descripción y haz clic en next.</li>
                    <li>Selecciona Nuevo entorno.</li>
                    <li>Ingresa el nombre del entorno.</li>
                    <li>Haz clic en publicar.</li>
                    <li>La información del entorno ahora aparece en la sección entornos personalizados.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_fill_in_re_sybw.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_timeline_re_aw6g.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p><strong>Cómo revertir un entorno a una versión anterior</strong></p>
                    <p>Para revertir un entorno a una versión anterior del agente es necesario:</p>
                    <li>Haz clic en un entorno de la sección Entornos personalizados.</li>
                    <li>Se abrirá un cuadro de diálogo de configuración del entorno.</li>
                    <li>Haz clic en el botón de opción para ver una versión publicada previamente en la sección Historial de publicaciones.</li>
                    <li>Se actualizará el historial de publicaciones.</li>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p><strong>Cargar una version anterior como borrador</strong></p>
                    <p>Si cargas una versión anterior como borrador, se reemplazará el agente del borrador en el entorno por una versión seleccionada:</p>
                    <li>Selecciona a tu agente en la parte superior del menú de la barra lateral izquierda.</li>
                    <li>Haz clic en el botón de configuración junto al nombre del agente.</li>
                    <li>Haz clic en la pestaña entornos.</li>
                    <li>Haz clic en la sección Borrador.</li>
                    <li>Selecciona el botón de opción para ver la versión que quieres cargar en el borrador.</li>
                    <li>Haz clic en cargar como borrador.</li>
                    <li>Haz clic en cargar como borrador.</li>
                    <li>Vuelve a cargar la pestañas del navegador de la consola abierta para que se actualicen con los datos del agente más reciente.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_real_time_collaboration_c62i.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_under_construction_-46-pa.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p><strong>Limitaciones</strong></p>
                    <p>Se aplica la siguiente limitación:</p>
                    <li>Cantidad máxima de entornos por agente:10</li>
                    <li>Cantidad máxima de versiones por agente:1,000</li>
                    <p>Si deseas saber mas de como es que funcionan estas partes de las versiones puedes consultar la <a href="https://cloud.google.com/dialogflow/es/docs/agents-versions?hl=es-419#console_1" target="_blanck">fuente original.</a></p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p><strong>Agentes multilingües</strong></p>
                    <p>Esta plataforma admite muchos idiomas,Para obtener la lista completa de estos puedes consultar <a href="https://cloud.google.com/dialogflow/es/docs/reference/language?hl=es-419" target="_blanck">la siguiente página.</a> Además de agregar el idioma original puedes también agregar más de un idioma a tu agente.</p>
                    <p><strong>Idiomas raíz y específicos de la configuración regional</strong></p>
                    <p>Existen dos categorías de algunos idiomas:</p>
                    <li><strong>Idioma raíz:</strong>Estos son los idiomas que no necesitan de una región particular para su estructura.</li>
                    <li><strong>Idioma específico de la configuración regional:</strong>Estos son idiomas que se especifican con una configuración regional como por ejemplo:</li>
                    <dd>°Ingles (EE.UU)</dd>
                    <dd>°Chino cantonés (zh-HK)</dd>
                    <dd>°Chino simplificado (zh-CN)</dd>
                    <dd>°Chino tradicional (zh-TW)</dd>
                    <dd>°Portugués de Brasil (pt-BR)</dd>
                    <dd>°Portugués de Portugal (pt)</dd>
                    <p>Es recomendable primero diseñar tu agente para los idiomas raíz y solo personalizarlo para la región cuando sea necesario.</p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/undraw_messages_re_qy9x.svg"></object>
                </div>
            </div>
            <br>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_work_chat_re_qes4.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Agregar un idioma</strong></p>
                    <hr>
                    <p>Para poder agregar un idioma o una configuración regional es necesario hacer lo siguiente:</p>
                    <li>En el menú de la barra lateral izquierda, haz clic en el botón para agregar idiomas junto a los idiomas existentes. Esto te llevará a la pestaña idiomas de la configuración del agente.</li>
                    <li>Selecciona un idioma del menú desplegable Seleccionar un idioma adicional.</li>
                    <li>Para agregar una configuración regional,desplázate sobre un idioma raíz y haz clic en agregar configuración regional.</li>
                    <li>Haz clic en guardar.</li>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Datos específicos del lenguaje</strong></p>
                    <hr>
                    <p>La mayoría de los datos de los agentes son comunes para todos los idiomas de una agente multilingüe.Sin embargo, el texto con el que se interactúa es específico del idioma. Cuando compilas un agente es necesario proporcionar estos datos por cada idioma.Las siguientes ligas te enviaran a estos datos específicos:</p>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/intents-training-phrases?hl=es-419" target="_blanck">Frases de entrenamiento de intents</a></li>
                    <li><a href="https://www.google.com/url?q=https://cloud.google.com/dialogflow/es/docs/intents-responses?hl%3Des-419&sa=D&source=docs&ust=1671569548798752&usg=AOvVaw1Q6jhpG8V5mVuMElEjVC2T" target="_blanck">Respuestas de intent</a></li>
                    <li><a href="https://www.google.com/url?q=https://cloud.google.com/dialogflow/es/docs/entities-overview?hl%3Des-419&sa=D&source=docs&ust=1671569557717729&usg=AOvVaw2HNLkgSZmKISqtSSr0t1Bb" target="_blanck">Entradas de entidad</a></li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_group_chat_re_frmo (1).svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_around_the_world_re_rb1p.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Solicitudes que no proporcionan el idioma de un agente</strong></p>
                    <hr>
                    <p>Cuando se recibe una solicitud que no proporciona un idioma admitido por el agente, se aplican las siguiente reglas:</p>
                    <li>Cuando una solicitud no proporciona un idioma, Dialogflow maneja la solicitud mediante el idioma predeterminado.</li>
                    <li>Cuando una solicitud proporciona un idioma específico de la configuración regional que no es admitido por el agente, pero el agente admite el idioma raíz asociado, Dialogflow maneja la solicitud mediante el idioma raíz.</li>
                    <li>La extracción de la entidad del sistema es una excepción a la regla anterior. La extracción de la entidad del sistema usa el idioma específico de la configuración regional proporcionado, incluso si el agente no admite el idioma específico de la configuración regional.</li>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Agentes combinados</strong></p>
                    <hr>
                    <p>Un agente combinado es la suma de múltiples agentes secundarios,Cuando se realice una detección de intención en un agente combinado, se consideran todos los agentes secundarios y se muestra su mejor respuesta.
                        Aquí algunos motivos por los que se recomienda usar estos agentes:
                    </p>
                    <li><strong>Mejor administración: </strong>Si tienes varios equipos en la compilación de un agente, cada equipo puede ser responsable de un agente secundario, lo que simplifica conflictos de cambio entre los equipos.</li>
                    <li><strong>Más intents: </strong>Si tienes agentes con una gran cantidad de intentos, puedes acercarte al <strong>límite de recuento de intents.</strong> En este caso, puedes crear varios agentes secundarios y un agente combinado.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_dark_alley_hl-3-o.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_towing_re_wesa.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Limitaciones</strong></p>
                    <hr>
                    <p>Las siguientes limitaciones se aplican a los agentes combinados:
                    </p>
                    <li>Se debe crear un agente combinado y sus agentes secundarios en la misma región.</li>
                    <li>Dentro de una región, un agente combinado y sus agentes secundarios están asociados con diferentes proyectos de GCP.</li>
                    <li>Un agente combinado puede tener 10 agentes secundarios como máximo.</li>
                    <li>Small Talk no funciona para los agentes combinados.</li>
                    <li>La prioridad de intents del subagente no afecta la coincidencia de intents cuando se envían solicitudes a un agente combinado.</li>
                    <li>La integración del Asistente de Google no se puede usar con el agente combinado.</li>
                    <li>Las integraciones telefónicas incorporadas por socios (AudioCodes, Avaya, Genesys y SignalWire, Voximplant) no se admiten.</li>
                    <li>El agente combinado no admite intents de resguardo que se usan como intents de seguimiento.</li>
                    <p>Si deseas saber mas de como se configuran estos agentes te invito a visitar la <a href="https://cloud.google.com/dialogflow/es/docs/agents-mega?hl=es-419" target="_blanck">siguiente pagina</a> donde encontras procesos más detallados sobre esto.</p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Small Talk</strong></p>
                    <hr>
                    <p>Esta es una función que se utiliza para proporcionar respuestas a una conversación informal.Se puede activar para generar al usuario una experiencia más cercana, realizando preguntas comunes que van más allá del permiso de tu agente.
                        Se tiene esta función en dos tipos:
                    </p>
                    <li><strong>Small talk integrada: </strong>Cuando está habilitada para un agente, maneja la conversación informal de forma automática,sin agregar intents a tu agente. </li>
                    <li><strong>Small Talk compilada previamente: </strong>Cuando se importa el agente de Small Talk compilado previamente, este proporciona intents para manejar la conversación informal.</li>
                    <p><strong>Cómo habilitar el Small Talk en tu agente</strong></p>
                    <p>Si deseas habilitarla es necesario seguir estos pasos: </p>
                    <li>Haz clic en <strong>Smalltalk</strong> en el menú de la barra lateral</li>
                    <li>Haz clic en habilitar para activarlo</li>
                    <li>Haz clic en guardar</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_conversation_re_c26v.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_typing_re_d4sq.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Personaliza las respuestas de Small Talk</strong></p>
                    <hr>
                    <p>Puedes ajustar esta herramienta a las necesidades de tu proyecto,personalizando las respuestas de la siguiente manera:</p>
                    <li>Haz clic en <strong>Small Talk</strong> en el menú de la barra lateral izquierda.</li>
                    <li>Haz clic en una carpeta de categoría de respuesta.</li>
                    <li>Agrega respuestas nuevas o edita las existentes.</li>
                    <li>Haz clic en <strong>Guardar.</strong></li>
                    <p><strong>Limitaciones de esta herramienta</strong></p>
                    <li>Solo es compatible con algunos <a href="https://cloud.google.com/dialogflow/es/docs/reference/language?hl=es-419" target="_blanck">idiomas</a></li>
                </div>

            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Configuración de agentes</strong></p>
                    <hr>
                    <p>Vamos a englobar algunas de las funciones más comunes que se tienen en la configuración de nuestros agentes, para ello necesitamos ir a la configuración de estos con los siguientes pasos:</p>
                    <li>Ve a la consola de Dialogflow ES.</li>
                    <li>Selecciona a tu agente cerca de la parte superior del menú de la barra lateral izquierda.</li>
                    <li>Haz clic en el botón de configuración que se encuentra junto al nombre del agente.</li>
                    <p><strong>Haz clic en el botón de configuración que se encuentra junto al nombre del agente.</strong></p>
                    <p>Para editar los agentes es necesario seguir los siguientes pasos:</p>
                    <li>Desplázate hasta la parte inferior del menú de la barra lateral izquierda, en el que se muestra la edición del agente.</li>
                    <li>Haz clic en el vínculo Editar o Actualizar.</li>
                    <li>Selecciona un plan.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/undraw_ask_me_anything_re_x7pm.svg"></object>
                </div>

            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/undraw_server_cluster_jwwq.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Configuración General</strong></p>
                    <hr>
                    <p>Si accedes a la configuración general de tus agentes puedes ver las siguientes opciones de edición:
                    </p>
                    <li><strong>Descripción:</strong> la descripción del agente.</li>
                    <li><strong>Zona horaria predeterminada:</strong>La zona horaria predeterminada del agente Las solicitudes de fecha y hora se resuelven con esta zona horaria si esta no se proporciona en las solicitudes a la API.</li>
                    <li><strong>URI del avatar del agente: </strong>Un URI para el avatar de tu agente que usan algunas integraciones.</li>
                    <li><strong>Proyecto de Google:</strong>El proyecto de GCP vinculado al agente.</li>
                    <li><strong>Versión del protocolo de webhook de agentes:</strong>solo visible en los agentes heredados de la API de V1. Te permite cambiar al formato webhook de la API de V2.</li>
                    <li><strong>Funciones Beta:</strong>Activa o desactiva las funciones Beta del agente.</li>
                    <li>Configuración de registros (Log Settings):</li>
                    <dd>°Registra interacciones en Dialogflow.</dd>
                    <dd>°Registrar interacciones en Google Cloud.</dd>
                    <li><strong>Borrar agente: </strong>Borra por completo el agente y no se puede deshacer. Si el agente se comparte con otros usuarios, debes quitar esos usuarios del agente para poder borrarlo. </li>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Configuracion de aprendizaje automático</strong></p>
                    <hr>
                    <p>Los agentes de esta plataforma utilizan algoritmos de aprendizaje automático para comprender las expresiones del usuario final y hacerlas coincidir con el intent final. Según la configuración que le des a tu agente puede aprender de estas interacciones con el usuario. aquí están algunos de los parámetros que se pueden configurar para cada agente:</p>
                    <li><strong>Umbral de clasificación de AA (ML Classification Threshold): </strong>Para filtrar los falsos positivos y, aún así, obtener variedad en las entradas de lenguaje natural coincidentes para tu agente, puedes ajustar el umbral de clasificación de aprendizaje automático. Esta configuración controla la confianza de detección de intents mínima requerida para una coincidencia de intents.</li>
                    <li><strong>Automatic Spell Correction: </strong>Si esta función está habilitada y la entrada del usuario tiene un error ortográfico o gramatical, se establecerá la coincidencia con un intent como si se hubiera escrito correctamente. La respuesta de la detección de intent contendrá la entrada del usuario corregida.</li>
                    <li><strong>Automatic Training: </strong>Habilita o inhabilita el entrenamiento automático de agentes cada vez que se modifica el agente.</li>
                    <p>Si deseas saber más sobre las configuraciones que se pueden realizar a un agente puedes ir a la fuente original que te dejo en el siguiente <a href="https://cloud.google.com/dialogflow/es/docs/agents-settings?hl=es-419" target="_blanck">link.</a></p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/undraw_learning_sketching_nd4f.svg"></object>
                </div>
            </div>
            <a  name="Fulfilment"></a>
            <div class="contenido_texto_imagenes_Responsivo">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Fulfilment</strong></p>
                    <hr>
                    <p>De forma determinada, tu agente responde a un intent con una respuesta estatica.Si usas unas de las opciones de integración,puedes proporcionar una respuesta más dinámica mediante la entrega.Cuando habilitas la entrega para un intent, la plataforma responde a ese intent con una llamada a un servicio que hayas definido. Por ejemplo, si un usuario quiere pedir una cita para el viernes, el servicio puede verificar la base de datos y responderle al usuario final con información acerca de la disponibilidad para el viernes.
                        Los intents tienen una configuracion que les permite la entrega.Si un intente requiere una acción por parte del sistema o una respuesta dinámica,debes habilitar la entrega para ese intent.Cuando un intent sin entregas habitadas tiene una coincidencia,Dialo Flow usa la respuesta estática que definiste para ese intent.
                        Cuando se tiene una coincidencia, esta plataforma envía una solicitud a tu servicio de webhook con información sobre el intent coincidente.El sistema puede realizar diferentes acciones requeridas Veamos un diagrama que lo explica mejor extraído de la documentación de DialogFlow.
                    </p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 100%;" data="../img/diagrama.png"></object>
                    <p style="text-align: right;">imagen extraida de la documentacion de <a href="https://cloud.google.com/dialogflow/es/docs/fulfillment-overview?hl=es-419" target="_blanck">DialogFlow</a></p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Pasos del diagrama:</strong></p>
                    <hr>
                    <li>El usuario final escribe o dice una expresión.</li>
                    <li>DialogFlow hace coincidir la expresión del usuario final con un intent y extrae los parámetros.</li>
                    <li>DialogFlow envía un mensaje de solicitud de webhook a tu servicio de webhook. Este mensaje contiene información sobre el intent coincidente, la acción, los parámetros y la respuesta definida para ese intent.</li>
                    <li>El servicio realiza acciones según sea necesario, como consultas a las bases de datos o llamadas externas a la API.</li>
                    <li>El servicio envía un mensaje de respuesta de webhook a Dialogflow. Este mensaje contiene la respuesta que se debe enviar al usuario final.</li>
                    <li>Dialogflow envía la respuesta al usuario final.</li>
                    <li>El usuario final ve o escucha la respuesta.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_completed_steps_re_h9wc.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_project_completed_re_jr7u.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Editor directo</strong></p>
                    <hr>
                    <p>La consola de Dialogflow tiene un editor de código integrado, llamado editor directo, que puedes usar a fin de crear código de entrega y de implementar el código en <strong>Cloud Functions.</strong> Cloud Functions tiene cargos asociados, pero el servicio está disponible sin cargo hasta una <strong>cantidad significativa de invocaciones mensuales.</strong> Ten en cuenta que debes registrarte y proporcionar una cuenta de facturación válida. Puede cancelar la suscripción en cualquier momento.</p>
                    <p>Cuando habilitas por primera vez el editor directo, se pre propagan en el código de la entrega de Node.js los controladores predeterminados para <strong>intents predeterminados</strong> que se incluyen en todos los agentes. El código también tiene instrucciones comentadas a fin de agregar controladores para intents definidos por el desarrollador.</p>
                    <p>El editor directo está diseñado para pruebas de entrega y prototipos simples. Una vez que estés listo para compilar una aplicación de producción, debes crear un <strong>servicio de webhook.</strong></p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;">
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Biblioteca de entregas de Dialogflow</strong></p>
                    <hr>
                    <p>El editor directo usa la <strong>biblioteca de entregas de Dialogflow</strong> de forma predeterminada. Esta biblioteca ya no se mantiene, pero sigue siendo útil como una solución simple de biblioteca de entregas. Solo el código de editor directo puede usar esta biblioteca.
                        La biblioteca de entregas de Dialogflow no admite el control de versiones. Si necesitas usar el control de versiones, elige una de las siguientes opciones:
                    </p>
                    <li>Reemplaza el código del editor intercalado predeterminado por tu código de webhook personalizado.</li>
                    <li>Implementa código de webhook personalizado directamente en Cloud Functions.</li>
                    <li>Bifurcar y modificar la biblioteca de entregas de Dialogflow para admitir el control de versiones.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_book_lover_re_rwjy.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
            <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_accept_terms_re_lj38.svg"></object>
                </div>  
            <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Limitaciones</strong></p>
                    <hr>
                    <p>Se aplica la siguiente limitación:</p>
                    <li>El editor intercalado solo admite Node.js.</li>
                    <li>Si modificas el código con la consola de Cloud Functions, ya no puedes usar el editor directo para modificarlo. La función le seguirá proporcionando entregas al agente, pero las modificaciones futuras se deberán realizar en la consola de Cloud Functions.</li>
                    <li>La función de editor directo debe tener el nombre dialog flow Firebase Fulfillment.</li>
                    <li>No puedes guardar ni descargar el código modificado en el editor directo sin implementarlo primero.</li>
                    <li>El editor directo solo admite dos archivos:</li>
                    <dd>°index.js: Contiene todo el código de entrega.</dd>
                    <dd>°package.json: Si modificas este archivo, se instalarán las dependencias que especificas en la implementación.</dd>
                    <li>Consulta la sección Biblioteca de entregas de Dialogflow para conocer las limitaciones de esta biblioteca que usa el editor directo de forma predeterminada.</li>
                </div>
               
            </div>
            <div class="contenido_texto_imagenes_Responsivo">
            <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Servicio de webhooks</strong></p>
                    <hr>
                    <p>Para usar entregas en un sistema de producción, debes implementar y aplicar un servicio de webhook. Para administrar la entrega, el servicio webhook debe aceptar solicitudes JSON y mostrar respuestas JSON como se especifica en esta guía. El flujo de procesamiento detallado para las entregas y los webhooks se describe en el documento de descripción general de las entregas.</p>
                    </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;">
            <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_grid_design_obmd.svg"></object>
                </div>  
            <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Requisitos del servicio de webhook</strong></p>
                    <hr>
                    <p>El servicio de webhook debe cumplir con los siguientes requisitos:</p>
                    <li>Debe administrar solicitudes HTTPS. HTTP no es compatible. Si alojas tu servicio de webhook en Google Cloud Platform mediante una solución de <a href="https://cloud.google.com/products/compute?hl=es-419" target="_blanck">Compute</a> o de <a href="https://cloud.google.com/serverless?hl=es-419" target="_blanck">procesamiento sin servidores</a>, consulta la documentación del producto para la entrega con HTTPS. A fin de conocer otras opciones de hosting, consulta <a href="https://support.google.com/domains/answer/7630973?hl=es-419" target="_blanck">Obtén un certificado SSL para el dominio.</a></li>
                    <li>La URL para las solicitudes debe ser de acceso público.</li>
                    <li>Debe administrar las solicitudes POST con un cuerpo JSON <a href="https://cloud.google.com/dialogflow/es/docs/fulfillment-webhook?hl=es-419#webhook_request" target="_blanck">Webhook Request.</a></li>
                    <li>Debe responder a las solicitudes Webhook Request con un cuerpo JSON <a href="https://cloud.google.com/dialogflow/es/docs/fulfillment-webhook?hl=es-419#webhook_response" target="_blanck">Webhook Response.</a></li>
                </div>
            </div>
            <a name="Respuesta_de_webhook"></a>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
            <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Respuesta de webhook</strong></p>
                    <hr>
                    <p>Una vez que tu webhook reciba una solicitud, deberá enviar una respuesta de webhook. El cuerpo de esta respuesta es un objeto JSON con la siguiente información:</p>
                    <li>La respuesta que Dialogflow le muestra al usuario final</li>
                    <li>Las actualizaciones de los contextos activos para la conversación</li>
                    <li>Un evento de seguimiento para activar la coincidencia de un intent</li>
                    <li>Una carga útil personalizada para enviar a la integración o al cliente de intents de detección</li>
                    <p>Se aplican las siguientes limitaciones a tu respuesta:</p>
                    <li>La respuesta debe ocurrir en un plazo de 10 segundos para las aplicaciones del Asistente de Google o de 5 segundos para todas las otras aplicaciones; de lo contrario, se agotará el tiempo de espera de la solicitud.</li>
                    <li>La respuesta debe tener un tamaño menor o igual que 64 KiB.</li>
                    <p>Consulta la documentación DialogFlow sobre el <a href="https://cloud.google.com/dialogflow/es/docs/fulfillment-webhook?hl=es-419" target="_blanck">servicio de webhooks.</a></p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_upload_re_pasx.svg"></object>
                </div> 
            </div>.
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_clean_up_re_504g.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Webhook para llenar ranuras</strong></p>
                    <hr>
                    <p>Cuando un intent coincide en el tiempo de ejecución, el agente de Dialogflow continúa recopilando información del usuario final hasta que el usuario haya proporcionado datos para cada uno de los parámetros obligatorios. Este proceso se llama <a href="https://cloud.google.com/dialogflow/es/docs/intents-actions-parameters?hl=es-419#required" target="_blanck">relleno de ranuras.</a>
                        De forma predeterminada, Dialogflow no envía una solicitud de webhook de entregas hasta que haya obtenido todos los datos necesarios del usuario final.
                        Si el webhook de llenado de ranuras está habilitado, Dialogflow envía una solicitud de webhook de entregas por cada turno de conversación durante el llenado de ranuras.
                        Si bien en la mayoría de los casos, los mensajes de parámetros son suficientes para recopilar todos los parámetros necesarios, un webhook para el llenado de ranuras te permite definir una lógica de agente más específica durante la recopilación de los parámetros. Por ejemplo, tu webhook podría manejar la personalización de preguntas de seguimiento o la configuración de ranuras de parámetros que no se pueden recuperar de la respuesta del usuario final, como una base de datos.
                    </p>
                
                </div>
               
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Habilita webhook para el llenado de ranuras</strong></p>
                    <hr>
                    <p>Si deseas habilitar el webhook para el llenado de ranuras durante el diseño, sigue estos pasos:</p>
                    <li>Ve a la consola de Dialogflow ES.</li>
                    <li>Selecciona un agente.</li>
                    <li>En el menú de la barra lateral izquierda, selecciona Intents.</li>
                    <li>Selecciona un intent.</li>
                    <li>Desplázate hacia abajo hasta la sección Fulfillment (Entrega).</li>
                    <li>Activa Enable webhook call for slot filling (Habilitar llamada de webhook para el llenado de ranuras).</li>
                    <li>Haz clic en Save (Guardar).</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_os_upgrade_re_r0qa.svg"></object>
                </div>              
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
            <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_updated_re_u4yh.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Controla el webhook para las llamadas de llenado de ranuras en el entorno de ejecución</strong></p>
                    <hr>
                    <p>El mensaje de solicitud de webhook que recibió tu servicio de webhook tiene un campo query Result.parameters. Este campo contiene el conjunto actual de parámetros proporcionados por el usuario final. Los valores que aún no se recopilaron se configuran como strings vacíos.</p>
                    <p>Se puede encontrar un ejemplo del mensaje de respuesta de webhook para configurar parámetros en los <a href="https://cloud.google.com/dialogflow/es/docs/fulfillment-webhook?hl=es-419#session_entity" target="_blanck">Ejemplos de respuesta de webhook.</a></p>
                </div>         
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Autentificación mutua de TLS</strong></p>
                    <hr>
                    <p>El tráfico de red iniciado por Dialogflow para las solicitudes de webhook se envía en una red pública. Para garantizar que el tráfico sea seguro y confiable en ambas direcciones, Dialogflow admite como opción la autenticación mutua de TLS (mTLS). Con mTLS, el cliente (Dialogflow) y el servidor (tu servidor de webhook) presentan un certificado durante un protocolo de enlace TLS, que demuestra la identidad de forma mutua.
                    </p>
                 </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_team_up_re_84ok.svg"></object>
                </div>          
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_file_manager_re_ms29.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Solicitud de mTLS</strong></p>
                    <hr>
                    <p>Prepara tu servidor HTTPS de webhook para que solicite el certificado de cliente durante el protocolo de enlace TLS.</p>
                    <p>Tu servidor de webhook debe verificar el certificado de cliente cuando lo recibe.</p>
                    <p>Instala una cadena de certificados para tu servidor de webhook, en el que el cliente y el servidor puedan confiar de forma mutua. Las aplicaciones que se conectan a los servicios de Google deben confiar en todas las autoridades certificadoras que se enumeran en los <a href="https://pki.goog/faq/#faq-27" target="_blanck">Google Trust Services.</a> Puedes descargar certificados raíz desde https://pki.goog/.</p>
                    <p>Para saber más sobre esto puedes consultar <a href="https://cloud.google.com/dialogflow/es/docs/fulfillment-mtls?hl=es-419" target="_blanck">la página oficial de DialogFlow.</a></p>
                </div>     
            </div>
            <a name="Integraciones"></a>
            <div class="contenido_texto_imagenes_Responsivo"> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Integraciones</strong></p>
                    <hr>
                    <p>Dialogflow se integra a muchas plataformas de conversación populares como Google Assistant, Slack y Facebook Messenger. Si deseas compilar un agente para una de estas plataformas, debes usar una de las muchas opciones de integraciones. No tienes que manejar las interacciones directas con el usuario final, por lo que puedes enfocarte en crear tu agente. El manejo de las interacciones con los usuarios finales varía según la plataforma de la integración, así que debes consultar la documentación correspondiente a tu caso para obtener más detalles.
                    </p>
                    <p>Existen varios tipos de integraciones de Dialogflow:</p>
                </div>      
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Integraciones de telefonía incorporadas de socios:</strong></p>
                    <hr>
                    <p>Estas integraciones son creación de socios de Google en colaboración con Google. Google no ofrece asistencia para ese tipo de integraciones. Para obtener asistencia, deberás comunicarte con el propietario de la integración. Algunas de estas integraciones de telefonía están disponibles como integraciones en un clic. Las integraciones en un clic requieren un solo clic para habilitar desde Dialogflow, seguida de los pasos de configuración que requiere el socio. Están disponibles las siguientes integraciones de socios de Google:</p>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/audiocodes?hl=es-419" target="_blanck">AudioCodes (un clic)</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/avaya?hl=es-419" target="_blanck">Avaya (un clic)</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/genesys?hl=es-419" target="_blanck">Genesys</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/signalwire?hl=es-419" target="_blanck">SignalWire (un clic)</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/twilio?hl=es-419" target="_blanck">Twilio</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/voximplant?hl=es-419" target="_blanck">Voximplant (un clic)</a></li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_emails_re_cqen.svg"></object>
                </div>      
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_phone_call_re_hx6a.svg"></object>
                </div>

                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Integraciones incorporadas de Dialogflow:</strong></p>
                    <hr>
                    <p>Estas integraciones tienen compatibilidad total con Dialogflow y se configuran con la consola. Las siguientes opciones están disponibles:                        
                    </p>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger?hl=es-419" target="_blanck">Dialogflow Messenger</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/phone-gateway?hl=es-419" target="_blanck">Dialogflow Phone Gateway</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/web-demo?hl=es-419" target="_blanck">Demostración web de Dialogflow</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/facebook?hl=es-419" target="_blanck">Messenger de Facebook</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/workplace?hl=es-419" target="_blanck">Workplace de Facebook</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/aog?hl=es-419" target="_blanck">Asistente de Google (heredado)</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/google-chat?hl=es-419" target="_blanck">Hangouts Chat</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/line?hl=es-419" target="_blanck">LINE</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/slack?hl=es-419" target="_blanck">Slack</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/integrations/telegram?hl=es-419" target="_blanck">Telegram</a></li>

                </div>     
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Integraciones de código abierto contribuidos por Google:</strong></p>
                    <hr>
                    <p>Estas integraciones de código abierto provienen de Google. Puedes bifurcarlas, modificarlas y publicar tus propias integraciones. Estas son integraciones heredadas integradas, por lo que aún se pueden seleccionar algunas de ellas como plataformas para respuestas de intents. Google colaboró con las siguientes integraciones:</p>
                    <li><a href="https://github.com/GoogleCloudPlatform/dialogflow-integrations/tree/master/kik#readme" target="_blanck">Kik</a></li>
                    <li><a href="https://github.com/GoogleCloudPlatform/dialogflow-integrations/tree/master/skype#readme" target="_blanck">Skype</a></li>
                    <li><a href="https://github.com/GoogleCloudPlatform/dialogflow-integrations/tree/master/spark#readme" target="_blanck">Spark (Cisco Webex)</a></li>
                    <li><a href="https://github.com/GoogleCloudPlatform/dialogflow-integrations/tree/master/twilio-ip#readme" target="_blanck">Mensajes de IP de Twilio</a></li>
                    <li><a href="https://github.com/GoogleCloudPlatform/dialogflow-integrations/tree/master/twilio#readme" target="_blanck">Mensajería de texto de Twilio</a></li>
                    <li><a href="https://github.com/GoogleCloudPlatform/dialogflow-integrations/tree/master/twitter#readme" target="_blanck">Twitter</a></li>
                    <li><a href="https://github.com/GoogleCloudPlatform/dialogflow-integrations/tree/master/viber#readme" target="_blanck">Viber</a></li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_file_manager_re_ms29.svg"></object>
                </div>      
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_pair_programming_re_or4x.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Integraciones independientes: </strong></p>
                    <hr>
                    <p>Estas integraciones no están incorporadas y son creadas por otras organizaciones e individuos. También puedes crear una integración personalizada con la API de Dialogflow. Google no ofrece asistencia para ese tipo de integraciones. Para obtener asistencia, deberás comunicarte con el propietario de la integración.
                    </p>
                </div>
            </div>
            <a name="Prácticas_recomendadas"></a>
            <div class="contenido_texto_imagenes_Responsivo"> 
                <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Prácticas recomendadas</strong></p>
                    <hr>
                    <p><strong>Prácticas recomendadas para el uso del servicio</strong></p>
                    <p>En esta guía, se proporcionan prácticas recomendadas para usar el servicio de Dialogflow. Estos lineamientos están diseñados a fin de lograr una mayor eficiencia y precisión, así como para obtener tiempos de respuesta óptimos del servicio.
                       También deberías consultar la guía sobre el diseño general de agentes para todos los tipos y sobre el diseño de agentes de voz, en particular, para diseñar agentes de voz.</p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p><strong>Producción</strong></p>
                    <p>Antes de ejecutar el agente en producción, asegúrate de implementar las prácticas recomendadas de producción.</p>
                    <li>Usa versiones de agente.</li>
                    <li>Reutiliza clientes de sesión.</li>
                    <li>Implementa el manejo de errores con reintentos.</li>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_modern_design_re_dlp8.svg"></object>
                </div> 
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_version_control_re_mg66.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p><strong>Habilita registros de auditoría</strong></p>
                    <p>Habilita los registros de auditoría de acceso a los datos para la API de Dialogflow en tu proyecto. Esto puede ayudarte a hacer un seguimiento de los cambios durante el diseño en los agentes de Dialogflow vinculados a este proyecto.
                    </p>
                    <p><strong>Versiones de agentes</strong></p>
                    <p>Siempre debes usar las versiones de agente para tu tráfico de producción. Consulta Versiones y entornos para obtener más detalles.
                        Crear copia de seguridad del agente
                        Mantén una copia de seguridad de agentes exportada actualizada. Esto te permitirá recuperarte rápidamente si tú o los miembros de tu equipo borran el agente o el proyecto por accidente.
                    </p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p><strong>Reutilización de los clientes</strong></p>
                    <p>Puedes mejorar el rendimiento de tu aplicación si reutilizas las instancias de la biblioteca cliente de *Cliente mientras dure la aplicación.</p>
                    <p>Lo más importante es que puedes mejorar el rendimiento de las llamadas a la API de intent de detección mediante la reutilización de una instancia de biblioteca cliente SessionsClient.</p>
                    <p>Consulta la referencia <a  href="https://cloud.google.com/dialogflow/es/docs/reference/common-types?hl=es-419#sessions" target="_blanck">Sesiones.</a></p>
                    <p>Para obtener más información al respecto, consulta la <a href="https://cloud.google.com/apis/docs/client-libraries-best-practices?hl=es-419#reuse_client_objects_and_sessions" target="_blanck">guía de prácticas recomendadas para bibliotecas cliente.</a></p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_work_chat_re_qes4.svg"></object>
                </div> 
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_voice_assistant_nrv7.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p><strong>Actualizaciones por lotes al agente</strong></p>
                    <p>Si envías muchas solicitudes a la API individuales de actualización de agente en un período breve, es posible que se limite la cantidad de solicitudes. Estos métodos de API durante la fase de diseño no están implementados con el fin de manejar altas tasas de actualización para un único agente.</p>
                    <p>Algunos tipos de datos tienen métodos de procesamiento por lotes para ese fin:</p>
                    <li>En lugar de enviar solicitudes create, patch o delete a muchas <a href="https://cloud.google.com/dialogflow/es/docs/reference/common-types?hl=es-419#entitytypes" target="_blanck">Entity Types</a>, usa los métodos batchUpdate o batch Delete.</li>
                    <li>En lugar de enviar solicitudes create, patch o delete a muchos <a href="https://cloud.google.com/dialogflow/es/docs/reference/common-types?hl=es-419#intents" target="_blanck">intents</a>, usa los métodos batchUpdate o batch Delete.</li>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p><strong>Reintentos de errores de la API</strong></p>
                    <p>Cuando llamas a métodos de la API, es posible que recibas respuestas de error. Hay algunos errores que se deben reintentar, ya que a menudo se generan debido a problemas transitorios. Existen dos tipos de errores:</p>
                    <li><a href="https://cloud.google.com/apis/design/errors?hl=es-419" target="_blanck">Errores de la API de Cloud.</a></li>
                    <li><a href="https://cloud.google.com/dialogflow/es/docs/fulfillment-webhook?hl=es-419#errors" target="_blanck">Errores enviados desde tu servicio de webhook.</a></li>
                    <p>Además, debes implementar una <a href="https://en.wikipedia.org/wiki/Exponential_backoff" target="_blanck">retirada exponencial</a> para los reintentos. Esto permite que tu sistema encuentre una tasa aceptable mientras el servicio de la API administra una carga grande.</p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_working_late_re_0c3y.svg"></object>
                </div> 
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_emails_re_cqen.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p><strong>Errores de la API de Cloud</strong></p>
                    <p>Si usas una <a href="https://cloud.google.com/dialogflow/es/docs/reference/libraries/overview?hl=es-419" target="_blanck">biblioteca cliente</a> proporcionada por Google, los reintentos de error de la API de Cloud con retirada exponencial se implementan por ti.</p>
                    <p>Si implementaste tu propia biblioteca cliente con REST o GRPC, debes implementar los reintentos para tu cliente. Para obtener información sobre los errores que debes o no debes reintentar, consulta <a href="https://google.aip.dev/194" target="_blanck">Proposiciones de mejora de la API: Configuración de reintento automática.</a></p>
                </div>
               
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p><strong>Errores de webhook</strong></p>
                    <p>Si tu llamada a la API activa una llamada de webhook, tu webhook puede mostrar un error. Incluso si usas una biblioteca cliente proporcionada por Google, los errores de webhook no se volverán a intentar de forma automática. Tu código debería reintentar los errores 503 Service Unavailable recibidos de tu webhook. Consulta la documentación del servicio de webhook para obtener información sobre los tipos de errores de webhook y cómo verificarlos.</p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_phone_call_re_hx6a.svg"></object>
                </div> 
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_accept_terms_re_lj38.svg"></object>
                </div> 
                <div class="contenedor_texto">
                    <p><strong>Llama a Dialogflow de forma segura desde un dispositivo de usuario final</strong></p>
                    <p>Nunca debes almacenar tus claves privadas usadas para acceder a la API de Dialogflow en un dispositivo de usuario final. Esto se aplica al almacenamiento de claves en el dispositivo directamente y a las claves de codificación hard-coded en aplicaciones. Cuando la aplicación cliente necesita llamar a la API de Dialogflow, debe enviar solicitudes a un servicio de proxy de propiedad del desarrollador en una plataforma segura. El servicio de proxy puede realizar las llamadas reales y autenticadas de Dialogflow.</p>
                    <p>Por ejemplo, no debes crear una aplicación para dispositivos móviles que llame a Dialogflow de forma directa. Si lo haces, es necesario que almacenes claves privadas en un dispositivo de usuario final. La aplicación para dispositivos móviles debería pasar las solicitudes a través de un servicio de proxy seguro.</p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p><strong>Prácticas recomendadas para el diseño de agentes generales</strong></p>
                    <p>En esta guía, se proporcionan prácticas recomendadas generales para diseñar todo tipo de agentes.</p>
                    <p>También deberías consultar la guía de <a href="https://cloud.google.com/dialogflow/es/docs/voice-agent-design?hl=es-419" target="_blanck">diseño de agentes de voz</a> específica para diseñar agentes de voz y la guía de <a href="https://cloud.google.com/dialogflow/es/docs/best-practices?hl=es-419" target="_blanck">prácticas recomendadas</a> a fin de usar el servicio de Dialogflow.</p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_add_notes_re_ln36.svg"></object>
                </div> 
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_add_user_re_5oib.svg"></object>
                </div>
                <div class="contenedor_texto">
                    <p><strong>Antes de compilar un agente</strong></p>
                    <p>En esta sección, se proporciona información que deberías tener en cuenta antes de comenzar a compilar un agente.</p>
                    <p>Objetivo</p>
                    <p>Considera el objetivo general de tu agente:</p>
                    <li>¿Qué está tratando de lograr tu negocio?</li>
                    <li>¿Qué esperarán tus usuarios de tu agente?</li>
                    <li>¿Con qué frecuencia van a interactuar los usuarios con tu agente?</li>
                </div>
                 
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                <div class="contenedor_texto">
                    <p><strong>Plataforma</strong></p>
                    <p>Considera cómo accederán los usuarios a tu agente. Revisa las plataformas compatibles con Dialogflow antes de crear contenido. Una vez que elijas las plataformas admitidas, prepara tu contenido en consecuencia. Algunas integraciones de la plataforma de Dialogflow son compatibles con mensajes enriquecidos que pueden incluir elementos como imágenes, vínculos y fichas de sugerencias.</p>
                    <p><strong>Compila agentes iterativamente</strong></p>
                    <p>Si tu agente será grande o complejo, comienza por compilar un diálogo que sólo aborde las solicitudes de nivel superior. Una vez que hayas establecido la estructura básica, itera las rutas de conversación para asegurarte de que incluyas todas las rutas posibles que puede tomar un usuario.</p>
                </div>
                <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_server_cluster_jwwq.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 39% 59%;"> 
            <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_ask_me_anything_re_x7pm.svg"></object>
                </div>
                    <div class="contenedor_texto">
                    <p><strong>Agentes compilados previamente</strong></p>
                    <p>Dialogflow ofrece agentes construidos previamente para ayudarte a comenzar. Los agentes compilados previamente abordan casos prácticos comunes, como reservas de hotel, navegación y compras en línea. Estos agentes incluyen intents y entidades que abordan las solicitudes más comunes de los usuarios. Agrega respuestas específicas de tu empresa para compilar rápidamente un agente funcional.</p>
                    <p><strong>Entidades del sistema</strong></p>
                    <p>Cuando un usuario realiza una solicitud, existe información importante para analizar a partir de lo que dijo. En Dialogflow, se llaman entidades. En particular, las entidades del sistema son entidades compiladas con anterioridad y proporcionadas por Dialogflow que controlan los tipos de información más comunes.</p>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo" style=" grid-template-columns: 59% 39%;"> 
                    <div class="contenedor_texto">
                    <p><strong>Small Talk</strong></p>
                    <p>Durante el desarrollo de tu diálogo, es posible que hayas considerado controlar solicitudes que están fuera de tema. Dialogflow ofrece una característica opcional llamada Small Talk. Si habilitas esta característica, tu agente responderá a una conversación general, respuestas emocionales y preguntas sobre el mismo agente. Todas las respuestas de Small Talk se pueden personalizar para garantizar que la experiencia, ya sea informal, de negocios o algo intermedio, represente a tu marca.</p>
                    </div>
                    <div class="contenedor_imagen">
                    <object style="width: 70%;" data="../img/undraw_creative_process_re_4ylm.svg"></object>
                </div>
            </div>
            <div class="contenido_texto_imagenes_Responsivo"> 
                    <div class="contenedor_texto">
                    <p style="color: #7a1a8d;margin:0 auto;text-align: center;"><strong>Autoevaluación</strong></p>
                    <hr>
                    <p style="text-align: justify; font-size: 20px; margin:0;">
                        En esta sección encontrarás algunas preguntas que te permitirán saber si lo que leíste anteriormente quedó claro del todo. Si no es el caso puedes ingresar a la pregunta para saber donde se resuelve esta misma.
                        <ol class="lista_preguntas_auto">
                        <li class="lista_preguntas_auto"> <a href="introduccion.php#queEs" >1.- ¿Cómo se crea un agente?</a></li>
                        <li class="lista_preguntas_auto"> <a href="introduccion.php#comofun" >2.- ¿Cómo se edita un contexto?</a></li>
                        <li class="lista_preguntas_auto"> <a href="introduccion.php#Trabajos" >3.- ¿Cuál es la intención?</a></li>
                        <li class="lista_preguntas_auto"> <a href="introduccion.php#panoama" >4.- ¿Qué es DialogFlow?</a></li>
                        <li class="lista_preguntas_auto"> <a href="introduccion.php#Bienvenida" >5.- ¿De dónde surge DialogFlow?</a></li>
                        <li class="lista_preguntas_auto"> <a href="introduccion.php#Bienvenida" >6.- ¿Cómo creó un contexto?</a></li>
                        <li class="lista_preguntas_auto"> <a href="introduccion.php#Bienvenida" >7.- ¿Qué es Small Talk?</a></li>
                        
                    </ol>
            </p>
                </div>
            </div>
            <div class="controles_de_abajo">
                <a href="estado_del_arte.php">Estado del arte</a>
                <div></div>
                
            </div>
            <br>
        </div>
    </div>
    <br>
    <script src="../js/progreso.js"></script>
</body>

</html>